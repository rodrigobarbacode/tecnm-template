<?php 
	include("conexion.php");

	$clave = $_POST['clave'];
	$concepto = $_POST['concepto'];
	$monto = $_POST['monto'];
 

	//mysql_query("INSERT INTO conceptos (CONC_CVE,CONC_NOM,CONC_MONTO) VALUES ('$clave', '$concepto','$monto')",$conexion);
	//header('location: ../alta/altaConceptos.php');
$stmt2 = $conn->prepare("SELECT CONC_CVE FROM conceptos WHERE CONC_CVE='$clave'");
 
$stmt2->execute();
$row = $stmt2->fetch(PDO::FETCH_ASSOC);

if(!$row) {
		$sql = "INSERT INTO conceptos (CONC_CVE,CONC_NOM,CONC_MONTO) VALUES ('$clave', '$concepto','$monto')" ;
		
		$stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute(); 
		header('location: ../alta/altaConceptos.php');
	}else{
		$error=1;
		header('location: ../alta/altaConceptos.php');
	}
	

 ?>