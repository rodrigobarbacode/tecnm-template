<?php
 include("conexion_pdo.php");
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
session_start(); 
 
if(isset($_SESSION['myusername']) == 1 and $_SESSION['nivel'] == 2 ){
$_SESSION['myusername'] = $_SESSION['myusername'];
}

?>



<!DOCTYPE html >

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Creditos Complementarios</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<style>


img{ 

	width:100%;
	border:2px solid #fff; background: 
	 box-shadow: 10px 10px 5px #ccc; 
	 -moz-box-shadow: 10px 10px 5px #ccc; 
	 -webkit-box-shadow: 10px 10px 5px #ccc; 
	 -khtml-box-shadow: 10px 10px 5px #ccc;
}

#center{
	color:#FF9F00;
	font-size:15px;
	}
	
	



</style>




<link rel="stylesheet" type="text/css" href="style.css">
     
<script type="text/javascript" src="greybox/AJS.js"></script>
<script type="text/javascript" src="greybox/AJS_fx.js"></script>
<script type="text/javascript" src="greybox/gb_scripts.js"></script>
<link href="greybox/gb_styles.css" rel="stylesheet" type="text/css" />

</head>

<body >
<div class="container">
<img src="img/encabezado.jpg" />
</div>


<br />
<br />
<br />

<h1><center>ACTIVIDADES COMPLEMENTARIAS</center></h1>
<br />
<center id="center"><strong><font size="5px"><?php echo $_SESSION['myusername'];?></font></strong></center>
<br />

<?php 
	   
	  $no_control=$_SESSION['myusername'];


$sql="SELECT CONCAT( actividad ) AS actividad, p1.periodo AS periodo_inicial, p2.periodo AS periodo_final, ra.comentario, ra.creditos, ra.cve_registro
FROM registro_actividad ra
INNER JOIN alumnos a ON a.no_de_control = ra.no_de_control
INNER JOIN actividades ac ON ac.cve_actividad = ra.cve_actividad
INNER JOIN periodos p1 ON p1.cve_periodo = periodo_inicial
INNER JOIN periodos p2 ON p2.cve_periodo = periodo_final
WHERE ra.no_de_control ='".$no_control."'";

  
try{
$stmt = $conn->prepare($sql);
$stmt->execute();

 

?>


<div class="container">
<div class="row">
<?php
$contador =0;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  
$contador++;
?>

<div class="col-md-12" align="center">
<font size="3px" color="#000000">
<strong><?php echo  $row["actividad"];?></strong>
</font>

<div>
<br />

<strong>Periodo Inicial:</strong> <?php echo $row ["periodo_inicial"];?><br />
<strong>Periodo Final:</strong> <?php echo $row ["periodo_final"];?><br />
<strong>N&uacute;mero de Creditos:</strong> <?php echo $row ["creditos"];?><br />
<strong>Comentario:</strong> <?php echo $row ["comentario"];?><br /><br />
<hr width="100%" style="border-color: #858585"/>


</div><!--cierra div style -->
</div> <!--cierra div class -->

<!--<hr width="100%" style="border-color: #858585"/>-->
<?php

} 
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$stmt = null;
?>

</div><!--cierra div class="row" -->
</div><!--cierra div class="container" -->



</body>
<br />
<br />
<br />
<center> 
   <div class="container text-center">
   <a href="logout.php" style="font-size:20px";>
            <button id="imprimir" class="btn btn-lg btn-default" onclick="javascript: imprime_hoja();">
    <span class="glyphicon glyphicon glyphicon-log-out pull-left"></span>&nbsp;&nbsp;
    Cerrar Sesi&oacute;n</a>  
</button> 
</div>
</center>
<br />
<br />

</html>