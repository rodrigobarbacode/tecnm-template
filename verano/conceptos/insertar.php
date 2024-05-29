<?php
include 'conexion.php';
//Recibes las variables por POST
$conc_cve=$_POST['conc_cve'];
$conc_nombre=$_POST['conc_nombre'];
$monto=$_POST['monto'];

//Haces lo demas con el  resto de los campos de tu formulario
//Realizas el Insert a tu bd
$sql="INSERT INTO conceptos_verano (conc_cve,conc_nombre,clave_sep,monto) VALUES ('$conc_cve','$conc_nombre','test test test','$monto')";
//Ejecutas tu consulta y listo
        
if ($con->query($sql) === TRUE) {
  echo "Registro Guardado";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();


?>
