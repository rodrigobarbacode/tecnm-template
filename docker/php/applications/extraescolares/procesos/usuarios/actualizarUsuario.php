<?php
require_once "../../clases/conexion.php";
require_once "../../clases/usuario.php";

$obj = new usuarios();

$pass = sha1($_POST['Fecha']);
$datos = array(
    $_POST['Id'],
    $_POST['noEmpleado'],
    $_POST['Nombre'],
    $pass
);

    echo $obj->actualizarUsuario($datos);
?>