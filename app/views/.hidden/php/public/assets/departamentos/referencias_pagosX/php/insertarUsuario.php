<?php 
	include("conexion.php");

	$usuario = base64_encode($_POST['user']);
	$nombre= $_POST['name'];
	$password = base64_encode($_POST['password']);
	$nivel_usuario = $_POST['level'];
	
	$sql= "SELECT usuario FROM usuarios WHERE usuario='$usuario'";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$rows = $stmt->rowCount();
 
	if ($rows == 0) {
		 $sql = "INSERT INTO usuarios (usuario,password,nombre,nivel_usuario) VALUES ('$usuario','$password','$nombre','$nivel_usuario')";
		// Prepare statement
    $stmt = $conn->prepare($sql);
 
    // execute the query
    	 $stmt->execute(); 
	 header('location: ../alta/altaUsuarios.php');  
	}
	    else{
		$error=1;
	 header('location: ../alta/altaUsuario.php');
	}   
	
	$conn = null;

 ?>