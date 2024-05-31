<?php 
	include("conexion.php");
	
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
	}else{
		$id = $_POST['usuario'];
	}
	 
	$sql = "DELETE FROM usuarios where cve_usuarios='$id'";
	$stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
	
	header('location: ../alta/altaUsuarios.php');



 ?>