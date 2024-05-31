<?php 
	include("conexion.php");

	if (isset($_POST['id'])) {
		$clave = $_POST['id'];
			$sql =  "DELETE FROM conceptos where CONC_CVE='$clave'" ;
			$stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
			header('location: ../alta/altaConceptos.php');
	}else{
		$id = $_POST['concepto'];
		$sql = "DELETE FROM conceptos where cve_conceptos='$id';DELETE FROM conceptosusuarios where cve_conceptos='$id';";
		$stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
		 
			header('location: ../alta/altaConceptos.php');
	}
$conn = null;
 ?>