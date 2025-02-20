<?php
session_start();
require_once "../../clases/conexion.php";
require_once "../../clases/alumnos.php";

    $obj = new alumnos();

    $datos = array(
        $_POST['control'],
        $_POST['paterno'],
        $_POST['materno'],
        $_POST['nombre'],
        $_POST['carrera'],
		$_POST['curp'],
        $_POST['fecha']
    );

    echo $obj->agregarAlumno($datos);
?>

