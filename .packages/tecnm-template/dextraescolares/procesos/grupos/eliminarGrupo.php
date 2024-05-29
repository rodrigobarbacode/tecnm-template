<?php
require_once "../../clases/conexion.php";
require_once "../../clases/actividades.php";


$idGrupo = $_POST['idGrupo'];

$obj= new actividades();

echo $obj->eliminarGrupo($idGrupo);
?>