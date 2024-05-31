<?php
require_once "../../clases/conexion.php";
require_once "../../clases/grupos.php";


$idGrupo = $_POST['idGrupo'];

$obj= new grupos();

echo $obj->eliminarGrupo($idGrupo);
?>