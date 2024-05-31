<?php
 require_once ('conexion.php');
 



try	{
		 
$con=dbConnect();
 
$titulo = $_POST['InputTitulo'];
$subtitulo = $_POST['InputDescripcion'];
if ($_FILES["InputImagen"]["error"] > 0){
	echo "ha ocurrido un error";
} else {
	
	$permitidos = array("image/jpg", "image/jpeg", "image/png");
	$limite_kb = 300;
	if (in_array($_FILES['InputImagen']['type'], $permitidos) && $_FILES['InputImagen']['size']/1024 <= $limite_kb *1024){
		//esta es la ruta donde copiaremos la imagen
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el archivo subir.php
		$ruta = "img/blog/" . $_FILES['InputImagen']['name'];
		//comprovamos si este archivo existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
		if (!file_exists($ruta)){
			//aqui movemos el archivo desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
			//almacenara true o false
			$resultado = @move_uploaded_file($_FILES["InputImagen"]["tmp_name"], $ruta);
			
		} 
	}else{echo "aqui";}
}
$descripcion = $_POST['InputDescripcion'];
$pie = $_POST['InputPie'];

 
 $sentencia = $con->prepare("INSERT INTO post(titulo, subtitulo, contenido, pie_de_pagina, imagen, fecha) VALUES(:titulo, :subtitulo, :descripcion, :pie, :imagen, now())");


 if(strlen($subtitulo) > 50)
 {
	 $subtitulo = substr($subtitulo,0,-45)."...";
 }
 
 
 $sentencia->bindParam(":titulo", $titulo);
 $sentencia->bindParam(":subtitulo", $subtitulo);
 $sentencia->bindParam(":descripcion", $descripcion);
 $sentencia->bindParam(":pie", $pie);
 $sentencia->bindParam(":imagen", $ruta);


 $sentencia->execute();
 

 


 
  $con = null; 
  
  header('Location: index.php');
  
  
  
 
 }
  
catch( PDOException $Exception ) {
    // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
    // String. 
    throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );
	
}









?>