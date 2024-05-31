<?php
require_once "../../clases/conexion.php";
require_once "../../clases/cursos.php";

$obj = new cursos();

$idCurso = $_POST['idCurso'];

echo json_encode($obj->obtenerDatoCurso($idCurso)); 

?>