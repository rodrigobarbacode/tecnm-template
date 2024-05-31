<?php

require_once("conexion.php");

	session_start();
	
	$jsondata = array();

    $conn=dbConnect();
	$usuario=$_POST['usuario'];
    $pw=$_POST['contrasena'];
	$sql = "select * from usuarios where usuario='".$usuario."' and contrasena='".$pw."'";
    $stmt = $conn->query($sql);
    $count = $stmt->rowCount();
	
	
    if ($count!=1) $rows=null;
	else $rows = $stmt->fetchAll();
	$con=null;
	
	if($rows == null){
		
	$jsondata=array('status'=> FALSE);
		
	}else{
		foreach($rows as $row){
			$_SESSION['id']=$row['id_usuario'];	
			$_SESSION['usuario']=$row['usuario'];
		}
		
	
		
		$jsondata=array('status'=> TRUE);	
		
	}
	
	echo json_encode($jsondata);


?>