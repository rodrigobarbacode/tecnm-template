<?php 
	//*
	// */
	/*$host = "201.174.73.226";
	$user = "referenciaspagos";
	$pass = "";
	$dbname = "dany";
	*/
	$host = "localhost";
	$user = "referenciaspagos";
	$pass = "referenciaspagos";
	$dbname = "pagosbanco_new";
	
	$conexion = @mysql_connect($host,$user,$pass) or die("problema al conectar el servidor");
	$db=mysql_select_db($dbname) or die("Error al tratar de conectar la base de datos");
 ?>