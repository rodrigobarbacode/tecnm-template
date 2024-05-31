<?php
session_start();

if(isset($_SESSION['nombre']))
{
    require_once "../clases/conexion.php";
    $c = new conectar();
    $conexion = $c->conexion();
    $alumno = $_SESSION['nombre'];
    
    //$idgrupo=$_POST['grupo'];

    if(isset($_POST['buscar']))
    {
        $idgrupo=$_POST['grupo'];
        $sql ="SELECT actividades.Id, actividades.noControl, alumno.paterno, alumno.materno, alumno.nombre, extraescolar.Actividad, extraescolar.Grupo, extraescolar.Horario, extraescolar.Docente, actividades.Estatus, extraescolar.Periodo
        from actividades 
        INNER JOIN alumno on actividades.noControl = alumno.noControl 
        INNER JOIN extraescolar on actividades.IdExtraescolar = extraescolar.Id
        WHERE actividades.idGrupo = '$idgrupo'";
        $result =  mysqli_query($conexion,$sql);
    }
    else
    {
        $sql ="SELECT actividades.Id, actividades.noControl, alumno.paterno, alumno.materno, alumno.nombre, extraescolar.Actividad, extraescolar.Grupo, extraescolar.Horario, extraescolar.Docente, actividades.Estatus, extraescolar.Periodo
        from actividades 
        INNER JOIN alumno on actividades.noControl = alumno.noControl 
        INNER JOIN extraescolar on actividades.IdExtraescolar = extraescolar.Id";
        $result =  mysqli_query($conexion,$sql);
    }
        
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
                <h1>Acreditacion de Alumnos</h1>
                <div class="form-group">
                    <label for="username">Actividad</label>
                    <select class="form-control" name="grupo" id="grupo">
                        <option value="A">Selecionar Actividad</option>
                        <?php
                            $alumno = $_SESSION['nombre'];
                            $lista = "SELECT Id, Actividad, Grupo FROM extraescolar";
                            $resultado = mysqli_query($conexion,$lista);

                            while($producto = mysqli_fetch_row($resultado)):
                        ?>
                    <option value="<?php echo $producto[0]?>"><?php echo $producto[1]." "."Grupo: ".$producto[2] ?></option>
                        <?php 
                        endwhile;
                        ?>                     
                    </select>
                </div>
                <button style="margin-top:15px;" class="btn btn-primary btn-md" name="buscar" type="submit">Buscar</button>
                <span class="btn btn-primary btn-md" style="margin-top:15px"><a style="color:white;" href="../Excel/reporte.php">Reporte General Excel </a>
                        <svg class="bi bi-file-earmark-text" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z"/>
                            <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z"/>
                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                </span>
                </div>
            <div class="form-content1" >
            <table id="example" class="table table-responsive table-borderless" style="text-align:center">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">No. Control</th>
                        <th scope="col">Alumno</th>  
                        <th scope="col">Actividad</th>
                        <th scope="col">Grupo</th>
                        <th scope="col">Horario</th>
                        <th scope="col">Docente</th>
                        <th scope="col">Estatus</th>
                        <th scope="col">Periodo</th>
                        <th scope="col">Calificar</th>
                        </tr>
                    </thead>

                    <?php
                        while($ver = mysqli_fetch_row($result)):
                    ?>
                    <tr>
                            <td><?php echo $ver[1] ?></td>
                            <td><?php echo $ver[2]." ".$ver[3]." ".$ver[4] ?></td>
                            <td><?php echo $ver[5] ?></td>
                            <td><?php echo $ver[6] ?></td>
                            <td><?php echo $ver[7] ?></td>
                            <td><?php echo $ver[8] ?></td>
                            <td><?php echo $ver[9] ?></td>
                            <td><?php echo $ver[10] ?></td>
                            <td>
                            <span class="btn btn-primary btn-sm" data-toggle="modal" data-target="#calificar" onclick="agregarDatoCurso('<?php echo $ver[0]?>')">
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
            <h5 class="modal-title" id="exampleModalLabel">Calificar Alumno</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

        <form id="frmCalifU" class="modalActualizar">
                <div class="form-content">

                    <input type="text" id="Id" name="Id"  hidden required="required" readonly>
                
                    <!-- noControl -->
                    <div class="form-group">
                        <label for="username">No. Control</label>
                        <input type="numeric" id="noControlU" name="noControlU"  required="required" readonly  />
                    </div>


                    <!-- Grupo -->
                    <div class="form-group">
                        <label for="username">Actividad</label>
                        <select name="ActividadU" id="ActividadU">
                            <option value="A">Selecionar Grupo</option>
                            <?php
                                $lista = "SELECT  Id, Actividad, Grupo, Horario FROM extraescolar";
                                $resultado = mysqli_query($conexion,$lista);

                                while($producto = mysqli_fetch_row($resultado)):
                            ?>
                        <option value="<?php echo $producto[0]?>"><?php echo $producto[1]." "."Grupo: ".$producto[2]." "."Horario: ".$producto[3] ?></option>
                            <?php 
                            endwhile;
                            ?>                     
                        </select>
                    </div>

                    <!-- Periodo -->
                    <div class="form-group">
                        <label for="username">Periodo</label>
                        <input type="numeric" id="PeriodoU" name="PeriodoU"  required="required"  />
                    </div>


                    <!-- Estatus -->
                    <div class="form-group">
                        <label for="username">Estatus</label>
                        <select name="EstatusU" id="EstatusU">
                            <option value="Acreditado">Acreditado</option>
                            <option value="No Acreditado">No Acreditado</option>
                            <option value="Cursando">Cursando</option>
                        </select>
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
    <script src="../js/cursos.js"></script>
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