<?php

require_once('../db/accesoDB.php');
class bibliotecaDAO{
	
	public function mostrarCategorias($modo){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			if($modo=="all"){
			 $sql = "SELECT  idCatalogoDeLibros AS id ,  NombreCatalogo AS nombre , descripcion AS des , CatalogoPadre AS padre , url AS librourl , imagen AS img  FROM cv_CatalogoDeLibros";
			}
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			
			$return = $stmt->fetchAll();
			return $return;
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
		public function mostrarLibrosc($modo,$arg){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			if($modo=="all"){
			 $sql = 'SELECT NombreCatalogo AS catalogo , cv_CatalogoDeLibros.Imagen AS imgc, idLibro AS id , Titulo AS titulo , Autor AS autor , Edicion AS edicion , FechaLanzamiento AS creado , cv_Libro.Descripcion AS d ,Enlace AS enlace,Archivo AS ar , Pais AS pais , Editorial AS edi , Fecha AS registro , cv_Libro.Imagen AS img FROM cv_Libro
			  INNER JOIN cv_CatalogoDeLibros ON idCatalogoDeLibros = CatalogoDeLibros WHERE CatalogoDeLibros = '.$arg.'';
			}
			
			if($modo=="book"){
			 $sql = "SELECT NombreCatalogo AS catalogo , cv_CatalogoDeLibros.Imagen AS imgc, idLibro AS id , Titulo AS titulo , Autor AS autor , Edicion AS edicion , FechaLanzamiento AS creado , cv_Libro.Descripcion AS d ,Enlace AS enlace,Archivo AS ar , Pais AS pais , Editorial AS edi , Fecha AS registro , cv_Libro.Imagen AS img FROM cv_Libro
			  INNER JOIN cv_CatalogoDeLibros ON idCatalogoDeLibros = CatalogoDeLibros WHERE idLibro = $arg ";
			}
			//echo $sql;
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			
			$return = $stmt->fetchAll();
			return $return;
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
	
   public function mostrarLibros($modo){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			if($modo=="all"){
			 $sql = "SELECT  Autor AS autor , idLibro AS id ,  NombreCatalogo AS nombreCat , Pais AS p , Editorial AS edi , Fecha AS registrado ,
			 Titulo AS titulo , Edicion AS nedi , FechaLanzamiento AS creado , cv_Libro.Imagen AS img 
			  FROM  cv_Libro INNER JOIN cv_CatalogoDeLibros ON idCatalogoDeLibros=CatalogoDeLibros ORDER BY id desc";
			}
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			
			$return = $stmt->fetchAll();
			return $return;
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	

	
	public function crearCategoria($iData,$imagen){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			//      
			$url = "null" ;              
			$sql = 'INSERT INTO cv_CatalogoDeLibros(NombreCatalogo,descripcion,imagen,url,FechaCreacion) VALUES("'.$iData['titulo'].'","'.$iData['descripcion'].'","'.$imagen.'","'.$url.'",now() )';
	     
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
	
	public function crearLibro($r,$imgLibro,$libro){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			//$url = "null" ;              
			if(!isset($r['enlace'])){   $r['enlace']="";}// if(!isset($libro)){ $libro="";}
			if(!isset($r['Editorial'])){ $r['Editorial']="";} 	if(!isset($r['Pais'])){ $r['Pais']="";}
			
			$sql = 'INSERT INTO cv_Libro(titulo,autor,edicion,FechaLanzamiento,Descripcion,Imagen,Enlace,Archivo,Pais,Editorial,CatalogoDeLibros,Fecha) VALUES("'.$r['titulo'].'","'.$r['autor'].'","'.$r['edicion'].'","'.$r['date'].'","'.$r['descripcion'].'","'.$imgLibro.'","'.$r['enlace'].'","'.$libro.'","'.$r['Pais'].'","'.$r['Editorial'].'","'.$r['categorias'].'",now() )';
			 // titulo autor edicion date categorias descripcion
	     // echo $sql;
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
	
	
}// fin de la clase
?>