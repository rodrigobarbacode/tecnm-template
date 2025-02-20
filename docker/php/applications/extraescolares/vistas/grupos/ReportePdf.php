<?php

  require_once "../../clases/conexion.php";
  require_once "../../clases/actividades.php";

  $obj= new actividades();

  $c = new conectar();
  $conexion = $c->conexion();

  $idGrupo = $_GET['idGrupo'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../librerias/bootstrap/css/bootstrap.css">
    
    <link rel="stylesheet" href="../librerias/lista.css">
    <title>Reporte de Alumnos</title>
</head>
<body>
<img src="../../img/itm.jpg" class="rounded-circle" style="margin-right: 100px; border-radius: 50%;" width="100px" height="80px" alt="">
    <img src="../../img/ITM.png" style="margin-right: 100px;" width="400px" height="80px" alt="">
    <h2 style="text-align:center;">Extra Escolar ITM</h2>
    <?php
        $consulta = "SELECT Actividad
        from extraescolar 
        WHERE Id = '$idGrupo'";

        $resultados = mysqli_query($conexion,$consulta);
        while($ver = mysqli_fetch_row($resultados)):
    ?>
    <h4 style="text-align:center;">Lista de Alumnos <?php echo $ver[0]?></h4>
    <?php
        endwhile;
    ?>
    <br>
    <table class="table table-hover" style="text-align:left;">
    <thead class="thead-dark">
        <tr>
            <td>No. Control</td>
            <td>Nombre del Alumno</td>
            <td>Grupo</td>
            <td>Horario</td>
            <td>Docente</td>
        </tr>
    </thead>
        <?php
            $sql = "SELECT actividades.noControl, alumno.paterno, alumno.materno, alumno.nombre, extraescolar.Grupo, extraescolar.Horario, extraescolar.Docente
            from actividades 
            INNER JOIN alumno on actividades.noControl = alumno.noControl 
            INNER JOIN extraescolar on actividades.IdExtraescolar = extraescolar.Id
            WHERE actividades.IdExtraescolar = '$idGrupo' and actividades.Estatus='Cursando'";
  
            $result = mysqli_query($conexion,$sql);

            while($mostrar = mysqli_fetch_row($result)):
        ?>

        <tr>
            <td><?php echo $mostrar[0];?></td>
            <td><?php echo $mostrar[1]." ". $mostrar[2]." ". $mostrar[3];?></td>
            <td><?php echo $mostrar[4];?></td>
            <td><?php echo $mostrar[5];?></td>
            <td><?php echo $mostrar[6];?></td>
        </tr>
            <?php endwhile;?>
    </table>
</body>
</html>
<?php

?>