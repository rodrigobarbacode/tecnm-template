<?php
session_start();

if(isset($_SESSION['nombre']))
{
require_once "../../clases/conexion.php";

        $c = new conectar();
        $conexion = $c->conexion();
        $alumno = $_SESSION['nombre'];
        $sql="SELECT Id, Area, Actividad, Grupo, Horario, Docente, RFC, Correo from extraescolar";

        $result =  mysqli_query($conexion,$sql);
?>
<table id="example" class="table table-responsive table-borderless" style="text-align:center">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Area</th>
      <th scope="col">Actividad</th>
      <th scope="col">Grupo</th>
      <th scope="col">Horario</th>
      <th scope='col'>Docente</th>
      <th scope='col'>RFC</th>
      <th scope='col'>Correo</th>
      <th scope='col'>Acciones</th>
      <th scope='col'>PDF</th>
      <th scope='col'>Excel</th>
    </tr>
  </thead>

  <?php
    while($ver = mysqli_fetch_row($result)):
  ?>
  <tr>
        <td><?php echo $ver[1] ?></td>
        <td><?php echo $ver[2] ?></td>
        <td><?php echo $ver[3] ?></td>
        <td><?php echo $ver[4] ?></td>
        <td><?php echo $ver[5] ?></td>
        <td><?php echo $ver[6] ?></td>
        <td><?php echo $ver[7] ?></td>
        <td>
            <span class="btn btn-primary btn-sm" data-toggle="modal" data-target="#actualizarGrupo" onclick="agregarDatoGrupo('<?php echo $ver[0]?>')">
            <svg class="bi bi-pencil-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
            </span>

            <span class="btn btn-danger btn-sm" onclick="eliminarDato('<?php echo $ver[0]?>')">
            <svg class="bi bi-trash" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg>
            </span>
        </td>
        <td>
        <span class="btn btn-primary btn-sm"><a style="color:white;" href="../procesos/grupos/crearReporte.php?idGrupo=<?php echo $ver[0] ?>">Reporte </a>
                        <svg class="bi bi-file-earmark-text" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z"/>
                            <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z"/>
                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        </span>
        </td>
        <td>
        <span class="btn btn-primary btn-sm"><a style="color:white;" href="../Excel/reporteGrupo.php?idGrupo=<?php echo $ver[0] ?>">Reporte </a>
                        <svg class="bi bi-file-earmark-text" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z"/>
                            <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z"/>
                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        </span>
        </td>
        
    </tr>
    <?php
      endwhile;
    ?>
</table>
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