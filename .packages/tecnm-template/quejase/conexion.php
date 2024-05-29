<?php
	
date_default_timezone_set('America/Tijuana');
$servername = "localhost";
$username = "root";
$password = "Tzuput4r0";
$dbname = "buzon";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
$sql = "INSERT INTO quejas(id,folio,usuario, tipo, fecha_hora_queja, reporte, estatus, respuesta_revisor,fecha_hora_atendida,revisor) VALUES (null,'2021-7','usuario','ttipo','datetime','reporte','ABIERTO','N/A',' ',' ')";
    
if ($con->query($sql) === TRUE) {
  $last_id = $con->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();