<?php
error_reporting(E_ERROR | E_PARSE);
require 'conexion.php';
require 'inc/mod22.php';

//año y monto datos necesarios para la linea de pago
$periodo      = 1; //aqui se cambia entre periodos ya sea 1 o 2
$anio_periodo = date('Y') . $periodo;
$monto        = 2000; // monto de los cursos propedeuticos
///////////////////////
$curp          = strtoupper($_POST['curp']);
$nombre        = strtoupper($_POST['nombres']);
$ap_paterno    = strtoupper($_POST['ap_paterno']);
$ap_materno    = strtoupper($_POST['ap_materno']);
$sexo          = strtoupper($_POST['sexo']);
$correo        = strtoupper($_POST['correo']);
$discapacidad  = strtoupper($_POST['discapacidad']);
$observaciones = strtoupper($_POST['observaciones']);

$tildes = $conexion->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
//select selecciona el curp si es que se encuentra en la base de datos y genera la linea de pago
if ($curp != null) {
    $sql       = "SELECT * FROM semestrecero WHERE curp='$curp'";
    $resultado = $conexion->query($sql);
    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $linea      = mod22($row["id_cero"], $anio_periodo, $monto);
            $nombre     = $row['nombre'];
            $ap_paterno = $row['ap_paterno'];
            $ap_materno = $row['ap_materno'];
            require 'fichapago.php';
        }
        $sql       = "UPDATE semestrecero SET sexo='$sexo',correo='$correo',referencia='$linea' WHERE curp='$curp'";
        $resultado = $conexion->query($sql);

    } else {
//si la curp no es encontrada entonces insertara los datos que el usuario lleno
        $sql       = "INSERT INTO semestrecero (id_cero,curp,nombre,ap_paterno,ap_materno,sexo,correo,discapacidad,observaciones,referencia) VALUES (null,'$curp','$nombre','$ap_paterno','$ap_materno','$sexo','$correo','$discapacidad','$observaciones',' ')";
        $resultado = $conexion->query($sql);
        if ($resultado === true) {
            //una vez insertado hara el proceso de generarle la linea de pago
            $sql       = "SELECT * FROM semestrecero WHERE curp='$curp'";
            $resultado = $conexion->query($sql);
            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    $linea      = mod22($row["id_cero"], $anio_periodo, $monto);
                    $nombre     = $row['nombre'];
                    $ap_paterno = $row['ap_paterno'];
                    $ap_materno = $row['ap_materno'];
                    require 'fichapago.php';
                }
                $sql       = "UPDATE semestrecero SET sexo='$sexo',correo='$correo',referencia='$linea' WHERE curp='$curp'";
                $resultado = $conexion->query($sql);

            }
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }
    }

    $conexion->close();
} else {
    header("Location:index.php");

}
