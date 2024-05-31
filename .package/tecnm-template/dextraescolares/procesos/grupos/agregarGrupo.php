<?php
session_start();
require_once "../../clases/conexion.php";
require_once "../../clases/actividades.php";

    $obj = new actividades();

    $datos = array(
        $_POST['area'],
        $_POST['actividad'],
        $_POST['grupo'],
        $_POST['horario'],
        $_POST['docente'],
        $_POST['rfc'],
        $_POST['correo'],
        $_POST['moodle'],
        $_POST['periodo']
    );

    echo $obj->agregarActividad($datos);
?>