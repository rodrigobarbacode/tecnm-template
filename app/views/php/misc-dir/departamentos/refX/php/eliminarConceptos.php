<?php 
	include("conexion.php");

	if (isset($_POST['id'])) {
		$clave = $_POST['id'];
			$consulta = mysql_query("DELETE FROM conceptos where ALU_CVE='$clave'");
			header('location: ../alta/altaConceptos.php');
	}else{
		$id = $_POST['concepto'];
			$consulta = mysql_query("DELETE FROM conceptos where cve_conceptos='$id'");
			$consultaDos = mysql_query("DELETE FROM conceptosusuarios where cve_conceptos='$id'");
			header('location: ../alta/altaConceptos.php');
	}

 ?>