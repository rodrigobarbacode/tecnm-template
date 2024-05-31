<?php
$usuario = utf8_decode($_POST['usuario']);
$grupo = utf8_decode($_POST['grupo']);
$estado = utf8_decode($_POST['estado']);

$con = mysql_connect('localhost', 'biblioteca', 'biblioteca2015');
mysql_select_db("circulo", $con);

$insert = "INSERT INTO UsuarioGrupos (GUsuario,GGrupos,Estado) VALUES ('$usuario','$grupo','$estado')";
mysql_query($insert);
?>

