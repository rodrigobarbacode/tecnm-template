 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Actividades Extraescolares</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script type="text/javascript">
      function imprime_hoja()
            {
            for (i = 0; i < document.all.length; i++) 
                {
                    if (document.all[i].id.substring(8,0)=="imprimir" )
                    {
                        document.all[i].style.visibility='hidden';
                    }
                }

                self.print();
                setTimeout("muestra()", 7000);
            }</script>
            <style>
			@media print {
  * { margin: 0 !important; padding: 0 !important; }
  #controls, .footer, .footerarea{ display: none; }
  html, body, h3,h2,h1 {
    /*changing width to 100% causes huge overflow and wrap*/
    height:100%; 
    overflow: hidden;
    background: #FFF; 
    font-size: 9.5pt;
	padding-bottom: 15 !important;
  }

  .template { width: auto; left:0; top:0; }
  img { width:50%; padding-bottom:50px !important }
  #encabezado {width:100%;}	
  li { margin: 0 0 10px 20px !important;}
  #imprimir	{ display: none; }
}
    </style>
			
  </head>
<?php
session_start();  
 if(isset($_SESSION["username"]))  
 {  
 $number_of_rows = 0;
$alumno = "";
$tabla="";
 
	
	require_once("php/connection.php");
	 
	 
	try {    
$sql= "SELECT a.*,ac.*,aa.*  FROM actividades_alumno aa inner join alumnos a on a.ALU_CTR = aa.id_alumno inner join actividades ac on ac.id_actividad = aa.id_actividad   WHERE id_alumno = '".$_SESSION["username"]."' AND ac.periodo = 20201";
$stmt = $conn->query($sql);
$actividades = $stmt->fetch(PDO::FETCH_ASSOC);
 
foreach($actividades as $actividad){
    		$alumno = $actividades['ALU_CTR']." ".$actividades['ALU_NOM'];
	$tabla ="
      <tr>
        
		<td> 
      ". $actividades['actividad']." 
     </td>
         <td>". $actividades['lunes']."</td>
		<td>". $actividades['martes']."</td>
		<td>". $actividades['miercoles']."</td>
		<td>". $actividades['jueves']."</td>
		<td>". $actividades['viernes']."</td>
		<td>". $actividades['sabado']."</td>
        <td>". $actividades['lugar']."</td>
        <td>". $actividades['RFC']."</td>
      </tr> "
    ;
	
	
	$number_of_rows ++;
}

	
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
// echo "You have selected :".$_POST['actividades'];    Displaying Selected Value
 
 }
?>
<body>  
<header class="text-center"> 
 <img src="img/encabezado.jpg" 
 class="img-rounded" id="encabezado"/>
 </header>
 

<div class="container text-center" style="margin-top:30px">
  <h3> <?php echo $alumno;?></h3>
  <p> Te has inscrito de manera correcta.</p> 
</div>
<div class="container d-flex justify-content-center">
 <form action="action_save.php" name="form" onsubmit="return validateForm()" method="POST">
    
     <table class='table table-hover table-responsive'>
    <thead>
     <tr>
        <th>Actividad</th>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miercoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
        <th>Sabado</th>
        <th>Lugar</th>
        <th>Maestro</th> 
		
      </tr>
    </thead>
    <tbody>
  
    <?php
	 
	 if($number_of_rows > 0){
    
	echo $tabla;
	
	
	}
else
{
	echo "<td colspan='4'>ERROR AL INSCRIBIRTE INTENTA DE NUEVO</td>";
	}
   
 
echo "</tbody>
  </table>"; 

	?>     
    
    <div class="text-center">
    <button type="button" id="imprimir" class="btn btn-primary btn-lg" onclick="javascript: imprime_hoja();"><i class="fas fa-print"></i></button>
       
    </div>
  </form>
</div>
 <br/>
 <br/>
 <br/> 

 
 
 <!--FIN HTML-->
</body>
</html>