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
    <title>Admin Grupos</title>
    <link rel="stylesheet" href="../librerias/info.css">    
    <?php require_once "menu.php";?>
</head>
<body>
            <form id="frmGrupos" class="tabla">
            <div class="form-toggle"></div>
            <div class="form-panel one">
                <div class="form-header">
                <h1>Alta de Grupos</h1>
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
                    <label for="username">Nombre del Grupo</label>
                    <input type="text" name="nombreGrupo" id="nombreGrupo" required="required">
                    </div>

                    <!-- Nivel -->
                    <div class="form-group">
                    <label for="username">Nivel</label>
                    <select name="Nivel" id="Nivel">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    </div>

                    <!-- Horario -->
                    <div class="form-group">
                    <label for="username">Hora Inicio</label>
                    <input type="time" id="Inicio" name="Inicio"  required="required" />
                    </div>

                    <!-- Horario -->
                    <div class="form-group">
                    <label for="username">Hora Termina</label>
                    <input type="time" id="Termina" name="Termina"  required="required" />
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