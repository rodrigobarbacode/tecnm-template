<?php 
	//*
	// */
	/*$host = "localhost";
	$user = "referenciaspagos";
	$pass = "";
	$dbname = "dany";

	$host = "localhost";
	$user = "referenciaspagos";
	$pass = "referenciaspagos";
	$dbname = "pagosbanco_new";
	
	$conexion = @mysql_connect($host,$user,$pass) or die("problema al conectar el servidor");
	$db=mysql_select_db($dbname) or die("Error al tratar de conectar la base de datos");
		*/
	
	try{
	$servername = "localhost";
$username = "root";
$password = "Tzuput4r0";
$dbname = "santander";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}


 ?>