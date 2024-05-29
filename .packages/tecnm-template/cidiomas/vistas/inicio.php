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
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
    <!--<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2F136904106865815%2Fvideos%2F356081188456172&show_text=false&width=734&height=411&appId" width="734" height="411" style="border:none;overflow:hidden" data-autoplay="true" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" allowFullScreen="true"></iframe>-->
      <div class="fb-video"
          data-href="https://www.facebook.com/136904106865815/videos/356081188456172"
          data-width="734"
          data-heigth="411"
          data-allowfullscreen="true"
          data-autoplay="true"
          data-show-captions="true">
      </div>
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