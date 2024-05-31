<?php

function conectar(){
    $user = "usrreserva";
    $pass = "reserva";
    $server = "localhost:3306";
    $db = "reservaequipo";
    $conexion = new mysqli($server,$user,$pass,$db);

    if($conexion -> connect_error){
        die("Conexion fallida:" . $conexion -> connect_error);
    }

    return $conexion;
}

?>
