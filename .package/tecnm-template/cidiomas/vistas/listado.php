<?php
session_start();

if(isset($_SESSION['nombre']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Grupos</title>
    <link rel="stylesheet" href="../librerias/lista.css">
    <?php require_once "menu.php";?>
</head>
<body>
    <div class="tabla">
        <div class="form-toggle"></div>
            <div class="form-panel one">
                <div class="form-header">
                <h1>Listado de Grupos</h1>
                </div>
            <div class="form-content">
            <div id="tablaGruposLoad"></div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="actualizarGrupo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modificar Grupo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

        <form id="frmGruposU" class="modalActualizar">
                <div class="form-content">
                <input type="numeric" id="idgrupo" name="idgrupo"  required="required" hidden />
                    <!-- alumno 
                    <div class="form-group">
                    <label for="username">Nombre del Grupo</label>
                    <select name="GrupoU" id="GrupoU">
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
                    <input type="text" name="GrupoU" id="GrupoU" required="required">
                    </div>

                    <!-- Nivel -->
                    <div class="form-group">
                    <label for="username">Nivel</label>
                    <select name="NivelU" id="NivelU">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    </div>

                    <!-- Horario -->
                    <div class="form-group">
                    <label for="username">Hora Inicio</label>
                    <input type="time" id="InicioU" name="InicioU"  required="required" />
                    </div>

                    <!-- Horario -->
                    <div class="form-group">
                    <label for="username">Hora Termina</label>
                    <input type="time" id="TerminaU" name="TerminaU"  required="required" />
                    </div>
                </div>
            </from>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" id="btnActualizar">Gruardar Cambios</button>
        </div>
        </div>
    </div>
    </div>
<script src="../js/grupos.js"></script>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
    $('#tablaGruposLoad').load("grupos/tablaGrupos.php");
});
</script>
<?php
}
else
{
    header("location: ../index.php");
}
?>