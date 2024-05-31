<?php
include 'conexion.php';
//Recibes las variables por POST
$conc_cve=$_POST['conc_cve'];
$conc_nombre=$_POST['conc_nombre'];
$monto=$_POST['monto'];


//Realizas el Insert a tu bd
$sql="INSERT INTO conceptos_verano (conc_cve,conc_nombre,monto) VALUES ('$conc_cve','$conc_nombre','$monto')";

$row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
// Confirmamos que el registro ha sido insertado con exito   

?>
