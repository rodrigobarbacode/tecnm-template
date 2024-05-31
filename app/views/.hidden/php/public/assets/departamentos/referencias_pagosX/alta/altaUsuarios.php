<?php 
	session_start();
	if (!(isset($_SESSION["usuario_valido"])) ){
    		header('location:../index.php?error=Iniciar session');
         }
 ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="../css/login.css">
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!--link rel="stylesheet" href="../css/bootstrap-theme.min.css"-->
	<link rel="stylesheet" type="text/css" href="../css/signin.css">
	<title>SECRETARIA DE EDUCACION PUBLICA, LINEAS REFERENCIADAS DE DEPOSITO</title>
 <link rel="icon" href="img/ico.png">
		<!-- DATATABLE CSS JS-->
		<link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.min.css"/>
		<script src="../js/jquery-1.11.3.min.js"></script>
   		<script src="../js/bootstrap.min.js"></script>	
   		<script src="../js/jquery.dataTables.js"></script>
   		
		<script type="text/javascript">

        $(document).ready(function () {
            $('#datatable').dataTable();
            $('#datatableConceptos').dataTable();
		//experimentando
        //$('#submitAgregarUsuario').attr('disabled','disabled');
        //$('#submitAgregarUsuarioUpdate').attr('disabled','disabled');
        //validando campos
	         $("#validarUsuario").keyup(function(){
	         	//alert("bien");
	         	//validarNombreUsuario();
	        	var myVar1;
	        	window.clearTimeout(myVar1);
	        	myVar1 = setTimeout(validarNombreUsuario(), 2000);
		    })
	        
        

        });

		$(window).load(function(){
		   $("#validarUsuarioUpdate").keyup(function(){
	         	//alert("bien");
	         	//validarNombreUsuario();
	        	var myVar2;
	        	window.clearTimeout(myVar2);
	        	myVar2 = setTimeout(validarNombreUsuarioUpdate(), 2000);
		    })
		})

        function reply_click(clicked_id){
        	validarNombreUsuarioUpdate();
        	//validarNombreUsuario();
        	 
        	document.getElementById("usuario").value=clicked_id;
        	document.getElementById("usuarioAEliminar").value=clicked_id;
        	
        	$.post( "../php/checkListUpdate.php", {'x':''+clicked_id+''},function( result ) {
					document.getElementById('checks').innerHTML = result;
				})
        	$.post( "../php/actualizarUsuario.php", {'x':''+clicked_id+''},function( result ) {
					document.getElementById('updateUser').innerHTML = result;
				})
        }
        function pAgregarUsuario(){
        	var exist=$('#existe').html();
        	
        	if ( exist== "Usuario: Valido.") {
        		if(confirm("Desea agregar este usuario?")){
        		document.getElementById("agregarUsuario").submit();
        	}
        	}else{alert("Datos invalidos")}
        	
        }
        function pActualizar(){
        	if(confirm("Desea actualizar este concepto?")){
        		document.getElementById("actualizarUsuario").submit();
        	}
        }
        function pEliminar(){
        	if(confirm("Desea eliminar este concepto?")){
        		document.getElementById("eliminarUsuario").submit();
        	}
        }
        function pGuardarUpdatePrivilegios(){
        	if(confirm("Esta seguro de guardar los privilegios de este usuario?")){
        		document.getElementById("guardarUpdatePrivilegios").submit();
        	}

        }
        //estaba en #validarUsuairo -> onblur="validarNombreUsuario()", se remplazo por onkepPress
        function validarNombreUsuario(){
        	var validarUsuario = $("#validarUsuario").val();
        	$.post( "../php/validarNombre.php",{'x':''+validarUsuario+''},function( result ) {

			  	if (result=="existe") {
						$('#submitAgregarUsuario').attr('disabled','disabled');
						$("#validarUsuario").css({'color':'red'});
						$("#existe").css({'color':'red'});
						//document.getElementById('existe').innerHTML = "Este usuario ya existe.";
						document.getElementById('existe').innerHTML = "Usuario invalido.";
						
					}else{
						$('#submitAgregarUsuario').removeAttr('disabled','disabled');
						$("#validarUsuario").css({'color':'green'});
						$("#existe").css({'color':'green'});
						document.getElementById('existe').innerHTML = "Usuario: Valido.";

					}
				
			})
        }
        function validarNombreUsuarioUpdate(){
        
        	var validarUsuario = $("#validarUsuarioUpdate").val();
        	var idValidarUsuario = $("#idValidarUsuarioUpdate").val();

        	/*alert(validarUsuario);
        	alert(idValidarUsuario);*/
        	$.post( "../php/validarNombreUpdate.php",{'x':''+validarUsuario+'','y':idValidarUsuario},function( result ) {

        		//alert(result)
			  	if (result=="existe") {
						$('#submitAgregarUsuarioUpdate').attr('disabled','disabled');
						$("#validarUsuarioUpdate").css({'color':'red'});
						$("#existeUpdate").css({'color':'red'});
						//document.getElementById('existeUpdate').innerHTML = "Este usuario ya existe.";

						document.getElementById('existeUpdate').innerHTML = "Usuario invalido.";
						
					}else{
						$('#submitAgregarUsuarioUpdate').removeAttr('disabled','disabled');
						$("#validarUsuarioUpdate").css({'color':'green'});
						$("#existeUpdate").css({'color':'green'});
						document.getElementById('existeUpdate').innerHTML = "Usuario: Valido.";

					}
				
			})
        }
        //onkeypress="validando()" estaba en #validarusuario
       /* function validando(){
        	//alert("vaz bn");
        	var myVar1;
        	window.clearTimeout(myVar1);
        	myVar1 = setTimeout(validarNombreUsuario, 500);
        	//window.clearTimeout(myVar2);
        	//myVar2 = setTimeout(validarNombreUsuarioUpdate(), 2000);
        	
        }*/

       

        	$('#basicModal').modal(options);
    	</script>

	 <style>
		    body {
		        padding-top: 70px;
		        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
		    }
			@media print {
		  * { margin: 0 !important; padding: 0 !important; }
		  #controls, .footer, .footerarea{ display: none; }
		  html, body, h3,h2,h1 {
		    /*changing width to 100% causes huge overflow and wrap*/
		    height:100%; 
		    overflow: hidden;
		    background: #FFF; 
		    font-size: 9.5pt;
			padding-bottom: 15 !important;
		  }

		  .template { width: auto; left:0; top:0; }
		  img { width:50%; padding-bottom:50px !important }
		  #encabezado {width:100%;}	
		  li { margin: 0 0 10px 20px !important;}
		  #imprimir	{ display: none; }
		}
    </style>
