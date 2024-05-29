<?php
require_once "../../clases/conexion.php";
require_once "../../clases/acreditacion.php";

$obj = new acreditacion();

$idCurso = $_POST['Id'];

echo json_encode($obj->obtenerDatoCurso($idCurso)); 

?>