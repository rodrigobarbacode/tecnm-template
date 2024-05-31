<?php
require_once "clases/conexion.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Alumnos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons'>
    <link rel="stylesheet" href="librerias/style.css">
</head>
<body>

<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Extra Escolares ITM</h1>
      <img src="http://www.itmexicali.edu.mx/img/tecnmgob/pleca-tecmxl.png" alt="" class="rounded-circle">
    </div>
    <div class="form-content">
      <form id="frmLogin" >
        <div class="form-group">
          <label for="username">No. Control</label>
          <input type="numeric" pattern="[0-9-]{1,15}" id="noControl" name="noControl" required="required"/>
        </div>
        <div class="form-group">
          <label for="password">Fecha Nacimiento</label>
          <input type="date" pattern="[0-9-]{1,15}" id="fecha" name="fecha" required="required"/>
        </div>
        <div class="form-group">
        <span style="margin-top:15px;" class="btn btn-primary" id="entrar">Alumno</span>
        <span style="margin-top:15px;" class="btn btn-primary" id="ingresar">Maestro</span>
        </div>
      </form>
    </div>
  </div>

</body>
<script src="librerias/jquery-3.5.1.js"></script>
<script src="js/funciones.js"></script>
<script src="js/login.js"></script>
</html>