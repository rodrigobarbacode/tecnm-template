<!-- Shinia / Yogurt -->
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/x-icon" href="/public/img/iconos/min.ico" />
  <title>Gobierno de México - TECNM - Campus Mexicali</title>

  <!-- Bootstrap CSS -->
  <link type="text/css" href="/public/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap CSS -->

  <!-- Local CSS Styles -->
  <link type="text/css" href="/public/js/slick/slick-theme.css" rel="stylesheet">
  <link type="text/css" href="/public/css/estilos.css" rel="stylesheet">
  <link type="text/css" href="/public/css/iconos.css" rel="stylesheet">
  <link type="text/css" href="/public/js/slick/slick.css" rel="stylesheet">
  <link type="text/css" href="/public/css/toastr.min.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Local CSS Styles -->

  <!-- Google Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- Google Icons -->
</head>

<body>
  <!-- Navigation and Header -->
  <nav class="container-fluid sticky-top">
    <?php require 'barra_navegacion_gobierno.php' ?>
  </nav>
  <header class="container-fluid m-auto">
    <?php require 'header.php' ?>
  </header>
  <nav class="container-fluid sticky-top-2">
    <?php require 'barra_navegacion.php' ?>
  </nav>
  <!-- Navigation and Header -->

  <!-- Banner -->
  <section class="container m-1 mx-auto">
    <?php require 'banner.php' ?>
  </section>
  <!-- Banner -->

  <!-- News -->
  <section class="container-fluid m-auto">
    <?php require 'public/assets/noticias/noticias.php' ?>
  </section>
  <!-- News -->

  <!-- Links of Interest -->
  <section class="container-fluid pt-2 m-auto">
    <?php require 'enlaces_interes.php' ?>
  </section>
  <!-- Links of Interest -->

  <!-- About Us -->
  <section class="container-fluid pt-2 m-auto">
    <?php require 'conocenos.php' ?>
  </section>
  <!-- About Us -->

  <!-- Footer -->
  <footer class="container-fluid mt-3" id="letra">
    <?php require 'footer.php'; ?>
  </footer>
  <!-- Footer -->

  <!-- Social Media Icons -->
  <div class="icon-bar">
    <a href="https://www.facebook.com/ITMEXICALI" title="Facebook ITM"><img class="rounded-circle" src="/public/img/iconos/fb.ico"></a>
    <a href="https://www.instagram.com/buffalo.vox/" title="Instagram ITM"><img class="rounded-circle" src="/public/img/iconos/instagram.ico"></a>
    <a href="https://www.youtube.com/watch?v=CYjmfKd-oJk" title="youtube ITM"><img class="rounded-circle" src="/public/img/iconos/youtube.ico"></a>
  </div>
  <span class="ir-arriba"><i class="material-icons">present_to_all</i></span>
  <!-- Social Media Icons -->

  <!-- Scripts -->
  <script src="/public/js/popper.min.js"></script>
  <script src="/public/js/jquery.min.js"></script>
  <script src="/public/js/bootstrap.min.js"></script>
  <script src="/public/js/despliega_submenu.js"></script>
  <script src="/public/js/slick/slick.min.js"></script>
  <script src="/public/js/slinoti.js"></script>
  <script src="/public/js/arriba.js"></script>
  <script src="/public/js/jquery_ajax.js"></script>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155881186-1"></script>
  <!-- Scripts -->

  <!-- Modal dialog for displaying announcements to the student community -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header bg-dark">
          <!-- Title of the modal -->
          <p class="m-auto">
          <h4 class="modal-title mx-auto">AVISO A LA COMUNIDAD ESTUDIANTIL</h4>
          </p>
          <!-- Button to close the modal -->
          <button type="button" class="close bg-white" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal Header -->
        <!-- Modal body -->
        <div class="modal-body bg-light container-fluid">
          <!-- Content of the modal body -->
          <p class="text-center">
            <!-- Uncomment the following code block to display an announcement with a link -->
            <!--
          <a href="http://www.itmexicali.edu.mx/img/banners/2022/documentos/ingreso_2023_1.pdf" target="_blank">
            <img src="./img/banners/2022/conv_plazo.jpeg" class="ajuste">
          </a>
          -->

            <!-- Uncomment the following code block to display an announcement with only an image -->
            <!--
          <img src="./img/avisos/fichas2.jpg" class="ajuste">
          -->
          </p>
        </div>
        <!-- Modal body -->
        <!-- Modal footer -->
        <div class="modal-footer bg-danger">
          <!-- Button to close the modal -->
          <button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
        </div>
        <!-- Modal footer -->
      </div>
    </div>
  </div>
  <!-- Modal dialog for displaying announcements to the student community -->

  <!-- Function to open modal -->
  <script type="text/javascript">
    // Show modal when the page is loaded
    if (true) {
      $(document).ready(function() {
        $('#myModal').modal('toggle');
      });
    }
  </script>

  <div id='occ-widget'>
    <script id="bolsa-widget" type="text/javascript" src="http://jobdiscovery-widget-occ.occ.com.mx/button-bundle.js" key="1YidX3sOhZ2tXuCzh1SBgW3JIkf"></script>
  </div>
  <!-- Function to open modal -->
</body>

</html>