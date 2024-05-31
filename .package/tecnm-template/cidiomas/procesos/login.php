<?php
session_start();
require_once "../clases/conexion.php";
require_once "../clases/alumnos.php";

$obj = new alumnos();

$datos = array(
     $_POST['noControl'],
     $_POST['fecha']
    );

    echo $obj -> loginUser($datos);
?>