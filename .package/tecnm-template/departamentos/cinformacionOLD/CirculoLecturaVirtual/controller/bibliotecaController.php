<?php
//session_start();
require_once '../dao/bibliotecaDAO.php';
include "../funciones/login.php";

try{
	$dao =  new bibliotecaDAO();
	
	// envio categoria
if(isset($_POST['enviarcatalogo'])){
 
	if($_POST['enviarcatalogo']=="imagen"){
		  $file = uploadFile("myfile",true,true);
        if(isset($file['success'])){
	               echo '   <div class="alert alert-success" id="events-result" data-es=""> <strong>Registro de Categoria con Exito!
		          <br>Nombre de Categoria:</strong> '.$_POST['titulo'].'<br><img src="up/'.$file['filename'].'"  width="80">	</div>';
		          $dao->crearCategoria($_POST, $file['filename']);
         }else{
	              echo '<div class="alert alert-danger" id="events-result" data-es="">ERROR: Al subir su imagen la razon es:('.$file['error'].').</div>';
		 }
		 
	}else{
		
		echo '   <div class="alert alert-success" id="events-result" data-es=""><strong> Registro de Categoria con Exito!<br>Nombre de Categoria:</strong> '.$_POST['titulo'].'
		<br><img src="img/man.png"  width="80">	</div>';
		$dao->crearCategoria($_POST, "null");
	}
}// fin catallgo


if(isset($_POST['enviarlibro'])){
	if($_POST['enviarlibro']=="imagen"){
		// post con imagen
        if(isset($_POST['SubeLibro'])){
			// subir libro
			//echo "subirlibro Con imagen";
			$error = subirArchivo('librofile',false,true);
			$file = uploadFile("myfile",true,true);
			if($error['error']){ // error al subir archivo
			//	echo $error['error'];
				echo '<div class="alert alert-danger" id="events-result" data-es="">ERROR: Al subir su libro la razon es:('.$error['error'].').</div>';
			}else{
				// subida de archivo correcta posterior se analiza la imagen
				if($file['error']){
					echo '<div class="alert alert-danger" id="events-result" data-es="">ERROR: Al subir su imagen la razon es:('.$file['error'].').</div>';
					//echo $file['error'];
				}else{
					/// Subida de arhicvo y imagen correcta , Hacer consulta a base de datos
					echo '   <div class="alert alert-success" id="events-result" data-es=""><strong>Su libro se Agrego con Exito!<br>Nombre del libro:</strong> '.$_POST['titulo'].'
		<br><img src="up/'.$file['filename'].'"  width="80">	
		<br>Enlace directo de libro:  <a href="up/libros/'.$error['filename'].'" target="_blank">Enlace</a></div>';
		             $dao->crearLibro($_POST, $file['filename'], $error['filename']);
					
				}
				
				
			}
			
		}else{
			//echo "enlace Con imagen";
			$file = uploadFile("myfile",true,true);
			if($file['error']){
			//	echo $file['error'];
				echo '<div class="alert alert-danger" id="events-result" data-es="">ERROR: Al subir su imagen la razon es:('.$file['error'].').</div>';
			}else{
				// Hacer consutla a base de datos todoc orrectamente
						echo '   <div class="alert alert-success" id="events-result" data-es=""><strong>Su libro se Agrego con Exito!<br>Nombre del libro:</strong> '.$_POST['titulo'].'
		               <br><img src="up/'.$file['filename'].'"  width="80">	
		               <br>Enlace directo de libro:  <a href="'.$_POST['enlace'].'" target="_blank">Enlace</a>	</div>';
					   $dao->crearLibro($_POST, $file['filename'],'');
			}
			// sin subir libro  $_POST['enlace']
		}
	}else{
		// post sin imagen
		if(isset($_POST['SubeLibro'])){
			// subir libro
				//echo "subirlibro Sin imagen";
				$error = subirArchivo('librofile',false,true);
			      if($error['error']){
			     // 	echo $error['error'];
					echo '<div class="alert alert-danger" id="events-result" data-es="">ERROR: Al subir su libro la razon es:('.$error['error'].').</div>';
			      }else{
			      	// todo correcto hacr consulta de libro sin imagen en base de datos
			      			echo '   <div class="alert alert-success" id="events-result" data-es=""><strong>Su libro se Agrego con Exito!<br>Nombre del libro:</strong> '.$_POST['titulo'].'
		                   <br><img src="img/book.png"  width="80">	
		                   <br>Enlace directo de libro:  <a href="up/libros/'.$error['filename'].'" target="_blank">Enlace</a></div>';
		                   $dao->crearLibro($_POST,'', $error['filename']);
			      }
		}else{
			 // Correcto > echo "enlace Sin imagen";
			// sin subir libro  $_POST['enlace']
		echo '   <div class="alert alert-success" id="events-result" data-es=""><strong>Su libro se Agrego con Exito!<br>Nombre del libro:</strong> '.$_POST['titulo'].'
		<br><img src="img/book.png"  width="80">	
		<br>Enlace directo de libro:  <a href="'.$_POST['enlace'].'" target="_blank">Enlace</a></div>';
		$dao->crearLibro($_POST, '','');
		}
	}
	
}// Fin enviar 


if(isset($_GET['accion'])=="categorias"){
		$registro = $dao->mostrarCategorias("all");
		echo json_encode($registro);
}

if(isset($_GET['libc'])=="libros"){
		$registro = $dao->mostrarLibrosc("all", $_GET['libc']);
		echo json_encode($registro);
}


if(isset($_GET['book'])=="book"){
		$registro = $dao->mostrarLibrosc("book", $_GET['book']);
		echo json_encode($registro);
}


if(isset($_GET['libros'])=="libros"){
		$registro = $dao->mostrarLibros("all");
		echo json_encode($registro);
}


}catch(Exeption $e){
	throw $e; 
}
?>

