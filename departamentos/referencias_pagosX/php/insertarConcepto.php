<?php 
	include("conexion.php");

	$clave = $_POST['clave'];
	$concepto = $_POST['concepto'];
	$monto = $_POST['monto'];
$fechaInicio = $_POST['fechaInicio'];
$fechaFin = $_POST['fechaFin']; 
$sql = "SELECT CONC_CVE FROM conceptos WHERE CONC_CVE='$clave'";
	// Prepare statement
    $stmt = $conn->prepare($sql);
	
	$rows = $stmt->rowCount();
//echo "rows:".$rows;
	if ($rows == 0) {
		$sql = "INSERT INTO conceptos (CONC_CVE,CONC_NOM,CONC_MONTO,fechaInicio,fechaFin) VALUES ('$clave', '$concepto','$monto','$fechaInicio','$fechaFin')";
		// Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute(); 
		 header('location: ../alta/altaConceptos.php');
	}else{
		$error=1;
	 header('location: ../alta/altaConceptos.php');
	}
	$conn = null;

 ?>