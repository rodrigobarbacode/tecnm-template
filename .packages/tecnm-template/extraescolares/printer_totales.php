<?php

// include autoloader
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;
 
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
	$sql= "select count(aa.id_actividad) as total, a.* from actividades a left join actividades_alumno aa on aa.id_actividad = a.id_actividad WHERE aa.periodo =20201 GROUP by a.id_actividad ";
    $stmt = $conn->query($sql);
     $count = 1;
    while ($row = $stmt->fetch()) {
 
		
		$registros.= "
      <tr>
        <td style='text-align:center;max-width:40px'>". $row['total']."</td>
		<td><div class='custom-control custom-radio'> ". $row['actividad']." </td>
      
      </tr> "
    ;
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
 
<h2 style='font-family: arial, sans-serif;'>Lista de Totales por Actividad</h2>
</div>
 
 
  <br/>
<br/>
<table>
  <tr>
   <th>Inscritos</th>
        <th>Actividad</th>
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
 
  
?>   