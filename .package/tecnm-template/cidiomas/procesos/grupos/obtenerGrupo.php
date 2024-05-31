<?php
require_once "../../clases/conexion.php";
require_once "../../clases/grupos.php";

$obj = new grupos();

$idGrupo = $_POST['idgrupo'];

echo json_encode($obj->obtenerDatoGrupo($idGrupo)); 

?>