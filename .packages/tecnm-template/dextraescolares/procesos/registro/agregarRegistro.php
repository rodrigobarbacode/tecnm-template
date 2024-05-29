<?php
 session_start();
 $idusuario=$_SESSION['iduser'];
 require_once "../../clases/conexion.php";
 require_once "../../clases/alumnos.php";

 $obj= new alumnos();

 $datos = array(
     $_POST['noControl'],
     $_POST['grupo']
 );

 echo $obj->agregarRegistro($datos);

 ?>