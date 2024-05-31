<?php
require_once "../../clases/conexion.php";
require_once "../../clases/actividades.php";

$obj = new actividades();

$idGrupo = $_POST['Id'];

echo json_encode($obj->obtenerDatoGrupo($idGrupo)); 

?>