<?php 
	include("conexion.php");
	$usuario = base64_encode($_POST['x']);
	$idUsuario = $_POST['y'];
	
	$consulta = mysql_query("SELECT usuario FROM usuarios WHERE usuario = '$usuario' AND cve_usuarios<>'$idUsuario' ");
	//$registro = mysql_fetch_row($consulta);
	$rows = mysql_num_rows($consulta);
	//$rUsuario = $registro[0];
	//$rIdUsuario = $registro[1];
	if ($rows>0) {
		echo "existe";
	}else{
		echo "no_existe";
	}
	

?>