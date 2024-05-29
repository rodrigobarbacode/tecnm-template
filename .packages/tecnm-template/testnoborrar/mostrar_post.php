<?php

require_once("conexion.php");	

    $conn=dbConnect();
	$id=$_GET['id'];
	$sql = "select * from post where id_post='".$id."'";
    $stmt = $conn->query($sql);
    $count = $stmt->rowCount();
	
	
    if ($count!=1) $rows=null;
	else $rows = $stmt->fetchAll();
	$con=null;
	$datos=null;
	

	foreach($rows as $row){
		
			$titulo=$row['titulo'];
			$sub=$row['subtitulo'];
			$contenido=$row['contenido'];
			$pie=$row['pie_de_pagina'];
			$imagen=$row['imagen'];
			$datos=array('titulo'=> $titulo, 'subtitulo'=> $sub, 'contenido'=>$contenido, 'pie'=>$pie, 'imagen'=>$imagen, 'fecha'=>$row['fecha']);	
	}
		
			
		
	
	
	echo json_encode($datos);


?>