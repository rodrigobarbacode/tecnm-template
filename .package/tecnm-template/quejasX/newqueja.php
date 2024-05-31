<?php
require 'conexion.php';
if (empty($_POST['no_control'])) {
    echo "NO SE HA INGRESADO NO. CONTROL VALIDO";
} elseif (!empty($_POST['no_control'])) {
    require_once "conexion.php";
    $tipo_reporte  = $_POST['tipo'];
    $no_control    = $_POST['no_control'];
    $descripcion   = $_POST['descripcion'];
    $correo        = $_POST['correo'];
    $fecha_reporte = date("F j, Y");

    $sql = "INSERT INTO reportes (id_reporte, tipo_reporte, no_control, descripcion, correo, fecha_reporte, atendido, fecha_atendida) VALUES (null,'$tipo_reporte','$no_control','$descripcion','$correo','$fecha_reporte','NO','N/A')";

    // $sql    = "INSERT INTO reportes (id_reporte,tipo_reporte,no_control,descripcion,correo,fecha_reporte,atendido,fecha_atendida) VALUES";
    $result = $conexion->query($sql);
    if ($result === true) {

        echo '<script >alert("El Instituto Tecnológico de Mexicali, agradece su comentario")</script>';

    }
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
