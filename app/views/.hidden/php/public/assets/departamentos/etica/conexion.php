<?php 

	try{
	$servername = "localhost";
$username = "root";
$password = "itmXoto13";
$dbname = "buzon_etica";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, 
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}


 ?>