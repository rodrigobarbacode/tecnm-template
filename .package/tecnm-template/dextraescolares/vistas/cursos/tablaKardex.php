<?php
session_start();

if(isset($_SESSION['nombre']))
{
require_once "../../clases/conexion.php";
//session_start()

        $c = new conectar();
        $conexion = $c->conexion();
        $alumno = $_SESSION['nombre'];
        $sql="SELECT extraescolar.Actividad,extraescolar.Grupo, extraescolar.Horario, extraescolar.Docente,
        actividades.Estatus, actividades.FechaTerminacion, extraescolar.Periodo FROM `actividades` inner join extraescolar 
        on actividades.IdExtraescolar = extraescolar.Id where actividades.noControl = '$alumno' ";

        $result =  mysqli_query($conexion,$sql);
?>
<table id="example" class="table table-borderless" style="text-align:center">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Actividad</th>
      <th scope="col">Grupo</th>
      <th scope="col">Horario</th>
      <th scope="col">Docente</th>
      <th scope="col">Estatus</th>
      <th scope="col">Terminacion</th>
      <th scope="col">Periodo</th>
    </tr>
  </thead>

  <?php
    while($ver = mysqli_fetch_row($result)):
  ?>
  <tr>
        <td><?php echo $ver[0] ?></td>
        <td><?php echo $ver[1] ?></td>
        <td><?php echo $ver[2] ?></td>
        <td><?php echo $ver[3] ?></td>
        <td><?php echo $ver[4] ?></td>
        <td><?php echo $ver[5] ?></td>
        <td><?php echo $ver[6] ?></td>
        
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