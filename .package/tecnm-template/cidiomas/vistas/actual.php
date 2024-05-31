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

<div class="form">
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
            $sql="SELECT grupos.Nombre, grupos.Nivel, grupos.Horario FROM `cursos` inner join grupos 
            on cursos.idGrupo = grupos.idGrupo where cursos.noControl = '$alumno' and cursos.Estatus = 'Cursando'";
    
            $result =  mysqli_query($conexion,$sql);
			
			if(!$result)
			{
			die ("A un no tienes curso asignado");  }
			
    while($ver = mysqli_fetch_row($result)):
  ?>
        <div class="form-group">
          <label>Grupo: <?php echo $ver[0];?></label>
        </div>
        <div class="form-group">
          <label>Nivel: <?php echo $ver[1];?></label>
        </div>
        <div class="form-group">
          <label>Horario: <?php echo $ver[2];?> </label>
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