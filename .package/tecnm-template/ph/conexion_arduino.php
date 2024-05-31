<?php

require_once("herramienta_introducir_datos.php");

$herramienta = new Herramienta();
/*if($_GET["temp"] == null or $_GET["hum"]== null){
echo "No se pudo obtener valores temperatura y humedad desde arduino";exit;
}else{*/
$ingresar_dato = $herramienta->ingresar_datos($_GET["Po_php"]);
	
//}

?>
