<?php

// include autoloader
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

if (isset($_GET['lista'])) {  
$lista =$_GET['lista'];
$str="";
$resutlss="";
 
  
$servername = "localhost";
$username = "root";
$password = "Tzuput4r0";
$dbname = "extraescolares";

$profesor = "";
$actividad = "";
$lugar = "";
$periodo = "";

$lunes = "";
$martes = "";
$miercoles = "";
$jueves  = "";
$viernes = "";
$sabado = "";

$nombre = "";
$registros = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql= "SELECT a.*,ac.*,aa.*  FROM actividades_alumno aa inner join alumnos a on a.ALU_CTR = aa.id_alumno inner join actividades ac on ac.id_actividad = aa.id_actividad   WHERE ac.id_actividad = $lista AND ac.periodo = 20201";
    $stmt = $conn->query($sql);
     $count = 1;
    while ($row = $stmt->fetch()) {
		
		$profesor = $row['RFC'];
		$actividad = $row['actividad'];
		$lugar = $row['lugar'];
		$periodo = $row['periodo'];
		
		$lunes = $row['lunes'];
		$martes = $row['martes'];
		$miercoles = $row['miercoles'];
		$jueves  = $row['jueves'];
		$viernes = $row['viernes'];
		$sabado = $row['sabado']; 
		
		$registros.= "<tr>
    <td>".$count."</td>
    <td>".$row['ALU_CTR']."</td>
    <td>".$row['ALU_NOM']."</td>
    <td>".$row['carrera']."</td>
    <td>".$row['semestre']."</td>
  	<td>".$row['sexo']."</td>
    		<td>                                                                                     </td>
  </tr>";
  $count++;
}

}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
 
$html = "<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Denk+One' rel='stylesheet' type='text/css'>
 <link href='https://fonts.googleapis.com/css?family=Montserrat&display=swap' rel='stylesheet'>
<style>
  @page { margin: .3in; }
 body{ font-family: arial, sans-serif;}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size: 10px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
 
</style>

</head>

<body>
 <div  align='center'>
    <img src='http://localhost/extraescolares/img/encabezado.jpg' alt=''  style='max-width:90%;'/>
    </div>
 <div align='center' style='width:100%;' >
 
<h2 style='font-family: arial, sans-serif;'>Lista de Asistencia</h2>
</div>
<div align='center' style='width:100%; margin: 0 auto;'>
<table>
  <tr>
        <td><strong>Profesor</strong></td><td>$profesor</td><td><strong>Actividad</strong></td><td>$actividad</td>
 </tr>
 <tr>
 <td><strong>Lugar</strong></td><td>$lugar</td><td><strong>Periodo</strong></td><td>$periodo</td>
 </tr>
</table>
<br/>
<br/>

  <table> 
     <tr> 
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miercoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
        <th>Sabado</th> 
	 
      </tr> 
       <tr>
        <td>".$lunes."</td>
        <td>".$martes."</td>
        <td>".$miercoles."</td>
        <td>".$jueves."</td>
        <td>".$viernes."</td>
        <td>".$sabado."</td> 

      </tr>
  </table>
  <br/>
<br/>
<table>
  <tr>
    <th>#</th>
    <th>No. Control</th>
    <th>Nombre del Alumno</th>
     <th>Carrera</th>
      <th>Semestre</th>
      <th>Sexo</th>
      <th></th>
  </tr>". $registros.
  "</table>
</div>
</body>
</html>";


$filename = "eCertificate";


/// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf = new Dompdf(array('enable_remote' => true));

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream($filename,array("Attachment"=>0));

//*echo $html;
 
}
else
{
	/* Redirect browser */
header("Location: http://www.itmexicali.edu.mx/extraescolares"); 
exit();

}
?>   