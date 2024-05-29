<?php
require_once "../../clases/conexion.php";
require_once "../../clases/alumnos.php";

$obj = new alumnos();

$datos = array(
    $_POST['noControlU'],
    $_POST['pagoU']
);

    echo $obj->actualizarAlumno($datos);
?>