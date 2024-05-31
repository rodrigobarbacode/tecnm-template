<!-- Desarrollado por: Francisco Ruiz - German Avila -->
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
  <!--NAVEGACION -->

   <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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