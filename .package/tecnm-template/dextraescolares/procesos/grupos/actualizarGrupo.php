<?php
require_once "../../clases/conexion.php";
require_once "../../clases/actividades.php";

$obj = new actividades();

$datos = array(
    $_POST['Id'],
    $_POST['ActividadU'],
    $_POST['GrupoU'],
    $_POST['HorarioU'],
    $_POST['DocenteU'],
    $_POST['CorreoU']
);

    echo $obj->actualizarAactividad($datos);
?>