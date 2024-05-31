<?php 
	$usr = $_POST['x'];
	 
	$servername = "localhost";
$username = "root";
$password = "itmXoto13";
$dbname = "covid19";
	$sql="SELECT nombre FROM alumnos WHERE no_de_control = '$usr'";
	
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
 
		$valor = "Alumno: ".$row["nombre"]."<br>";
	 
	}
	$sql="SELECT nombre FROM personal WHERE no_de_empleado = '$usr'";
	$stmt = $conn->query($sql);
 
while ($row = $stmt->fetch( PDO::FETCH_ASSOC )) {
 
		$valor = "Personal: ".$row["nombre"]."<br>";
	 
	}
	}

catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

	echo $valor;
	  	
?>