<?php

function conectar(){
    $user = "root";
    $pass = "";
    $server = "localhost:3306";
    $db = "itmexicali";
    $conexion = new mysqli($server,$user,$pass,$db);

    if($conexion -> connect_error){
        die("Conexion fallida:" . $conexion -> connect_error);
    }

    return $conexion;
}

?>