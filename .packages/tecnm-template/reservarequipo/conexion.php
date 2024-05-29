<?php

function conectar(){
    $user = "usrreserva";
    $pass = "reserva$";
    $server = "localhost:3306";
    $db = "reservaequipo";
    $conexion = new mysqli($server,$user,$pass,$db);

    if($conexion -> connect_error){
        die("Conexion fallida:" . $conexion -> connect_error);
    }
/*     if (!$conexion->set_charset("utf8mb4")) {
       printf ("Error conjunto de caracters: %s\n", $conexion->error);
       exit();
    }
    else {
       printf("Conjunto de caracteres: %s\n", $conexion->character_set_name());
    }
*/
    $conexion->query("SET NAMES utf8mb4 COLLATE utfmb4_unicode_ci");

    return $conexion;
}

?>
