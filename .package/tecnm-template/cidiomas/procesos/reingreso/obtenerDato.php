<?php
require_once "../../clases/conexion.php";
require_once "../../clases/reingreso.php";

$obj = new reingreso();

$idCurso = $_POST['idCurso'];

echo json_encode($obj->traerID($idCurso)); 

?>