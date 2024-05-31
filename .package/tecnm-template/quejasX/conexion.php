<?php
$usuario     = "root";
$contrasena  = "itmXoto13"; // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor    = "localhost";
$basededatos = "buzon_quejas";
# conectare la base de datos
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);
// Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
