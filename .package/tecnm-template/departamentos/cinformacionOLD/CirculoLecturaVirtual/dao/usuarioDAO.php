<?php

require_once('../db/accesoDB.php');
class usuarioDAO{
	
	public function mostrarUsuarios($carrera){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			//$sql = 'SELECT * FROM cv_Usuario WHERE Carrera="'.$carrera.'" ';
			if($carrera==999){
			 $sql = "SELECT CONCAT(cv_Usuario.apellido,' ',cv_Usuario.apellido2,' ',cv_Usuario.nombre) AS nombreUsuario, correo AS correoUsuario,numcontrol AS control , idusuario AS id, telefono AS tel , semestre AS sem FROM cv_Usuario";
			}
			if($carrera=="grupos"){
			 $sql="SELECT * FROM UsuarioGrupos";
			}
	 
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			
			$return = $stmt->fetchAll();
			return $return;
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
	
		public function buscaUsuarios($like){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			
			$sql = "SELECT * FROM cv_Usuario WHERE nombre LIKE '%$like%' OR apellido LIKE '%$like%' OR apellido2 LIKE '%$like%' OR NumControl LIKE '%$like%' OR (nombre LIKE '%$like%' AND apellido LIKE '%$like%') OR  (nombre LIKE '%$like%'  AND apellido LIKE '%$like%' AND apellido2 LIKE '%$like%') ORDER BY idUsuario";
	 
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			
			$return = $stmt->fetchAll();
			return $return;
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
	public function crearNuevoUsuario($iData){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			//                                                                                                                                                                         carrera , ncontrol , nombre , apellido , apellido2 , edad , semestre , email , pw , fechaN
			$sql = 'INSERT INTO cv_Usuario(tipoUsuario,Carrera,NumControl,nombre,apellido,apellido2,edad,Semestre,Correo,cv_pass,fechaNac,fechaRegistro,url) VALUES(2,"'.$iData['carrera'].'","'.$iData['ncontrol'].'","'.$iData['nombre'].'","'.$iData['apellido'].'","'.$iData['apellido2'].'","'.$iData['edad'].'","'.$iData['semestre'].'","'.$iData['email'].'","'.$iData['pw'].'","'.$iData['fechaN'].'", now(),"'.$iData['url'].'")';
	      echo $sql;
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
		 
		}catch(Exeption $e){
			throw $e;
			echo($e);
		}// fin del catch
	}// fin de la funcion
	
	public function loginUsuario($idusuario){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			
			$sql = 'SELECT * FROM mt_usuario WHERE idlogin_usuario="'.$idusuario.'"';	
			///echo $sql;  
			  
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			
			$response = $stmt->fetchAll();
			return $response;
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
	
	
		public function Acceso($r){
		try{
			$usuario = $r['usuario'];
			$pw = $r['pass'];
			$pdo = AccesoDB::getConnectionPDO();
			
			$sql = 'SELECT Correo AS correo , cv_pass , nombre as nombre , tipoUsuario AS id , idUsuario as iduser FROM cv_Usuario WHERE Correo="'.$usuario.'" AND cv_pass="'.$pw.'"';	
			//echo $sql;
			//echo $sql;  
			  
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			
			$response = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$TRegistros = count($response);
			//print_r($response);
			if($TRegistros==1){
				
				session_start();
				$_SESSION['k_se']=$response[0]['correo'];
				$_SESSION['k_id']=$response[0]['id'];
				$_SESSION['k_nom']=$response[0]['nombre'];
				$_SESSION['k_idu']=$response[0]['iduser'];
				
				//$_SESSION['k_se']=$usuario;
				return 1;
			}else{
				return 0;
			}
			//return $response;
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
	
public function datosUsuario($idusuario){
		try{
			$pdo = AccesoDB::getConnectionPDO();
		    
			
			$sql ='SELECT idUsuario AS id , cv_Usuario.nombre AS nom , apellido AS ap , apellido2 AS ap2 , NumControl AS nc , Semestre AS sem , Telefono AS tel , FotoPerfil AS foto , url , Edad AS edad , Correo AS correo , fechaNac AS nac ,
			 fechaRegistro as registro , cv_carreras.nombre AS carrera FROM cv_Usuario INNER JOIN 
			 cv_carreras ON Carrera = idcv_carreras  WHERE Correo="'.$idusuario.'"';
			//echo $sql;
			$stmt =$pdo->prepare($sql);
		    $stmt->execute();
			
			$return = $stmt->fetchAll();
			return $return;
		
		   
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion

	
	public function verificaRegistro($correo){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			
			$sql = 'SELECT Correo AS email FROM cv_Usuario WHERE Correo="'.$correo.'"';	
			  
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			
			$response = $stmt->fetchAll();
			//echo $response[0]['email'];
			return $response;
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
	
}// fin clase


?>
