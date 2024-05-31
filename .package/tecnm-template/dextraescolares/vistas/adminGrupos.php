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
    <title>Admin Actividades</title>
    <link rel="stylesheet" href="../librerias/info.css">    
    <?php require_once "menu.php";?>
</head>
<body>
            <form id="frmGrupos" class="tabla">
            <div class="form-toggle"></div>
            <div class="form-panel one">
                <div class="form-header">
                <h1>Alta de Actividades</h1>
                </div>
                <div class="form-content">
                    <!-- alumno 
                    <div class="form-group">
                    <label for="username">Nombre del Grupo</label>
                    <select name="nombreGrupo" id="nombreGrupo">
                        <option value="Grupo A">Grupo A</option>
                        <option value="Grupo B">Grupo B</option>
                        <option value="Grupo C">Grupo C</option>
                        <option value="Grupo D">Grupo D</option>
                        <option value="Sabado M">Sabado M</option>
                        <option value="Sabado V">Sabado V</option>
                    </select>
                    </div>-->

                    <!--<div class="form-group">
                    <label for="username">Nombre del Grupo</label>
                    <select name="nombreGrupo" id="nombreGrupo" class="es-input">
                        <option value="Grupo A">Grupo A</option>
                        <option value="Grupo B">Grupo B</option>
                        <option value="Grupo C">Grupo C</option>
                        <option value="Grupo D">Grupo D</option>
                        <option value="Sabado M">Sabado M</option>
                        <option value="Sabado V">Sabado V</option>
                    </select>
                    </div>-->

                    <div class="form-group">
                    <label for="username">Area</label>
                    <input type="text" name="area" id="area" required="required">
                    </div>

                    <div class="form-group">
                    <label for="username">Actividad</label>
                    <input type="text" name="actividad" id="actividad" required="required">
                    </div>

                    <div class="form-group">
                    <label for="username">Grupo</label>
                    <input type="text" name="grupo" id="grupo" required="required">
                    </div>

                    <div class="form-group">
                    <label for="username">Horario</label>
                    <input type="text" name="horario" id="horario" required="required">
                    </div>

                    <div class="form-group">
                    <label for="username">Docente</label>
                    <input type="text" name="docente" id="docente" required="required">
                    </div>

                    <div class="form-group">
                    <label for="username">RFC</label>
                    <input type="text" name="rfc" id="rfc" required="required">
                    </div>

                    <div class="form-group">
                    <label for="username">Correo</label>
                    <input type="text" name="correo" id="correo" required="required">
                    </div>

                    <div class="form-group">
                    <label for="username">Moodle</label>
                    <input type="text" name="moodle" id="moodle" required="required">
                    </div>

                    <div class="form-group">
                    <label for="username">Periodo</label>
                    <input type="text" name="periodo" id="periodo" required="required">
                    </div>

                   

                    <span style="margin-top:15px;" class="btn btn-primary btn-md" id="agregar">Registrar Grupo</span>
                </div>
            </from>

           
        
<script src="../js/grupos.js"></script>
</body>
</html>
<script type="text/javascript">
//$('#nombreGrupo').editableSelect();
</script>
<?php
}
else
{
    header("location: ../index.php");
}
?>