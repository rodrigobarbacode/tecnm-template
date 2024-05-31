<?php 
	include("conexion.php");

	$usuario = base64_encode($_POST['user']);
	$nombre= $_POST['name'];
	$password = base64_encode($_POST['password']);
	$nivel_usuario = $_POST['level'];

	$consulta=mysql_query("SELECT usuario FROM usuarios WHERE usuario='$usuario'",$conexion);
	

	if (!(mysql_fetch_row($consulta))) {
		mysql_query("INSERT INTO usuarios (usuario,password,nombre,nivel_usuario) VALUES ('$usuario','$password','$nombre','$nivel_usuario')",$conexion);
		header('location: ../alta/altaUsuarios.php');
	}else{
		$error=1;
		header('location: ../alta/altaUsuarios.php');
	}
	

 ?>