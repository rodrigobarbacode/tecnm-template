<?php
$name = utf8_decode($_POST['comentario']);
$idUser = utf8_decode($_POST['user']);
$idTema = utf8_decode($_POST['idtema']);


//Para la conexión deberás introducir el usuario y password de tu base de datos
$con = mysql_connect('localhost', 'biblioteca', 'biblioteca2015');
mysql_select_db("circulo", $con);

$insert = "INSERT INTO cv_Comentario (Comentario,hora,FechaPublicacion,idTema,idUsuario) VALUES ('$name',current_time(),now() ,'$idTema','$idUser')";
mysql_query($insert);
?>

