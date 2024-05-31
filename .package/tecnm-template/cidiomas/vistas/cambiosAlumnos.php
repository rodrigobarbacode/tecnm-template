<?php
session_start();

if(isset($_SESSION['nombre']))
{
    require_once "../clases/conexion.php";
    $c = new conectar();
    $conexion = $c->conexion();
    $alumno = $_SESSION['nombre'];
        $sql ="SELECT alumno.noControl,alumno.paterno, alumno.materno, alumno.nombre, alumno.fecha FROM `alumno` ";
        $result =  mysqli_query($conexion,$sql);
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Alumnos </title>
    <link rel="stylesheet" href="../librerias/lista.css">
    <?php require_once "menu.php";?>
</head>
<body>
    <form method="post" class="tabla">
        <div class="form-toggle"></div>
            <div class="form-panel one">
                <div class="form-header">
                <h1>Modificar Datos del Alumno</h1>
                </div>
            <div class="form-content1" >
            <table id="example" class="table table-borderless" style="text-align:center">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">No. Control</th>
                        <th scope="col">Alumno</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Editar</th>
                        </tr>
                    </thead>

                    <?php
                        while($ver = mysqli_fetch_row($result)):
                    ?>
                    <tr>
                            <td><?php echo $ver[0] ?></td>
                            <td><?php echo $ver[1]." ".$ver[2]." ".$ver[3] ?></td>
                            <td><?php echo $ver[4] ?></td>
                            <td>
                            <span class="btn btn-primary btn-sm" data-toggle="modal" data-target="#calificar" onclick="agregarDato('<?php echo $ver[0]?>')">
            <svg class="bi bi-pencil-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
            </span>
                            </td>
                            
                        </tr>
                        <?php
                        endwhile;
                        ?>
                    </table>
            </div>

    </form>


<!-- Modal -->
<div class="modal fade" id="calificar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modificar Datos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

        <form id="frmAlumnosU" class="modalActualizar">
                <div class="form-content">
                
                    <!-- noControl -->
                    <div class="form-group">
                        <label for="username">No. Control</label>
                        <input type="numeric" id="noControlU" name="noControlU"  required="required" readonly  />
                    </div>

                    <!-- Fecha -->
                    <div class="form-group">
                        <label for="username">Fecha Nacimiento</label>
                        <input type="date" id="fechaU" name="fechaU"  required="required"   />
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
    <script src="../js/alumnos.js"></script>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
    $('#tablaAdminAlumnosLoad').load("grupos/tablaInscripcion.php");
});
</script>
<script type="text/javascript">
            $(document).ready(function() {
            //DataTable initialisation
            $('#example').DataTable({});
          });
</script>
<?php
}
else
{
    header("location: ../index.php");
}
?>