<?php
 session_start();
 //$idusuario=$_SESSION['iduser'];
 require_once "../../clases/conexion.php";
 require_once "../../clases/reingreso.php";

 $obj= new reingreso();

 $datos = array(
     $_POST['noControlU'],
     $_POST['grupoU']
     //$_POST['cantidad']
 );

 echo $obj->agregarRegistro($datos);

 ?>