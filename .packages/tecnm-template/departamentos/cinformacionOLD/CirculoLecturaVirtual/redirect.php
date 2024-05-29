<?
session_start();

  if(isset($_COOKIE['idusuario'])){
  	 $_SESSION['idusuario'] = $_COOKIE['idmtusuario'];
	 $_SESSION['nombres'] =  $_COOKIE['nombres'];
	 $_SESSION['paterno'] =  $_COOKIE['paterno'];
	 $_SESSION['tipousuario'] =  $_COOKIE['tipousuario'];
  }
  
    $tipousuario = $_SESSION['tipousuario'];
		 
		  switch ($tipousuario) {
			  case 1:
				  $redirect ="admin.php";
				  break;
			  case 2:
				  $redirect ="recepcion.php";
				 break;
		  }
		  header("location:".$redirect);

?>