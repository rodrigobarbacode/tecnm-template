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
    <title>Inicio</title>
    
    <link rel="stylesheet" href="../librerias/inicio.css">
    <?php require_once "menu.php"; ?>
</head>
<body>
<!-- Animacion 
<div style="margin-left: 400px; margin-right: auto;">
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets6.lottiefiles.com/private_files/lf30_AGoC3n.json"  background="transparent"  speed=".5"  style="width: 800px; height: 800px;"  loop  autoplay></lottie-player>
</div>-->

<div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Bienvenido</h1>
    </div>
    <div class="form-content">
      <div id="fb-root"></div>
      <img  src="http://www.itmexicali.edu.mx/extraescolares/img/encabezado.jpg" style="width:800px" alt="">
    </div>
  </div>

</body>
</html>
<?php
}
else
{
    header("location: ../index.php");
}
?>