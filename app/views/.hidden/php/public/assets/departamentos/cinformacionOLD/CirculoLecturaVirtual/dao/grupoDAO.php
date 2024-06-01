<?php

require_once('../db/accesoDB.php');
class grupoDAO{


	
   public function mostrarLibros($modo){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			if($modo=="all"){
			 $sql = "SELECT  idLibro AS id ,  NombreCatalogo AS nombreCat , Pais AS p , Editorial AS edi , Fecha AS registrado ,
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
	
	
   public function mostrarTemas($modo,$idsesion){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			if($modo=="all"){
			 $sql = "SELECT  idTema AS id , Nombre AS nom , Descripcion AS tema
			  FROM  cv_Tema WHERE TdSesionGrupo = '$idsesion'";
			}
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			
			$return = $stmt->fetchAll();
			return $return;
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
	
	
	   public function mostrarEncuestas($modo,$idsesion){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			if($modo=="all"){
			 $sql = "SELECT  idencuesta AS id , nombre AS nom , descripcion AS d , fechaCreacion AS creacion , fechaFinal AS final
			  FROM  cv_encuesta WHERE idSesionGrupo = '$idsesion'";
			}
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			
			$return = $stmt->fetchAll();
			return $return;
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
	

	 public function mostrarPreguntas($modo,$idsesion){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			if($modo=="all"){
			 $sql = "SELECT idGrupos AS idg , titulo , cv_Libro.Imagen AS img, idpreguntas AS id , pregunta AS p , opcionA AS a , opcionB AS b , opcionC AS c , opcionD AS d ,
			 correcta AS t 
			  FROM  (cv_preguntas  INNER JOIN cv_encuesta ON idencuestaEnPregunta = idencuesta)
			  INNER JOIN cv_SesionGrupo ON cv_SesionGrupo.idSesionGrupo = cv_encuesta.idSesionGrupo
			  INNER JOIN cv_Grupos ON idGruposSe = idGrupos
			  INNER JOIN cv_Libro ON idLibroSesion = idLibro
			   WHERE idEncuestaEnPregunta = '$idsesion'";
			}
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			
			$return = $stmt->fetchAll();
			return $return;
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
   public function mostrarComentarios($modo,$idtema){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			if($modo=="all"){
			 $sql = "SELECT * FROM  cv_Comentario WHERE idTema='$idtema'";
			}
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			
			$return = $stmt->fetchAll();
			return $return;
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
   public function mostrarTareas($modo,$idsesion){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			if($modo=="all"){
			 $sql = "SELECT  idTarea AS id , nombre AS nom , Descripcion AS ds , FechaCreacion AS creacion , FechaLimite AS limite,
			 Tipo AS t , valor AS val
			  FROM  cv_Tarea WHERE idSesionGrupo = '$idsesion'";
			//  echo $sql;
			}
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			
			$return = $stmt->fetchAll();
			return $return;
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
	
	
	  

	
   public function mostrarGrupos($modo){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			if($modo=="all"){
			 $sql = "SELECT idGrupos AS id , nombre AS nombre , cv_Grupos.Descripcion AS des , Titulo AS libro, 
			 LimiteUsuarios AS limite , Estado AS estado , FechaInicio AS creado ,  Imagen AS img 
			  FROM ( cv_Grupos INNER JOIN cv_Libro ON LibroSeleccionado=idLibro) INNER JOIN cv_SesionGrupo ON idGrupos = idGruposSe ORDER BY idGrupos desc";
			}
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			
			$return = $stmt->fetchAll();
			return $return;
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
	
   public function mostrarUnGrupo($modo,$id){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			if($modo=="all"){
			 $sql = "SELECT Puntos AS pts , idGrupos AS id , nombre AS nombre , cv_Grupos.Descripcion AS des , Titulo AS libro, 
			 LimiteUsuarios AS limite , Estado AS estado , FechaInicio AS creado ,  Imagen AS img 
			  FROM ( cv_Grupos INNER JOIN cv_Libro ON LibroSeleccionado=idLibro) INNER JOIN cv_SesionGrupo ON idGrupos = idGruposSe 
			  WHERE idGrupos =$id ORDER BY idGrupos desc";
			}
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			
			$return = $stmt->fetchAll();
			return $return;
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
   public function perfilGrupo($modo,$where){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			if($modo=="all"){
			 $sql = 'SELECT Puntos AS pts , idGruposSe AS sesion ,  idGrupos AS id , nombre AS nombre , cv_Grupos.Descripcion AS des , Titulo AS libro, 
			 LimiteUsuarios AS limite , Estado AS estado , FechaInicio AS creado ,  Imagen AS img 
			  FROM ( cv_Grupos INNER JOIN cv_Libro ON LibroSeleccionado=idLibro) INNER JOIN cv_SesionGrupo ON idGrupos = idGruposSe  WHERE idGrupos='.$where.' ORDER BY idGrupos desc';
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
	
	
	
	public function EncuestaHecha($usuario,$encuesta){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			//      
			
			$url = "null" ;              
			$sql = 'INSERT INTO EncuestaUsuario
			(encuesta,usuario,registro)
			 VALUES("'.$usuario.'","'.$encuesta.'",now())';
	   //  echo $sql;
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			// http://localhost/clv/controller/grupoController.php?usuarioi=10&encuesta=33
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
	
	
		
	public function SumaPuntos($usuario,$segrupo,$pts){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			//      
			
			$url = "null" ;              
			$sql = 'UPDATE PuntosSession SET Puntos = 
			Puntos'.$pts.' WHERE `puntossession`.`PSesionGrupo` = '.$segrupo.' AND `puntossession`.`PUsuario` = '.$usuario.';';
	   //  echo $sql; $pdo->lastInsertId(); 
	  //echo $sql;
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			// http://localhost/clv/controller/grupoController.php?usuarioi=10&encuesta=33
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
	
	public function SumaPuntosG($usuario,$segrupo,$pts){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			//      
			$sql = 'UPDATE cv_SesionGrupo SET Puntos = Puntos'.$pts.'
			WHERE idGruposSe = '.$segrupo.'';

	   //  echo $sql; $pdo->lastInsertId(); 
	  //echo $sql;
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			// http://localhost/clv/controller/grupoController.php?usuarioi=10&encuesta=33
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
	
	public function ActualizaGrupo($segrupo,$pts,$nombre,$descripcion,$limite){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			//      
			$sql = 'UPDATE cv_SesionGrupo SET Puntos = '.$pts.'
			WHERE idGruposSe = '.$segrupo.'';
			$otro = "UPDATE cv_Grupos SET `nombre` = '$nombre', `Descripcion` = '$descripcion', `LimiteUsuarios` = '$limite' 
			WHERE idGrupos = $segrupo";

	   //  echo $sql; $pdo->lastInsertId(); 
	  //echo $sql;
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			
			  $stmt =$pdo->prepare($otro);
		    $stmt->execute();
			// http://localhost/clv/controller/grupoController.php?usuarioi=10&encuesta=33
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
	
	
public function comentarTema($iData){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			//      
			
			$url = "null" ;              
			$sql = 'INSERT INTO cv_Comentario(Comentario,hora,FechaPublicacion,idTema,idUsuario)
VALUES("'.$iData['contenido'].'", curtime(), now(),2,16 )';
	   //  echo $sql;
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
}// fin de la funcion


public function YaComento($id,$idgrupo,$idtema){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			//      
			
			$url = "null" ;              
			$sql = 'SELECT idusuario FROM cv_Comentario 
			INNER JOIN cv_Tema ON Tema = idTema WHERE idusuario='.$id.' AND idtema='.$idtema.'';
	  // echo $sql;
		    $stmt =$pdo->prepare($sql);
		    $res = $stmt->execute();
			$response = $stmt->fetchAll();
		    if(count($response)==0){
		    	//echo count($res);
		    	return 1;
		    }else{
		    	return 0;
		    }
			//return '>>'.count($response);
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
}// fin de la funcion

// SELECT  FROM UsuarioGrupos INNER JOIN PuntosSession ON PSesionGrupo = GGrupos

public function  Candidatos($arg){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			//   SELECT * FROM  (UsuarioGrupos INNER JOIN PuntosSession ON PSesionGrupo = GGrupos INNER JOIN cv_sesiongrupo ON PSesionGrupo = idSesionGrupo)INNER JOIN cv_usuario ON idUsuario = PUsuario WHERE PuntosSession.Puntos>=cv_sesiongrupo.Puntos ORDER BY idSesionGrupo DESC   
			// SELECT idUsuario AS id , cv_usuario.nombre AS nombre , apellido AS ap1 , apellido2 AS ap2 , cv_grupos.nombre AS grupo , idGrupos AS idgrupo FROM (UsuarioGrupos INNER JOIN PuntosSession ON PSesionGrupo = GGrupos INNER JOIN cv_sesiongrupo ON PSesionGrupo = idSesionGrupo)INNER JOIN cv_usuario ON idUsuario = PUsuario INNER JOIN cv_grupos ON idGrupos = idSesionGrupo WHERE PuntosSession.Puntos>=cv_sesiongrupo.Puntos  ORDER BY idSesionGrupo DESC
           
			$sql = 'SELECT NumControl AS nc , idUsuario AS id , cv_Usuario.nombre AS nombre , apellido AS ap1 , apellido2 AS ap2 , cv_Grupos.nombre AS grupo , idGrupos AS idgrupo FROM (UsuarioGrupos INNER JOIN PuntosSession ON PSesionGrupo = GGrupos INNER JOIN cv_SesionGrupo ON PSesionGrupo = idSesionGrupo)INNER JOIN cv_Usuario ON idUsuario = PUsuario INNER JOIN cv_Grupos ON idGrupos = idSesionGrupo WHERE PuntosSession.Puntos>=cv_SesionGrupo.Puntos  ORDER BY idSesionGrupo DESC';
	 //  echo $sql;
		    $stmt =$pdo->prepare($sql);
		    $res = $stmt->execute();
			$response = $stmt->fetchAll();
		     return $response;
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
}// fin de la funcion


public function  Comentarios($arg){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			//   SELECT * FROM  (UsuarioGrupos INNER JOIN PuntosSession ON PSesionGrupo = GGrupos INNER JOIN cv_sesiongrupo ON PSesionGrupo = idSesionGrupo)INNER JOIN cv_usuario ON idUsuario = PUsuario WHERE PuntosSession.Puntos>=cv_sesiongrupo.Puntos ORDER BY idSesionGrupo DESC   
			// SELECT idUsuario AS id , cv_usuario.nombre AS nombre , apellido AS ap1 , apellido2 AS ap2 , cv_grupos.nombre AS grupo , idGrupos AS idgrupo FROM (UsuarioGrupos INNER JOIN PuntosSession ON PSesionGrupo = GGrupos INNER JOIN cv_sesiongrupo ON PSesionGrupo = idSesionGrupo)INNER JOIN cv_usuario ON idUsuario = PUsuario INNER JOIN cv_grupos ON idGrupos = idSesionGrupo WHERE PuntosSession.Puntos>=cv_sesiongrupo.Puntos  ORDER BY idSesionGrupo DESC
           
			$sql = "SELECT cv_Grupos.nombre AS grupo , FotoPerfil AS img , CONCAT(cv_Usuario.nombre, ' ',apellido ,' ', apellido2 ) AS autor , idComentario AS id , Comentario AS comentario , hora AS h , FechaPublicacion AS fecha FROM (cv_Comentario INNER JOIN cv_Usuario ON cv_Comentario.idusuario = cv_Usuario.idUsuario) INNER JOIN cv_Grupos ON idGrupos = idGrupos ORDER BY idComentario DESC";		
	 //  echo $sql;
		    $stmt =$pdo->prepare($sql);
		    $res = $stmt->execute();
			$response = $stmt->fetchAll();
		     return $response;
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
}// fin de la funcion
	
	
	public function registraGrupo($r){
		try{
			$pdo = AccesoDB::getConnectionPDO();
           
		//	if(!isset($r['enlace'])){   $r['enlace']="";}// if(!isset($libro)){ $libro="";} // LimiteUsuarios
			//if(!isset($r['Editorial'])){ $r['Editorial']="";} 	if(!isset($r['Pais'])){ $r['Pais']="";}
			
			$sql = 'INSERT INTO cv_Grupos(nombre,Descripcion,LibroSeleccionado,estado,LimiteUsuarios)
			 VALUES("'.$r['nombre'].'","'.$r['descripcion'].'","'.$r['libro'].'",1,'.$r['limiteuser'].')';
			// echo $sql;

		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			return $pdo->lastInsertId(); 
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion

	
public function usuarioGrupo($id,$grupo){
		try{
		
			$pdo = AccesoDB::getConnectionPDO();
			
			$sql = 'SELECT GUsuario , GGrupos FROM UsuarioGrupos WHERE GUsuario="'.$id.'" AND GGrupos="'.$grupo.'"';	
			//echo $sql;
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			
			$response = $stmt->fetchAll();
			$TRegistros = count($response);
			if($TRegistros==1){
				return 0;
			}else{
				return 1;
			}
			//return $response;
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	
}
public function UsuarioEnGrupo($id,$grupo){
		try{
		
			$pdo = AccesoDB::getConnectionPDO();
			
			$sql = 'SELECT GUsuario , GGrupos FROM UsuarioGrupos WHERE GUsuario="'.$id.'" AND GGrupos="'.$grupo.'"';
			//echo $sql;
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			
			$response = $stmt->fetchAll();
			$TRegistros = count($response);
			if($TRegistros == 0){
				return 0;
			}else{
				return 1;
			}
			//return $response;
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	
}



public function usuarioGrupoAll($id){
		try{
		
			$pdo = AccesoDB::getConnectionPDO();
			
			$sql = 'SELECT nombre  AS nom , apellido AS ap ,  FotoPerfil AS img , GUsuario AS usuario ,  estado FROM UsuarioGrupos INNER JOIN cv_Usuario ON GUsuario = idUsuario
			 WHERE GGrupos='.$id.'';	
			//echo $sql;
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			
			$response = $stmt->fetchAll();
			 return $response;
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	
}
//	suscribeGrupoComentarios  lo cambie prueba
public function suscribeGrupo($r){
		try{
			$pdo = AccesoDB::getConnectionPDO();
           
		//	if(!isset($r['enlace'])){   $r['enlace']="";}// if(!isset($libro)){ $libro="";} // LimiteUsuarios
			//if(!isset($r['Editorial'])){ $r['Editorial']="";} 	if(!isset($r['Pais'])){ $r['Pais']="";}
			
			$sql = 'INSERT INTO susbribe(GUsuario,GGrupos,estado)
			 VALUES("'.$r['iduser'].'","'.$r['idgrupo'].'",1)';
			// echo $sql;
			 
			 
			 // $puntos = 'INSERT INTO PuntosSession(PUsuario,PSesionGrupo,Puntos)
			 // VALUES("'.$r['iduser'].'","'.$r['idgrupo'].'",0)';
			// echo $sql;
			// echo $sql;

		    $stmt =$pdo->prepare($sql);
			$stmt->execute();
			 // $stmt =$pdo->prepare($puntos);
		  //   $stmt->execute();
			//return $pdo->lastInsertId(); 
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
public function registraSesion($r){
		try{
			$pdo = AccesoDB::getConnectionPDO();
          
			//    data: { limitepuntos: $("#puntosreq").val() , id: idgrupo , libro: ti , session: "registra" },
			$sql = 'INSERT INTO cv_SesionGrupo(idGruposSe,Puntos,idLibroSesion,sEstado,FechaInicio)
			 VALUES("'.$r['id'].'","'.$r['limitepuntos'].'","'.$r['libro'].'",1, now())';
			// echo $sql;
			// echo $sql;

		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			return $pdo->lastInsertId(); 
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	// 	//echo 1111; ata: { idenpre:idencuesta , pregunta: forpregunta,oa:forA,ob:forB,oc:forC,od:forD,cor:forCor, encuestapregunta: "registra" },  
public function registraPregunta($r){
		try{
			$pdo = AccesoDB::getConnectionPDO(); $ds= "";
            //      data: { nombre: ("#encuestaid").val() , encuesta: "registra" },// 7
			$sql = 'INSERT INTO cv_preguntas(idencuestaEnPregunta,pregunta,opcionA,opcionB,opcionC,opcionD,correcta)
			 VALUES("'.$r['idenpre'].'","'.$r['pregunta'].'","'.$r['oa'].'","'.$r['ob'].'","'.$r['oc'].'","'.$r['od'].'",'.$r['cor'].')';
			 echo $sql;
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			return $pdo->lastInsertId(); 
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
}// fin de la funcion
public function registraTarea($r){ // 
		try{
			$pdo = AccesoDB::getConnectionPDO(); $ds= "";
            //      // 	data: { idse:idsesion , tarea: tareaRow ,valor:valorRow , tareaspost: "registra" },   
            $fecha = ''; $descripcion = '';
			$sql = 'INSERT INTO cv_Tarea(idSesionGrupo,nombre,valor,FechaCreacion,FechaLimite,descripcion)
			 VALUES("'.$r['idse'].'","'.$r['tarea'].'","'.$r['valor'].'", now() ,"'.$fecha.'","'.$descripcion.'" )';
			 //echo $sql;
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			return $pdo->lastInsertId(); 
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
}// fin de la funcion

public function registraTema($r){
		try{
			$pdo = AccesoDB::getConnectionPDO(); $ds= "";
            //      // 	 	data: { idse:idsesion , temas: temaRow ,temaspost: "registra" },          
            $fecha = ''; $descripcion = '';
			$sql = 'INSERT INTO cv_Tema(TdSesionGrupo,Nombre,Descripcion)
			 VALUES("'.$r['idse'].'","'.$r['temas'].'","'.$descripcion.'")';
			// echo $sql;
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			return $pdo->lastInsertId(); 
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
}// fin de la funcion



	
public function registraEncuesta($r){
		try{
			$pdo = AccesoDB::getConnectionPDO(); $ds= "";
            //      data: { nombre: ("#encuestaid").val() , encuesta: "registra" },
			$sql = 'INSERT INTO cv_encuesta(idSesionGrupo,nombre,descripcion,PlantillaSesion,fechaCreacion)
			 VALUES("'.$r['ide'].'","'.$r['nombre'].'","'.$ds.'",1, now())';
			// echo $sql;
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			return $pdo->lastInsertId(); 
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
}// fin de la funcion
	
	
	
}// fin de la clase
?>