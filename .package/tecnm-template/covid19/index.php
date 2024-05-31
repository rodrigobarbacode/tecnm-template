<?php

session_start();
session_unset(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <title>Acceso Cuestionario Covid</title>
    <link rel="icon" href="img/ico.png">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 70px;
            /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
 <!--<img src="img/encabezado.png" class="img-rounded" alt="Cinque Terre" /> 
 img src="img/danyLogoItm.png" class="img-rounded" alt="Cinque Terre" /--> 
</div>	
    <!-- Navigation -->
    
    <!-- Page Content -->
    <div class="container">

      <form class="form-signin" action="checklogin.php" method="post">
                <h2 class="form-signin-heading">CUESTIONARIO DE DETECCI&Oacute;N DE SIGNOS Y S&Iacute;NTOMAS</h2>
                
                <label for="inputUsuario" class="sr-only">Usuario</label>
                <input type="text" id="inputUsuario" name="inputUsuario" class="form-control" placeholder="Usuario" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password	" required>
                 <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Entrar</button>
                 <h5>
                    <?php
                        if(isset($_GET["error"])){
                            echo "Usuario y/o password incorrectos" ;
                        }
                    ?>
                 </h5>
      </form>
    </div> <!-- /container -->
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
