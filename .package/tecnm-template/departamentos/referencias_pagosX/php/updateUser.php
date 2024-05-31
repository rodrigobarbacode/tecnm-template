<?php 
	include("conexion.php");
	$id=$_POST['cve'];
	$usuario = base64_encode($_POST['user']);
	$nombre= $_POST['name'];
	$password = base64_encode($_POST['password']);
	$nivel_usuario = $_POST['level'];
	 
$sql="SELECT usuario FROM usuarios WHERE usuario='$usuario' AND cve_usuarios<>'$id'";
	try{
$stmt = $conn->prepare($sql);
	$stmt->execute();
	$rows = $stmt->rowCount();
 
	if ($rows == 0) {
$sql = "UPDATE usuarios SET usuario='$usuario', nombre='$nombre', password='$password', nivel_usuario='$nivel_usuario' WHERE cve_usuarios = '$id' ";
echo $sql;
    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
 	header('location: ../alta/altaUsuarios.php');
}
else{
		 header('location: ../alta/altaUsuarios.php');
	}
	
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
 

	 
$conn = null;

 ?>