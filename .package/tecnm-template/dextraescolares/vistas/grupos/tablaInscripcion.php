<?php
session_start();

if(isset($_SESSION['nombre']))
{
require_once "../../clases/conexion.php";
        $c = new conectar();
        $conexion = $c->conexion();
        $alumno = $_SESSION['nombre'];
        $sql ="SELECT cursos.idCurso, cursos.noControl, alumno.paterno, alumno.materno, alumno.nombre, grupos.Nombre, grupos.Nivel,grupos.Horario, cursos.Estatus
        from cursos 
        INNER JOIN alumno on cursos.noControl = alumno.noControl 
        INNER JOIN grupos on cursos.idGrupo = grupos.idGrupo";
        $result =  mysqli_query($conexion,$sql);
?>
<table id="example" class="table table-borderless" style="text-align:center">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No. Control</th>
      <th scope="col">Alumno</th>  
      <th scope="col">Grupo</th>
      <th scope="col">Nivel</th>
      <th scope="col">Horario</th>
      <th scope="col">Estatus</th>
      <th scope="col">Calificar</th>
    </tr>
  </thead>

  <?php
    while($ver = mysqli_fetch_row($result)):
  ?>
  <tr>
        <td><?php echo $ver[1] ?></td>
        <td><?php echo $ver[2]."".$ver[3]."".$ver[4] ?></td>
        <td><?php echo $ver[5] ?></td>
        <td><?php echo $ver[6] ?></td>
        <td><?php echo $ver[7] ?></td>
        <td><?php echo $ver[8] ?></td>
        <td><span class="btn btn-primary btn-sm" data-toggle="modal" data-target="#calificar" onclick="agregarDatoCurso('<?php echo $ver[0]?>')">
            <svg class="bi bi-pencil-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
            </span></td>
        
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