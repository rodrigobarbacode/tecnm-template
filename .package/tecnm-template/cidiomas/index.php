<?php
require_once "clases/conexion.php";
include("procesos/keys.php");
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
      <h1>Idiomas ITM</h1>
      <img src="img/itm.jpg" alt="" class="rounded-circle">
    </div>
    <div class="form-content">
      <form id="frmLogin" >
        <div class="form-group">
          <label for="username">No. Control</label>
          <input type="numeric" id="noControl" name="noControl" required="required"/>
        </div>
        <div class="form-group">
          <label for="password">Fecha Nacimiento</label>
          <input type="date" id="fecha" name="fecha" required="required"/>
        </div>
        <div class="form-group">
        <span style="margin-top:15px;" onclick= "login()" class="btn btn-primary" id="entrar">Alumno</span>
        <span style="margin-top:15px;" class="btn btn-primary" id="ingresar">Maestro</span>
        </div>
      </form>
    </div>
  </div>

</body>


<script src="librerias/jquery-3.5.1.js"></script>
<script src="js/funciones.js"></script>
<script src="js/login.js"></script>

<script type="text/javascript">

    function login()
    {

        var form = $('#loginForm');
        var url = form.attr('action');

        $.ajax(
        {
            type: "POST",
            url: 'recaptcha.php',
            data: form.serialize(),
            success: function(data)
            {
                 $('#message').empty();
                $('#message').append(data);
            }
        });

    }


    grecaptcha.ready(function() {
    grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'})
    .then(function(token) {
        
        $('#google-response-token').val(token);
    });
    });



</html>