<?php
session_start();
require_once "../clases/conexion.php";
require_once "../clases/alumnos.php";

$obj = new alumnos();
$usuario= $_POST['noControl'];
$pass = $_POST['fecha'];
$datos = array(
    $usuario,
    $pass
    );

    echo $obj -> loginUser($datos);
?>