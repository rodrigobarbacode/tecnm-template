<?php 
	include("conexion.php");
	$usuario = base64_encode($_POST['x']);
	//$usuario = "dGVj";
	$consulta = mysql_query("SELECT usuario FROM usuarios WHERE usuario = '$usuario'");
	$registro = mysql_fetch_row($consulta);
	$rUsuario = $registro[0];
	if ($usuario==$rUsuario) {
		echo "existe";
	}else{
		echo "no_existe";
	}
?>