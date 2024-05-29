<?php

session_start();
if(isset($_POST['usuario'])){
     $usuario = $_POST['usuario'];
}
if(isset($_POST['clave'])){
     $clave = $_POST['clave'];
}

$controller = 1;
require_once '../controller/usuarioController.php';

	
  if(count($login)>0){
  	
	  if($clave==$login[0]['clave_usuario']){// validar
		   $_SESSION['idusuario'] = $login[0]['idmtusuario'];
		   $_SESSION['nombres'] = $login[0]['nombres'];
		   $_SESSION['paterno'] = $login[0]['paterno'];
		   $_SESSION['tipousuario'] = $login[0]['tipousuario'];
		  
		  if($_POST['recordar']=="R"){// recordar usuario por cookies
		  	setcookie('idusuario',$_SESSION['idusuario'], time() +7200,"/");
		    setcookie('nombres',$_SESSION['idusuario'], time() +7200,"/");
		    setcookie('paterno',$_SESSION['idusuario'], time() +7200,"/");
		    setcookie('tipousuario',$_SESSION['idusuario'], time() +7200,"/");
		 
		  }		  
		  $tipousuario = $login[0]['tipousuario'];
		 
		  switch ($tipousuario) {
			  case 1:
				  $redirect ="admin.php";
				  break;
			  case 2:
				  $redirect ="recepcion.php";
				 break;
		  }
		  header("location:../".$redirect);
	  }
    }
?>
