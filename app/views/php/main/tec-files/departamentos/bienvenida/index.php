

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Instituto Tecnológico de Mexicali</title>
  <!-- ----------------New CSS Links---------------- -->
  <link rel="icon" href="img/favicon/tecnm.ico" />

  <!-- CSS Bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		
  <!-- Mis estilos -->
  <link rel="stylesheet" href="css/estilos.css">
  
  <!-- Iconos con Font Awesome -->
  <link rel="stylesheet" href="assets/files/main/css/fa-svg-with-js.css">
  <link rel="stylesheet" href="/iconos/iconos.css">
  
  <!-- Se agrega para poder usar las fuentes en el css -->
  <link rel="stylesheet" href="assets/files/main/css/estilo-compresion.min.css"> 
  <link rel="stylesheet" href="assets/files/main/css/jssorStyle.css">  
  
  <link href="css/noticarrusel/slick-theme.css" rel="stylesheet" />
  <link href="css/noticarrusel/slick.css" rel="stylesheet" />

  <!-- Estilo del carrucel -->
  <link rel="stylesheet" href="css/index_style.css">

  <!-- Desface -->
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  
  
  <!-- Sub Menú -->
  <link rel="stylesheet" href="css/bootnavbar.css">
  <!-- ----------------New CSS Links---------------- -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/index_func.js"></script>
  <!--  -->
  
  <!-- Traductor -->
  <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  
</head>
<body>
 
  <!--NAVEGACION Y HEADER-->
  <?php require '../../../navbar_gob.php'?>

  <?php require '../../../main_header.php' ?>

  <?php require '../../../navbar_white.php'?>

  <?php require '../../../navbar_blue.php'?>
  
 <!--Seccion para llamar algun archivo para la ventana-->
  <section class="container m-1 mx-auto ">
    <?php require 'bienvenida.php'?>
  </section>

  <!--FOOTER-->
  <?php require '../../../footer_blue.php';?>

  <?php require '../../../footer_gob.php';?>

  <!-- Opciones de Accesibilidad -->
  <script src='assets/files/main/js/index.onload.js'></script>
	
	<!-- Twitter -->
	<script id='twitter-wjs' src='https://platform.twitter.com/widgets.js'></script>
	
	<!-- Banner -->
	<script src='assets/web/assets/jquery/jquery.min.js'></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Configuración de los carrucel -->
	<script src="js/index_carrusel.js"> </script>
	<script src="js/noticarrusel/slick.js"></script>
  	
	<!-- Menú Azul - Permite el desglose -->
	<script src="js/bootnavbar.js" ></script>
	
</body>
</html>