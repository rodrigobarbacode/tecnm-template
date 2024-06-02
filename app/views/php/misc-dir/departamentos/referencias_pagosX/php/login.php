<?php 
	include("conexion.php");

	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$consulta = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usuario' and password = '$password'", $conexion) or die ("Error de consulta");
	
	if($row = mysql_fetch_array($consulta)>0)
		header("location: ../alta/altaUsuarios.php");
	else
		header("location: ../index.php");
?>