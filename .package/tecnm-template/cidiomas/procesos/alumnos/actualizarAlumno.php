<?php
require_once "../../clases/conexion.php";
require_once "../../clases/alumnos.php";

$obj = new alumnos();

$datos = array(
    $_POST['noControlU'],
    $_POST['fechaU']
);

    echo $obj->actualizarAlumno($datos);
?>