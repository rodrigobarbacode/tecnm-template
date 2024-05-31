<?php
require_once "../../clases/conexion.php";
require_once "../../clases/acreditacion.php";

$obj = new acreditacion();

$datos = array(
    $_POST['Id'],
    $_POST['noControlU'],
    $_POST['ActividadU'],
    $_POST['EstatusU'],
    $_POST['PeriodoU']
);

    echo $obj->actualizarCursos($datos);
?>