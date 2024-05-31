<?php 
	 
	$referencia = $_POST['x'];
	$valor = "NO EXISTE";
	
$servername = "localhost";
$username = "root";
$password = "itmXoto13";
$dbname = "robotronix";

$valor = "0";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT *,concat(nombre,'-',institucion,'-',referencia,'-',email) as info FROM `participantes` WHERE referencia = '$referencia' OR email = '$referencia' OR institucion like '%$referencia%'");
    $stmt->execute();
 
    while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
    //select column by key and use
    $valor = 1;
}
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;


	echo $valor;
?>