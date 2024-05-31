<?php
require_once "../../clases/conexion.php";
require_once "../../clases/cursos.php";

$obj = new cursos();

$datos = array(
    $_POST['idCurso'],
    $_POST['noControlU'],
    $_POST['grupoU'],
    $_POST['EstatusU']
);

    echo $obj->actualizarCursos($datos);
?>