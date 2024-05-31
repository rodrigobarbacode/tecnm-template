<?php 
	include("conexion.php");

	$clave = $_POST['clave'];
	$concepto = $_POST['concepto'];
	$monto = $_POST['monto'];

	$consulta=mysql_query("SELECT ALU_CVE FROM conceptos WHERE ALU_CVE='$clave'",$conexion);

	//mysql_query("INSERT INTO conceptos (ALU_CVE,ALU_NOM,ALU_MONTO) VALUES ('$clave', '$concepto','$monto')",$conexion);
	//header('location: ../alta/altaConceptos.php');

	if (!(mysql_fetch_row($consulta))) {
		mysql_query("INSERT INTO conceptos (ALU_CVE,ALU_NOM,ALU_MONTO) VALUES ('$clave', '$concepto','$monto')",$conexion);
		header('location: ../alta/altaConceptos.php');
	}else{
		$error=1;
		header('location: ../alta/altaConceptos.php');
	}
	

 ?>