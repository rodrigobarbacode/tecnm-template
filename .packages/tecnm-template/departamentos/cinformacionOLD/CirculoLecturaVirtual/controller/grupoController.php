<?php
//session_start();
require_once '../dao/grupoDAO.php';
include "../funciones/login.php";

try{
	$dao =  new grupoDAO();
	if(isset($controller)){
	if($controller==1){
         include "../funciones/valida.php";
		$validar = $dao->usuarioGrupo($id, $grupo);
	}
	}
	
//echo $_POST['nombre'];
if(isset($_POST['grupox'])){
	//echo 1111;
	if($_POST['grupox']=="registra"){
	
			$registro = $dao->registraGrupo($_POST);
			echo $registro;
			
		}
	   
	//}
}




if(isset($_POST['session'])){
	//echo 1111;
	if($_POST['session']=="registra"){
	
			$registro = $dao->registraSesion($_POST);
			echo $registro;
			
		}
	   
	//}
}


if(isset($_POST['encuestap'])){
	if($_POST['encuestap']=="registra"){
	
			$registro = $dao->registraEncuesta($_POST);
			echo $registro;
			
		}
	   
	//}
}
if(isset($_POST['temaspost'])){
	if($_POST['temaspost']=="registra"){
	
			$registro = $dao->registraTema($_POST);
			echo $registro;
			
		}
	   
	//}
}
if(isset($_POST['suscribe'])){
	if($_POST['suscribe']=="registro"){

		$registro = $dao->suscribeGrupo();
		echo $registro;
	//s	echo json_encode($registro);
}
}
if(isset($_POST['tareaspost'])){
	if($_POST['tareaspost']=="registra"){
	
			$registro = $dao->registraTarea($_POST);
			echo $registro;
			
		}
	   
	//}
}
// temaspost: "registra" tareaspost:

if(isset($_POST['encuestapregunta'])){
	if($_POST['encuestapregunta']=="registra"){
	
			$registro = $dao->registraPregunta($_POST);
			echo $registro;
			
		}
	   
	//}
}



if(isset($_POST['comentartema'])){
	if($_POST['comentartema']=="registrar"){

			
		    // $val =  $dao->YaComento($_POST['idusuario'],$_POST['idgrupo'],$_POST['idtema']);
		
			
			// if($val==1){
			// 	session_start();
			// 	  $dao->SumaPuntos($_SESSION['k_id'], $_POST['idgrupo'],'+1');
			// 	//echo $val;
			// }
				$registro = $dao->comentarTema($_POST);
		
			
			
			echo 1;
			
		}
	   
	//}
}





if(isset($_GET['libros'])=="libros"){
		$registro = $dao->mostrarLibros("all");
		echo json_encode($registro);
}





if(isset($_GET['allgrupos'])=="muestra"){
		$registro = $dao->mostrarGrupos("all");
		echo json_encode($registro);
}


if(isset($_GET['gi'])=="muestra"){
		$registro = $dao->mostrarUnGrupo("all", $_GET['gi']);
		echo json_encode($registro);
}





if(isset($_GET['g'])){
		$registro = $dao->perfilGrupo("all", $_GET['g']);
		echo json_encode($registro);
}




if(isset($_GET['comentarios'])){
		$registro = $dao->mostrarComentarios("all", $_GET['comentarios']);
		echo json_encode($registro);
}


if(isset($_GET['temas'])){
		$registro = $dao->mostrarTemas("all", $_GET['temas']);
		echo json_encode($registro);
}

if(isset($_GET['tareas'])){
		$registro = $dao->mostrarTareas("all", $_GET['tareas']);
		echo json_encode($registro);
}

if(isset($_GET['grupoid'])){
		$registro = $dao->usuarioGrupoAll($_GET['grupoid']);
		echo json_encode($registro);
}
if(isset($_GET['usuarioid'])){
	if(isset($_GET['ugrupoid'])){
		$registro = $dao->UsuarioEnGrupo($_GET['usuarioid'],$_GET['ugrupoid']);
		echo json_encode($registro);
}
}

if(isset($_POST['enu'])){
	echo 111;
		$registro = $dao->EncuestaHecha($_POST['usuario'], $_POST['en']);
	    $suma = $dao->SumaPuntos($_POST['usuario'], $_POST['en'],'+4');
		echo $suma;
}


if(isset($_POST['sumapuntos'])){
		$registro = $dao->EncuestaHecha($_POST['grupo'], $_POST['en']);
		//echo json_encode($registro);
}


if(isset($_POST['sumagrupo'])){ // sumagrupo , idgrupo , pts
		//$registro = $dao->EncuestaHecha($_POST['grupo'], $_POST['en']);
		$dao->SumaPuntosG('null', $_POST['idgrupo'], $_POST['pts']);
		//echo json_encode($registro);
}



if(isset($_GET['candidatos'])){ // sumagrupo , idgrupo , pts
		//$registro = $dao->EncuestaHecha($_POST['grupo'], $_POST['en']);
		$res = $dao->Candidatos('');
		echo json_encode($res);
}

if(isset($_POST['savegrupo'])){// idgrupo pts nombre d limite  , savegrupo
     	$dao->ActualizaGrupo($_POST['idgrupo'], $_POST['pts'], $_POST['nombre'], $_POST['d'], $_POST['limite']);

}


if(isset($_GET['encuesta'])){
		$registro = $dao->mostrarEncuestas("all",$_GET['encuesta']);
		echo json_encode($registro);
}



if(isset($_GET['preguntas'])){
		$registro = $dao->mostrarPreguntas("all",$_GET['preguntas']);
		echo json_encode($registro);
}


if(isset($_GET['comentariosall'])){
		$registro = $dao->Comentarios("");
		echo json_encode($registro);
}


}catch(Exeption $e){
	throw $e; 
}
?>

