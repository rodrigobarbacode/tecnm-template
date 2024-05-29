<?php 
	include("conexion.php");
	$id=$_POST['cve'];
	$usuario = base64_encode($_POST['user']);
	$nombre= $_POST['name'];
	$password = base64_encode($_POST['password']);
	$nivel_usuario = $_POST['level'];
	
	$consulta=mysql_query("SELECT usuario FROM usuarios WHERE usuario='$usuario' AND cve_usuarios<>'$id'",$conexion);
	

	if (!(mysql_fetch_row($consulta))) {
	mysql_query("UPDATE usuarios SET usuario='$usuario', nombre='$nombre', password='$password', nivel_usuario='$nivel_usuario' WHERE cve_usuarios = '$id' ",$conexion);
	header('location: ../alta/altaUsuarios.php');
	}else{
		header('location: ../alta/altaUsuarios.php');
	}

 ?>