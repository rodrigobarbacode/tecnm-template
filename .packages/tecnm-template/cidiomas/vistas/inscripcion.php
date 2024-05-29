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
    <title>Inscripcion</title>
    <link rel="stylesheet" href="../librerias/info.css">
    <?php require_once "menu.php";?>
</head>
<body>
<?php
 /* $semestre1 = strtotime(date("Y-m-d"));
  $fechaFinal1 = strtotime(date("Y-02-25"));

  $semestre2 = strtotime(date("Y-m-d"));
  $fechaFinal2 = strtotime(date("Y-08-25"));


  if($semestre1 > $fechaFinal1 && $semestre1 > $fechaFinal2)
  {*/
?>
<!--<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Inscripciones</h1>
    </div>
    <div class="form-content">
    
        <div class="form-group">
          <label>Fin del Perido de Inscripcion</label>
        </div>
        </div>
    </div>
  </div>-->
<?php
  /*}
    else
  {*/
?>
<form id="frmArticulos" class="tabla">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Inscripcion</h1>
    </div>
    <div class="form-content">
        <!-- alumno -->
        <div class="form-group">
          <label for="username">No. Control</label>
          <input type="numeric" id="noControl" name="noControl" readonly required="required" value="<?php echo $_SESSION['nombre'];?>"/>
        </div>

        <!-- Grupo -->
        <div class="form-group">
          <label for="username">Grupo y Horario</label>
          <select class="form-control" name="grupo" id="grupo">
                    <option value="A">Selecionar Grupo</option>
                    <?php
                        $alumno = $_SESSION['nombre'];

                        $sql = "SELECT grupos.Nivel FROM grupos inner join cursos on grupos.idGrupo = cursos.idGrupo WHERE noControl='$alumno'  ORDER BY grupos.Nivel DESC LIMIT 1";
                        $result = mysqli_query($conexion,$sql);
                        $nivel = mysqli_fetch_row($result);

                        $consulta = "select grupos.idGrupo, grupos.Nombre, grupos.Nivel, grupos.Horario from grupos
                        inner JOIN cursos on grupos.idGrupo = cursos.idGrupo
                        WHERE cursos.noControl = '$alumno' AND cursos.Estatus = 'Reprovado' ORDER by grupos.Nivel ASC LIMIT 1";
                        //$reprovado = mysqli_query($conexion,$consulta);
                        //$acreditacion = mysqli_fetch_row($reprovado)


                        $lista = "select idGrupo, Nombre, Nivel, Horario from grupos where Nivel = (select min(Nivel) from grupos where Nivel > '$nivel[0]') ";
                        $resultado = mysqli_query($conexion,$lista);

                        if ($acreditacion = mysqli_query($conexion,$consulta)) {
                          $row_cnt = $acreditacion->num_rows;
                          if($row_cnt != 0 ){
                        while($producto = mysqli_fetch_row($acreditacion)):
                    ?>
                   <option value="<?php echo $producto[0]?>"><?php echo $producto[1]." "."Nivel ".$producto[2]." ".$producto[3] ?></option>
                    <?php 
                      endwhile;
                    }
                  
                  else{
                    while($producto = mysqli_fetch_row($resultado)):
                    ?>
                     <option value="<?php echo $producto[0]?>"><?php echo $producto[1]." "."Nivel ".$producto[2]." ".$producto[3] ?></option>
                     <?php
                     endwhile;
                  }
                }
                $acreditacion->close();
                     ?>
                </select>
        </div>

        <span style="margin-top:15px;" class="btn btn-primary btn-md" id="agregar">Registrar Curso</span>
    </div>
</from>
<?php
  }
?>

</body>
<script src="../js/alumnos.js"></script>
</html>
<script type="text/javascript">

</script>
<?php
}
else
{
    header("location: ../index.php");
}
?>