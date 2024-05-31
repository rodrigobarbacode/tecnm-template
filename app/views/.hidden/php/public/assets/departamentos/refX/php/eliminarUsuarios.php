<?php 
	include("conexion.php");
	
	if (isset($_POST['id'])) {
		$id = $_POST['id'];
	}else{
		$id = $_POST['usuario'];
	}
	
	$consulta = mysql_query("DELETE FROM usuarios where cve_usuarios='$id'");
	header('location: ../alta/altaUsuarios.php');



 ?>