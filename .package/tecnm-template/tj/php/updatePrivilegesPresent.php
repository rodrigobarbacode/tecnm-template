<?php 

	include("conexion.php");
	$id=$_POST['cve'];
	$clave = $_POST['clave'];
	$concepto= $_POST['concepto'];
	$monto = $_POST['monto'];

	$consulta=mysql_query("SELECT cve_conceptos, ALU_CVE FROM conceptos WHERE ALU_CVE='$clave'",$conexion);
	$registro = mysql_fetch_row($consulta);

	$id_conceptos = $registro[0];
	$clave_concepto = $registro[1];



	if (!($id_conceptos) || ( $id_conceptos == $id AND $clave == $clave_concepto ) ) {
		mysql_query("UPDATE conceptos SET ALU_CVE='$clave', ALU_NOM='$concepto', ALU_MONTO='$monto' WHERE cve_conceptos = '$id' ",$conexion);
		header('location: ../alta/altaConceptos.php');
		
	}else{
		header('location: ../alta/altaConceptos.php');
	}
	


?>