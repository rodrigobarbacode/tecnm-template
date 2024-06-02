<?php
require_once("conexion.php");
$email= $_POST["email"];
$queja= $_POST["queja"];


try {
    
    $stmt = $conn->prepare("INSERT INTO quejas(email, queja) VALUES ( :email , :queja )");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':queja', $queja); 
	
	$stmt->execute();
	
	
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo   "<br>" . $e->getMessage();
    }

$conn = null;


?>
