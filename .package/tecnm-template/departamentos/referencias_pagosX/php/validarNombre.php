<?php 
	include("conexion.php");
	$usuario = base64_encode($_POST['x']);
	 
		$valor = "no_existe";
	try{
$sql="SELECT usuario FROM usuarios WHERE usuario = '$usuario'";
 
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