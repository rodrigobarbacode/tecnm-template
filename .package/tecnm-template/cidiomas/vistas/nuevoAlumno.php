<?php
session_start();

if(isset($_SESSION['nombre']))
{
    require_once "../clases/conexion.php";
    $c = new conectar();
    $conexion = $c->conexion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Alumno</title>
    <link rel="stylesheet" href="../librerias/info.css">    
    <?php require_once "menu.php";?>
</head>
<body>
            <form id="frmAlumno" class="tabla">
            <div class="form-toggle"></div>
            <div class="form-panel one">
                <div class="form-header">
                <h1>Registro de Alumnos</h1>
                </div>
                <div class="form-content">

                    <?php

                        $consulta = "SELECT MAX(noControl)+1 FROM alumno";
                        $resultado = mysqli_query($conexion,$consulta);

                        while($producto = mysqli_fetch_row($resultado)):
                    ?>
                    <!-- noControl -->
                    <div class="form-group">
                    <label for="username">No. Control</label>
                    <input type="text" name="control" id="control"   required="required">
                    </div>
                    <?php 
                        endwhile;
                    ?> 

                    <!-- paterno -->
                    <div class="form-group">
                    <label for="username">Apellido Paterno</label>
                    <input type="text" name="paterno" id="paterno" required="required">
                    </div>

                    <!-- materno -->
                    <div class="form-group">
                    <label for="username">Apellido Materno</label>
                    <input type="text" name="materno" id="materno" required="required">
                    </div>

                    <!-- nombre -->
                    <div class="form-group">
                    <label for="username">Nombre</label>
                    <input type="text" id="nombre" name="nombre"  required="required" />
                    </div>

                    <!-- carrera -->
                    <div class="form-group">
                    <label for="username">Carrera</label>
                    <input type="text" id="carrera" name="carrera" value="N/A"  required="required" />
                    </div>

                    <!-- fecha -->
                    <div class="form-group">
                    <label for="username">Fecha de Nacimiento</label>
                    <input type="date" id="fecha" name="fecha" onchange="obtenerFecha(this)"  required="required" />
                    </div>
                   

                    <span style="margin-top:15px;" class="btn btn-primary btn-md" id="registrar">Registrar Alumno</span>
                </div>
            </from>

           
        
<script src="../js/alumnos.js"></script>
</body>
</html>
<script type="text/javascript">
function obtenerFecha(e)
{

  var fecha = moment(e.value);
  console.log("Fecha original:" + e.value);
}
</script>
<script src="https://momentjs.com/downloads/moment.js"></script>
<?php
}
else
{
    header("location: ../index.php");
}
?>