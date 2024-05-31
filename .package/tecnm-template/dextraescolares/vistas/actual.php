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
    <title>Perido Actual</title>
    <link rel="stylesheet" href="../librerias/info.css">
    <?php require_once "menu.php"; ?>
</head>
<body>

<div style="width:800px" class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Curso Actual</h1>
    </div>
    <div class="form-content">
    <?php
    require_once "../clases/conexion.php";

    $c= new conectar();
            $conexion=$c->conexion();
            $alumno = $_SESSION['nombre'];
            $sql="SELECT extraescolar.Actividad, extraescolar.Grupo, extraescolar.Horario, extraescolar.Docente, extraescolar.Correo,  extraescolar.Moodle FROM `actividades` inner join extraescolar 
            on actividades.IdExtraescolar = extraescolar.Id where actividades.noControl = '$alumno' and actividades.Estatus = 'Cursando'";
    
            $result =  mysqli_query($conexion,$sql);
    while($ver = mysqli_fetch_row($result)):
  ?>
        <div class="form-group">
          <label>Actividad: <?php echo $ver[0];?></label>
        </div>
        <div class="form-group">
          <label>Grupo: <?php echo $ver[1];?></label>
        </div>
        <div class="form-group">
          <label>Horario: <?php echo $ver[2];?> </label>
        </div>
        <div class="form-group">
          <label>Docente: <?php echo $ver[3];?> </label>
        </div>
<div class="form-group">
          <label>Correo: <?php echo $ver[4];?> </label>
        </div>
<div class="form-group">
          <label>Moodle (Copiar Link): <a href="#"><?php echo $ver[5];?></a> </label>
        </div>
    </div>
  </div>
</body>
<?php
      endwhile;
    ?>
</html>
<?php
}
else
{
    header("location: ../index.php");
}
?>