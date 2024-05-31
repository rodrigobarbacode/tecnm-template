<?php
//$usuario = 1; $clave = "mario";
include "../funciones/login.php";

if(isset($_POST['pw'])){
     $clave1 = $_POST['pw'];
}
if(isset($_POST['pw2'])){
     $clave2 = $_POST['pw2'];
}


if(isset($_POST['email'])){
     $correo = $_POST['email'];
}

$controller = 2;
require_once '../controller/usuarioController.php';

 if(count($registro)==1){
    if($correo==$registro[0]['email']){
		 echo " Su correo ya existe en base la de datos!";
	}
 }else{
 	
	 if(strlen($clave1)<7){
		 echo " La contraseña debe tener al menos 7 caracteres! y no mas de 15";
	   }else{
	// conteo caraceres
	        if($clave1==$clave2){
		            echo 1;
				$controller=3;
	           }else{
		            echo " No coinciden las contraseñas!";
	           }
	    }
	
	
	
 	
 }
	
	
	

?>