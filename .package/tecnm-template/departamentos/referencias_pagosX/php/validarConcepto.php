<?php 
	include("conexion.php");
	$concepto = $_POST['x'];
	$valor = "";
	
	try{
$sql="SELECT CONC_MONTO FROM conceptos WHERE CONC_CVE = '$concepto'";
 
 $stmt = $conn->query($sql);
 
while ($row = $stmt->fetch( PDO::FETCH_ASSOC )) {
 
		$valor = $row["CONC_MONTO"];
	 
	}
	}

catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

	echo $valor;
?>