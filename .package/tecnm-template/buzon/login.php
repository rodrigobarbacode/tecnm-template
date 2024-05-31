<!DOCTYPE html>
<html lang="es">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="author" content="Francisco Ruiz">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	</head>
<body background="img/fondo.jpg">

	<div class="wrapper fadeInDown">
  		<div id="formContent">
	    <!-- Tabs Titles -->
		    <!-- Icon -->
		    <div class="fadeIn first">
		    	<a href="http://www.itmexicali.edu.mx/"><img src="img/logo.png" id="icon" alt="User Icon" /></a>
		      
		      <h1>Iniciar Sesión</h1>
		    </div>
		    <!-- Login Form -->
		    <form name="login" method="post" action="validar.php">
		      <input type="text" id="usrlogin" class="fadeIn second" name="usrlogin" placeholder="Usuario">
		      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
		      <input type="submit" id="user_login" class="fadeIn fourth" value="Entrar">
		    </form>
		    <!-- Remind Passowrd 
		    <div id="formFooter">
		      <a class="underlineHover" href="#">Go to the Site</a>
		    </div>-->
	  	</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
 	 <script src="js/script.js"></script>
</body>
</html>