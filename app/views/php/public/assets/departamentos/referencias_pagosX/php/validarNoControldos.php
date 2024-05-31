<?php 
	$noControl = $_POST['x'];
	 if($_POST['y'] == "QS1OSQ=="){
		 $servername = "localhost";

		 $username = "itm";
$password = "Parh1kun1";
$dbname = "santander"; 
$sql = "SELECT * FROM nuevoingreso WHERE ALU_CTR = '".$noControl."'";
	 }
	 else{
	$servername = "localhost";
$username = "referenciaspagos";
$password = "referenciaspagos";
$dbname = "pagosbanco_new";
	$sql="SELECT ALU_NOM FROM daluPagos WHERE ALU_CTR = '$noControl'";}
	
		try{
	
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, 
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}

	
	
	
	$valor = "NO EXISTE";
	try{

 
 $stmt = $conn->query($sql);
 
while ($row = $stmt->fetch( PDO::FETCH_ASSOC )) {
 
		$valor = $row["ALU_NOM"];
	 
	}
	}

catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

	echo $valor;
	  	
?>