<?php
session_start();

if(isset($_SESSION['nombre']))
{
require_once "../../clases/conexion.php";
//session_start()

        $c = new conectar();
        $conexion = $c->conexion();
        $alumno = $_SESSION['nombre'];
        $sql="SELECT grupos.Nivel, grupos.Horario, cursos.Estatus FROM `cursos` inner join grupos 
        on cursos.idGrupo = grupos.idGrupo where cursos.noControl = '$alumno' ";

        $result =  mysqli_query($conexion,$sql);
?>
<table id="example" class="table table-borderless" style="text-align:center">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nivel</th>
      <th scope="col">Horario</th>
      <th scope="col">Estatus</th>
    </tr>
  </thead>

  <?php
    while($ver = mysqli_fetch_row($result)):
  ?>
  <tr>
        <td><?php echo $ver[0] ?></td>
        <td><?php echo $ver[1] ?></td>
        <td><?php echo $ver[2] ?></td>
        
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