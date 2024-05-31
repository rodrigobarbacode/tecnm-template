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
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>
            404
        </title>
        <meta content="10; url=<?php echo $base ?>" http-equiv="refresh">
            <meta content="width=device-width, initial-scale=1" name="viewport"/>



              <link type="text/css"href="<?php echo $base ?>css/bootstrap.min.css" rel="stylesheet" >

        </meta>
    </head>
    <body onload="sinVueltaAtras();" onpageshow="if (event.persisted) sinVueltaAtras();" onunload="">
        <div class="container text-center">
            <div class="row pt-5">
                <div class="col-sm-12 col-lg-12">
                    <img class="w-100" src="<?php echo $base ?>/errors/images/tecmxl.png">
                </div>
                <div class="col-lg-6 offset-lg-3">
                    <h2>
                        404 Página no encontrada
                    </h2>
                    <h4>
                        Lo sentimos, ha occurrido un error, el recurso que has solicitado no se ha encontrado!
                    </h4>
                    <p id="index" style="font-size: 26px">
                    </p>
                    <a class="btn btn-primary btn-lg" href="<?php echo $base ?>">
                        <span class="glyphicon glyphicon-arrow-left">
                        </span>
                        Pagina de Inicio
                    </a>
                </div>
            </div>
        </div>
        <script crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
        </script>
        <script crossorigin="anonymous" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
        </script>
        <script crossorigin="anonymous" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
        </script>
        <script>
            var n = 10;
        var l = document.getElementById("index");
        window.setInterval(function(){
          l.innerHTML = n;
          n--;
        },1000);
        </script>
        <script type="text/javascript">
            window.history.forward();
    function sinVueltaAtras(){ window.history.forward(); }
        </script>
    </body>
</html>