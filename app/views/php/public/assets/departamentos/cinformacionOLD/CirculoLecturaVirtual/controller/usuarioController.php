<?php
//session_start();
require_once '../dao/usuarioDAO.php';

try{
	
	$dao =  new usuarioDAO();

if(isset($_POST['login'])){
	$respuesta  = $dao->Acceso($_POST);
	echo $respuesta;
	
}	
if(isset($controller)){
	if($controller==1){ // Verificar Login
	//$login =null;
	   if(isset($usuario)){
	   	  
	   	   	$login = $dao->loginUsuario($usuario);
	   	   
	       
	   }
		
	}
	
	
	if($controller==2){  // Verifica Registro
	   if(isset($correo)){
	   	   	$registro = $dao->verificaRegistro($correo);
	   	   
	       
	   }
		
	}
	
	
	if($controller==3){  // Registra
	  // if(isset($correo)){
	  // 	  echo 111;
	  if(isset($_POST)){
	   	   	$registro = $dao->crearNuevoUsuario($_POST);
	  }
	   	   
	       
	  // }
		
	}
}
//if(isset($_POST['carrera'])){
	// 
if(isset($_GET['accion'])=="mostrar"){
		$registro = $dao->mostrarUsuarios(999);
	//echo $registro;
		echo json_encode($registro);
}

if(isset($_GET['usuario'])){
		//session_start();
	//if(isset($_SESSION['k_se'])){
		$registro = $dao->datosUsuario($_GET['usuario']);
	//echo $registro;
		echo json_encode($registro);
	
	//}
}



if(isset($_GET['accion'])=="buscar"){
	if(isset($busca)){
	if(isset($_POST['busqueda'])){
		
	$busca =  $_POST['busqueda'];
		
	}
	if($busca==""){
		echo 'muestra';
		$registro = $dao->mostrarUsuarios(999);
		echo json_encode($registro);
	}
		$registro = $dao->buscaUsuarios($busca);
	// echo json_encode($arr);
	echo $busca.'s';
	}
}
if(isset($_POST['usuarios'])){
	echo 1;
	if($_POST['usuarios']=="muestra"){
		
			echo $_POST['carrera'];
			//echo 1111111111111111;
			$registro = $dao->buscaUsuarios($_POST['carrera']);
			if(count($registro)==0){
				echo '<br>No se encontro ningun resultado';
			}else{
			for($x=0;$x<count($registro);$x++){
				echo $registro[$x]['nombre'].'-';
				echo $registro[$x]['apellido'].'<br>';
			}
			}
			
		}
	   
	//}
}

}catch(Exeption $e){
	throw $e; 
}
?>

