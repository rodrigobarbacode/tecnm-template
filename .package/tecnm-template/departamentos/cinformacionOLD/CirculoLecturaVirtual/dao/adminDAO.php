<?php

require_once('../db/accesoDB.php');
class adminDAO{
	public function crearNuevoUsuario($iData){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			
			$sql = 'INSERT INTO mt_usuario(idlogin_usuario,clave_usuario,tipousuario,nombres,paterno,usucrea,feccrea) VALUES("'.$iData['login'].'","'.$iData['clave'].'","'.$iData['tipousu'].'","'.$iData['nombres'].'","'.$iData['paterno'].'","'.$iData['usucrea'].'", now())';
	    
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
	public function actualizarUsuario($iData){
			try{
			$pdo = AccesoDB::getConnectionPDO();
			
			$sql = 'UPDATE mt_usuario SET
			        clave_usuario = "'.$iData['clave'].'",
			        nombres = "'.$iData['nombres'].'",
			        paterno = "'.$iData['paterno'].'",
			        usumodi = "'.$iData['usumodi'].'",
			        fecmodi = now() 
			        WHERE  idmtusuario = "'.$iData['idusuario'].'" ';
	    
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin funcion
	
	public function borrarUsuario($idusuario){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			
			$sql = 'DELETE FROM mt_usuario WHERE idmtusuario="$idusuario" ';
	    
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
	
	public function datosUsuario($idusuario){
		try{
			$pdo = AccesoDB::getConnectionPDO();
			
			$sql = 'SELECT * FROM mt_usuario WHERE idmtusuario="'.$idusuario.'" ';
	    
		    $stmt =$pdo->prepare($sql);
		    $stmt->execute();
			
			$return = $stmt->fetchAll();
			return $return;
		 
		}catch(Exeption $e){
			throw $e;
		}// fin del catch
	}// fin de la funcion
}

$dao = new adminDAO();


//$iData['clave'] = 'marjkasdasio';
//$iData['nombres'] = 'Marlkasdlasio Alonso';
//$iData['paterno'] = 'Hernandez';
//$iData['usumodi'] = 1;
//$iData['idusuario'] = 2;
$idusuario = 3;

$rs = $dao->datosUsuario($idusuario);
$contar=  count($rs);



?>