<?php
//session_start();
require_once '../dao/grupoDAO.php';


try{
	$dao =  new grupoDAO();
	
	
	if(isset($controller)){
	     if($controller==1){
        
		$validar = $dao->usuarioGrupo($id, $grupo);
	    }
	}



}catch(Exeption $e){
	throw $e; 
}
?>

