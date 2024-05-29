<!-- Desarrollado por: Francisco Ruiz - German Avila -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/x-icon" href="./img/iconos/min.ico" />
  <title>GOBIERNO DE MEXICO    TecNM Campus Mexicali Mexicali</title>
  <!--    LINK DE BOOSTRAP 4-->
  <link type="text/css"href="./css/bootstrap.min.css" rel="stylesheet" >
  <!--    ESTILOS CSS LOCALES -->
  <link type="text/css" href="./js/slick/slick-theme.css"rel="stylesheet">
  <link type="text/css" href="./css/estilos.css" rel="stylesheet">
  <link type="text/css" href="./css/iconos.css" rel="stylesheet">
  <link type="text/css" href="./js/slick/slick.css" rel="stylesheet">
  <link type="text/css" href="./css/toastr.min.css" rel="stylesheet">

  <!--    LINK DE ICONOS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- LINK DE NOTICIAS  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>-->
<!-- PARA CREAR LA VENTANA  -->



</head>
<body>

  <!--NAVEGACION Y HEADER-->
  <nav class="container-fluid sticky-top">
    <?php require 'barra_navegacion_gobierno.php'?>
  </nav>
  <header class="container-fluid m-auto">
    <?php require 'header.php'?>
  </header>
  <nav class=" container-fluid sticky-top-2">
    <?php require 'barra_navegacion.php'?>
  </nav>
 <!--BANNER-->
  <section class="container m-1 mx-auto ">
      <?php require 'banner.php'?>
  </section>
  <!--NOTICIA-->
  <section class="container-fluid m-auto ">
      <?php require 'noticias/noticias.php'?>
  </section>
  <!--ENLACES DE INTERES-->
  <section class="container-fluid pt-2 m-auto">
    <?php require 'enlaces_interes.php'?>
  </section>
  <!--CONOCENOS-->
  <section class="container-fluid pt-2 m-auto">
    <?php require 'conocenos.php'?>
  </section>
  <!--FOOTER-->
  <footer class="container-fluid mt-3" id="letra">
    <?php require 'footer.php';?>
  </footer>
<!-- Comentando la linea de modal_aviso el modal ya no se mostrara poner // antes del require ejemplo:::   <?php //require_once 'modal_aviso.php'?>-->
<!--  <?php  require_once 'modal_aviso.php'?>-->

  <div class="icon-bar">
    <a href="https://www.facebook.com/ITMEXICALI" title="facebook ITM"><img class="rounded-circle " src="./img/iconos/fb.ico"></a>
    <a href="https://www.instagram.com/buffalo.vox/" title="instagram ITM"><img class="rounded-circle" src="./img/iconos/instagram.ico"></a>
    <a href="https://www.youtube.com/watch?v=CYjmfKd-oJk" title="youtube ITM"><img class="rounded-circle" src="./img/iconos/youtube.ico"></a>
    <!-- <a href="#" class="twitter rounded-circle"><i class="fa fa-twitter"></i></a> -->
  </div>
<span class="ir-arriba "><i class="material-icons">present_to_all</i></span>

<!--SCRIPT PARA FUNCIONAMIENTO-->
  <script src="./js/popper.min.js"></script>
  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/despliega_submenu.js"></script>
  <script src="./js/slick/slick.min.js"></script>
  <script src="./js/slinoti.js"></script>
  <script src="./js/arriba.js"></script>

   <script src="./js/jquery_ajax.js"></script>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155881186-1"></script>

<!-- SCRIPT DE FUNCION PARA ABRIR MODAL DE AVISO-->
 <script type="text/javascript">
  $( document ).ready(function() {
    $('#myModal').modal('toggle')
});
</script>
<div id='occ-widget'>
<script id="bolsa-widget" type="text/javascript"
  src="http://jobdiscovery-widget-occ.occ.com.mx/button-bundle.js"
  key="1YidX3sOhZ2tXuCzh1SBgW3JIkf">
  </script>
  </div>
  
</body>
</html>