<?php 
	include("conexion.php");
	$concepto = $_POST['x'];
	$idConcepto = $_POST['y'];
	 
	
$valor = "no_existe";
	try{
$sql="SELECT CONC_CVE FROM conceptos WHERE CONC_CVE = '$concepto' AND cve_conceptos<>'$idConcepto' ";
 
 $stmt = $conn->query($sql);
 
while ($row = $stmt->fetch( PDO::FETCH_ASSOC )) {
 
		$valor = "existe";
	 
	}
	}

catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

	echo $valor;
?>