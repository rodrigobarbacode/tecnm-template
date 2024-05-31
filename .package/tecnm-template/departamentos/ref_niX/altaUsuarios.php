<?php 
	session_start();
	echo $_SESSION['usuario_valido'];
 ?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Lineas de pago</title>
		<link rel="stylesheet" href="../css/login.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
		<!-- DATATABLE CSS JS-->
		<link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.min.css"/>
		<script src="../js/jquery-1.11.3.min.js"></script>
   		<script src="../js/bootstrap.min.js"></script>	
   		<script src="../js/jquery.dataTables.js"></script>
   		
		<script type="text/javascript">
        $(document).ready(function () {
            $('#datatable').dataTable();
            $('#datatableConceptos').dataTable();
        });
        function reply_click(clicked_id){
        	document.getElementById("usuario").value=clicked_id;
        	document.getElementById("usuarioAEliminar").value=clicked_id;
        	$.post( "../php/checkListUpdate.php", {'x':''+clicked_id+''},function( result ) {
					document.getElementById('checks').innerHTML = result;
				})
        	$.post( "../php/actualizarUsuario.php", {'x':''+clicked_id+''},function( result ) {
					document.getElementById('updateUser').innerHTML = result;
				})
        }
        	$('#basicModal').modal(options);
    	</script>
</head>
<body>
	<?php 
	echo $_SESSION["usuario_valido"];
	require_once ("../header.php"); ?>
	<!-- class boxlogin por mi para contenedores -->
	<div class="container">
		<h3>Usuarios</h3>
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#ajustes">Ajustes</button>
		    
	</div>
	<!-- TABLAS USUAROS -->
	<div class="container">
		<div class="table-responsive">
		<!-- table-responsive para el div que contiene table -->
				<?php include '../php/conectarUsuarios.php';?>
        </div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="ajustes" role="dialog">
	    <div class="modal-dialog modal-sm">
	    
		      <!-- Modal content-->
		    <div class="modal-content">
		        <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Modificar usuario</h4>
		        </div>
		        <div class="modal-body">
		        	<!-- Eliminar Usuario -->
					<form action="../php/eliminarUsuarios.php" method="post">
						<div class="form-group">
							<input type="text" name="id" class="form-control" placeholder="ID">
							<input type="submit" class="btn btn-danger" value="EliminarUsuario" >
						</div>
					</form>
					<!-- INSERT -->
					<form action="../php/insertarUsuario.php" method="post" >
						<div class="form-group">
							<input type="text" name="user" class="form-control" placeholder="User"
								pattern="[a-zA-Z0-9][a-zA-Z0-9-]*([a-zA-Z0-9-])*"
							required
							/>
							<input type="text" name="name" class="form-control" placeholder="Name"
								pattern="[a-zA-Z0-9][a-zA-Z0-9-]*([a-zA-Z0-9-])*"
							required
							/>
							<input type="text" name="password" class="form-control" placeholder="Password"

							required
							/>
							<input type="text" name="level" class="form-control" placeholder="Level [1-3]"
								pattern="[1-3]*"
							required
							/>
							<input type="submit" class="btn btn-primary" value="Guardar" onclick="statusSend()">
						</div>
					</form>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
		    </div>
	    </div>
	</div>
	<!-- MODAL PRIVILEGIOS -->
	<div class="modal fade" id="privilegios" role="dialog">
	  <!-- SIZE -->
	    <div class="modal-dialog modal-lg">
	      <!-- Modal content-->
			<div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Privilegios de usuario</h4>
			    </div>
			    <div class="modal-body">
					<form action="../php/insertarPrivilegios.php" method="post">
						<input type="text" id="usuario" name="usuario" hidden>
						<div id="checks"></div>
						
						<input type="submit" class="btn btn-primary" value="Guardar" >
					</form>
					<!-- updateUser hace el cambio y actualizarUsuario muestra la lista -->
					<form action="../php/updateUser.php" method="post">
						<div id="updateUser"></div>
						<input type="submit" class="btn btn-primary" value="Actualizar" >
					</form>
					<form action="../php/eliminarUsuarios.php" method="post">
						<div class="form-group">
							<input type="text" id="usuarioAEliminar" name="usuario" hidden>
							<input type="submit" class="btn btn-danger" value="EliminarUsuario" >
						</div>
					</form>
			    </div>
			    <div class="modal-footer">
			    	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			    </div>
			</div>
	    </div>
	</div>
	<div class="container" id="errorRegistro" >
		<div class="alert alert-danger" hidden>
			Error
		</div>
		<div class="alert alert-success" id="successRegistro" hidden>
		 	Usuario registrado
		</div>
	</div>
</body>
</html>