</head>
<body>
	<?php 
		 $op = "1";
         //require_once ('headerD.php');
         require_once ('../header.php');
         
         
         
	?>
	<button>  </button>
	<!-- class boxlogin por mi para contenedores -->
	<div class="container">
				<h3>USUARIOS</h3>
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#ajustes" style="float:right;"><span class="glyphicon glyphicon-plus"></span> Agregar</button>
				<br><br><br>
		
		
		    
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
	    <div class="modal-dialog modal-md">
	    
		      <!-- Modal content-->
		    <div class="modal-content">
		        <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h3 class="modal-title">Agregar usuario.</h3>
		        </div>
		        <div class="modal-body">
					<!-- INSERT -->
					<form id="agregarUsuario" action="../php/insertarUsuario.php" method="post" >
						<div class="form-group">
							<h3><small id="existe">Usuario.</small></h3>
							<input id="validarUsuario" type="text" name="user"   class="form-control" maxlength="300" placeholder="Inserta tu usuario"
								pattern="[a-z*A-Z*0-9*]*"
							required
							/>
							<h3><small>Nombre.</small></h3>
							<input id="nombreUsuario" type="text" name="name" class="form-control" maxlength="300" placeholder="Inserta tu nombre"
								pattern="[a-z*A-Z*0-9*[ ]*]*"
							required
							/>
							<h3><small>Clave.</small></h3>
							<input id="passwordUsuario" type="text" name="password" class="form-control" maxlength="300" placeholder=" Inserta tu password"
							required
							/>
							<h3><small>Privilegio.</small></h3>
							<input id="nivelUsuario" type="text" name="level" class="form-control" maxlength="300" placeholder="Nivel: 1-3"
								pattern="[1-3]*"
							required
							/>
						</div>
					</form>
					<!-- Eliminar Usuario -->
					<!--form action="../php/eliminarUsuarios.php" method="post">
						<div class="form-group">
							<input type="text" name="id" class="form-control" placeholder="ID">
							<input type="submit" class="btn btn-danger" value="Eliminar Usuario" >
						</div>
					</form-->
		        </div>
		        <div class="modal-footer">
		         <input id="submitAgregarUsuario" type="submit" class="btn btn-primary" style="" value="Guardar" onClick="pAgregarUsuario()">
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
						<form id="guardarUpdatePrivilegios" action="../php/insertarPrivilegios.php" method="post">
							<input type="text" id="usuario" name="usuario" hidden>
							<div id="checks"></div>
							
							
						</form>
						
				    <div class="modal-footer">
				    	<input type="submit" class="btn btn-primary" onClick="pGuardarUpdatePrivilegios()" value="Guardar" >
				    </div>
				</div>
		    </div>
		</div>
	</div>
	<!-- MODAL ACTUALIZAR USUARIO -->
	<div class="modal fade" id="mUsuario" role="dialog">
	  <!-- SIZE -->
	    <div class="modal-dialog modal-lg">
	      <!-- Modal content-->
			<div class="modal-content">
			    <div class="modal-header">
			    	<button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Modificar usuario</h4>
					<!-- updateUser hace el cambio y actualizarUsuario muestra la lista -->
					<form id="actualizarUsuario" action="../php/updateUser.php" method="post">
						<div id="updateUser"></div>
						<br>
					</form>
						
					<form id="eliminarUsuario" name="sEliminarUsuario" action="../php/eliminarUsuarios.php" method="post">
						<div class="form-group">
							<input  type="text" id="usuarioAEliminar" name="usuario" hidden>
						</div>
					</form>
			    </div>
			    <div class="modal-footer">
			    		<input type="submit" class="btn btn-danger" style="float:right; margin:10px;" value="Eliminar Usuario" onClick="pEliminar()" >
						<input id="submitAgregarUsuarioUpdate" type="submit" class="btn btn-primary" style="float:right; margin:10px;" value="Actualizar" onClick="pActualizar()" >
					
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