<?php
session_start();
require_once "../../clases/conexion.php";
require_once "../../clases/grupos.php";

    $obj = new grupos();

    $datos = array(
        $_POST['nombreGrupo'],
        $_POST['Nivel'],
        $_POST['Inicio']." - ".$_POST['Termina']
    );

    echo $obj->agregarGrupo($datos);
?>