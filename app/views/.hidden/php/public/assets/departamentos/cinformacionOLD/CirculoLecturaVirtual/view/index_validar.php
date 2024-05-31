<?php
//$usuario = 1; $clave = "mario";

if(isset($_POST['usuario'])){
     $usuario = $_POST['usuario'];
}
if(isset($_POST['clave'])){
     $clave = $_POST['clave'];
}

$controller = 1;
require_once '../controller/usuarioController.php';

	
  if(count($login)>0){
	  if($clave==$login[0]['clave_usuario']){
		//echo "<pre><code><i class='glyphicon glyphicon-user ' > Acceso Correcto</i></code></pre>";
		   echo 1;
	  }else{
		  echo "<pre><code><i class='glyphicon glyphicon-remove' > Clave incorrecta</i></code></pre>";
	       }
      }else{
	      echo "<pre><code><i class='glyphicon glyphicon-remove' > Usuario incorrecto</i></code></pre>";
 }// fin de if login

?>