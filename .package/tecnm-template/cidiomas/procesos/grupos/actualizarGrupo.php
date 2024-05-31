<?php
require_once "../../clases/conexion.php";
require_once "../../clases/grupos.php";

$obj = new grupos();

$datos = array(
    $_POST['idgrupo'],
    $_POST['GrupoU'],
    $_POST['NivelU'],
    $_POST['InicioU']." - ".$_POST['TerminaU']
);

    echo $obj->actualizarGrupo($datos);
?>