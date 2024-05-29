<?php 

	include("conexion.php");
	$id=$_POST['cve'];
	$clave = $_POST['clave'];
	$concepto= $_POST['concepto'];
	$monto = $_POST['monto'];
 
	
$sql = "SELECT cve_conceptos, CONC_CVE FROM conceptos WHERE CONC_CVE='$clave'";
try{
$stmt = $conn->prepare($sql);
$stmt->execute();
	while ($registro = $stmt->fetch()) {
		$id_conceptos = $registro[0];
	$clave_concepto = $registro[1];
	}
	if (!($id_conceptos) || ( $id_conceptos == $id AND $clave == $clave_concepto ) ) {
		$sql ="UPDATE conceptos SET CONC_CVE='$clave', CONC_NOM='$concepto', CONC_MONTO='$monto' WHERE cve_conceptos = '$id' ";
	 // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
		
		
		header('location: ../alta/altaConceptos.php');
		
	}else{
		header('location: ../alta/altaConceptos.php');
	}
	}
	

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}$conn = null;
?>