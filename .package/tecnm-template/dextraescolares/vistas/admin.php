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

    <?php
    require_once "../clases/Conexion.php";

    $c= new conectar();
            $conexion=$c->conexion();
            $alumno = $_SESSION['nombre'];
            $sql="SELECT Id, noEmpleado, Nombre from usuarios where noEmpleado = '$alumno'";
    
            $result =  mysqli_query($conexion,$sql);
    while($ver = mysqli_fetch_row($result)):
  ?>
        <form id="frmAdmin" class="tabla">
            <div class="form-toggle"></div>
            <div class="form-panel one">
                <div class="form-header">
                <h1>Perfil</h1>
                </div>
                <div class="form-content">
                <input type="text" id='Id' name="Id" value="<?php echo $ver[0]?>" readonly  required="required" hidden />
                  <div class="form-group">
                        <label for="username">No. Empleado</label>
                        <input type="text" id='noEmpleado' name="noEmpleado" value="<?php echo $ver[1]?>" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="username">Nombre</label>
                        <input type="text" id='Nombre' name="Nombre" value="<?php echo $ver[2]?>" readonly  required="required" />
                    </div>
                    <!-- fecha -->
                    <div class="form-group">
                        <label for="username">Fecha de Nacimiento</label>
                        <input type="date" id="Fecha" name="Fecha" onchange="obtenerFecha(this)"  required="required" />
                    </div>

                    <span style="margin-top:15px;" class="btn btn-primary" id="actualizar">Actualizar</span>
                    </div>
            </from>
            <script src="../js/usuarios.js"></script>
</body>
<?php
      endwhile;
    ?>
</html>
<script type="text/javascript">
function obtenerFecha(e)
{

  var fecha = moment(e.value);
  console.log("Fecha original:" + e.value);
}
</script>
<script src="https://momentjs.com/downloads/moment.js"></script>
<?php
}
else
{
    header("location: ../index.php");
}
?>