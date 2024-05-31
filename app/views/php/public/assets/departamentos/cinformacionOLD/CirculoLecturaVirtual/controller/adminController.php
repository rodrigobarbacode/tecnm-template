<?php

require_once '../dao/adminDAO.php';

try{
	$dao =  new adminDAO();
	
	if($controller==1){
		  $datos = $dao->datosUsuario($idusuario);
		
	}
	
}catch(Exeption $e){
	throw $e;
}
?>

