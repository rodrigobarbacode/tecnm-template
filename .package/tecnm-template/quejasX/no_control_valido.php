<?php
require 'conexion.php';
sleep(1);
$no_control = (string) $_POST['no_control'];
$no_control = trim($no_control);
if ($no_control == "" || $no_control == null) {
    echo '<div class="alert alert-danger"><strong>Oh no!</strong> Ingrese número de control</div>';
    echo "<script type='text/javascript'>
        $('#enviar').attr('disabled', true);
        </script>";
} else {
    $sql    = 'SELECT * FROM alumnos WHERE no_control = "' . strtolower($no_control) . '"';
    $result = $conexion->query($sql);
    if ($result->num_rows > 0) {
        echo "<script type='text/javascript'>
        $('#enviar').attr('disabled', false);
        </script>
        ";
    } else {
        echo '<div class="alert alert-danger"><strong>Oh no!</strong> El número de control no se ha encontrado </div>';
        echo "<script type='text/javascript'>
        $('#enviar').attr('disabled', true);
        </script>";
    }

}
