<?php 
	include("conexion.php");
	$claveConcepto = $_POST['x'];
	
	
	$sql = "SELECT CONC_CVE FROM conceptos WHERE CONC_CVE = '$claveConcepto'";
	// Prepare statement
    $stmt = $conn->prepare($sql);
	
	$rows = $stmt->rowCount();
	if ($rows>0) {
		echo "existe";
	}else{
		echo "no_existe";
	}
		$conn = null;
?>