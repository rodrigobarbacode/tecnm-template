
<?php
$host     = $_SERVER['HTTP_HOST'];
$protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https' : 'http';
$server   = $protocol . '://' . $_SERVER['SERVER_NAME'];
$uri      = explode('/', $_SERVER['REQUEST_URI']);
$uri      = (string) $uri[1] === 'itm2' ? '/' . $uri[1] : '';
$base     = $server . $uri . '/';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $base ?>img/iconos/min.ico" />
  <title>Instituto Tecnológico de Mexicali</title>
  <!--    LINK DE BOOSTRAP 4-->
  <link type="text/css"href="<?php echo $base ?>css/bootstrap.min.css" rel="stylesheet" >
  <!--    ESTILOS CSS LOCALES -->
  <link type="text/css" href="<?php echo $base ?>css/estilos.css" rel="stylesheet">
  <link type="text/css" href="<?php echo $base ?>css/iconos.css" rel="stylesheet">


  <!--    LINK DE ICONOS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- LINK DE NOTICIAS  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>-->

</head>
<body>
  <!--NAVEGACION Y HEADER-->
  <nav class="container-fluid sticky-top">
    <?php require 'plantilla/barra_navegacion_gobierno.php'?>
  </nav>
  <header class="container-fluid m-auto">
    <?php require 'plantilla/header.php'?>
  </header>
  <nav class=" container-fluid sticky-top-2">
    <?php require 'plantilla/barra_navegacion.php'?>
  </nav>
 <!--Seccion para llamar algun archivo para la ventana-->
  <section class="container m-1 mx-auto ">
       <!--aqui se agrega la ruta  -->
    <?php require 'contraloria_social.php'?>
  </section>
  <!--FOOTER-->
  <footer class="container-fluid mt-3" id="letra">
    <?php require 'plantilla/footer.php';?>
  </footer>

  <div class="icon-bar">
    <a href="https://www.facebook.com/ITMEXICALI" title="facebook ITM"><img class="rounded-circle " src="<?php echo $base ?>img/iconos/fb.ico"></a>
    <a href="https://www.instagram.com/buffalo.vox/" title="instagram ITM"><img class="rounded-circle" src="<?php echo $base ?>img/iconos/instagram.ico"></a>
    <a href="https://www.youtube.com/channel/UCj0YfvUhWQaH94SrAuBb9OA" title="youtube ITM"><img class="rounded-circle" src="<?php echo $base ?>img/iconos/youtube.ico"></a>
    <!-- <a href="#" class="twitter rounded-circle"><i class="fa fa-twitter"></i></a> -->
  </div>
  <span class="ir-arriba "><i class="material-icons">present_to_all</i></span>

<!--SCRIPT PARA FUNCIONAMIENTO-->
  <script src="<?php echo $base ?>js/popper.min.js"></script>
  <script src="<?php echo $base ?>js/jquery.min.js"></script>
  <script src="<?php echo $base ?>js/bootstrap.min.js"></script>
  <script src="<?php echo $base ?>js/despliega_submenu.js"></script>
  <script src="<?php echo $base ?>js/slick/slick.min.js"></script>
  <script src="<?php echo $base ?>js/slinoti.js"></script>
  <script src="<?php echo $base ?>js/arriba.js"></script>

</body>
</html>