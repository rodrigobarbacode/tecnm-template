<?php 
	include("conexion.php");
	$concepto = $_POST['x'];
	$idConcepto = $_POST['y'];
	
	$consulta = mysql_query("SELECT ALU_CVE FROM conceptos WHERE ALU_CVE = '$concepto' AND cve_conceptos<>'$idConcepto' ");
	//$registro = mysql_fetch_row($consulta);
	$rows = mysql_num_rows($consulta);
	//$rUsuario = $registro[0];
	//$rIdUsuario = $registro[1];
	if ($rows>0) {
		echo "existe";
	}else{
		echo "no_existe";
	}
	

?>