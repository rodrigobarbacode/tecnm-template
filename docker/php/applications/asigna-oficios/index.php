<?php
	session_start();
	if(isset($_SESSION['user'])){
		header('location:asignacion.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Asignacion de No. de Oficios y Comisiones</title>
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Asignacion de No. de Oficios y Comisiones</h1>
	<div id="login">
		<div class="col-md-4 col-md-offset-4">

			<div class="panel panel-primary">
			  	<div class="panel-heading"><span class="glyphicon glyphicon-lock"></span> Iniciar Sesion</div>
			  	<div class="panel-body">
			    	<label>Usuario:</label>
			    	<input type="text" class="form-control" v-model="username" v-on:keyup="keymonitor">
			    	<label>Contraseña:</label>
			    	<input type="password" class="form-control" v-model="password" v-on:keyup="keymonitor">
			  	</div>
			  	<div class="panel-footer">
			  		<button class="btn btn-primary btn-block" @click="checkLogin();"><span class="glyphicon glyphicon-log-in"></span> Login</button>
			  	</div>
			</div>

			<div class="alert alert-danger text-center" v-if="errorMessage">
				<button type="button" class="close" @click="clearMessage();"><span aria-hidden="true">&times;</span></button>
				<span class="glyphicon glyphicon-alert"></span> {{ errorMessage }}
			</div>

			<div class="alert alert-success text-center" v-if="successMessage">
				<button type="button" class="close" @click="clearMessage();"><span aria-hidden="true">&times;</span></button>
				<span class="glyphicon glyphicon-check"></span> {{ successMessage }}
			</div>

		</div>
	</div>
</div>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="app.js"></script>
</body>
</html>
