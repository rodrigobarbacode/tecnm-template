<?php 
	include("conexion.php");
	$claveConcepto = $_POST['x'];
	
	
	$consulta = mysql_query("SELECT ALU_CVE FROM conceptos WHERE ALU_CVE = '$claveConcepto'");
	$rows = mysql_num_rows($consulta);
	if ($rows>0) {
		echo "existe";
	}else{
		echo "no_existe";
	}
	
?>