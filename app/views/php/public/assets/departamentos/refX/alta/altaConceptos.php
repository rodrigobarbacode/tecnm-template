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
		<!--link rel="stylesheet" href="../css/login.css"-->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!--link rel="stylesheet" href="../css/bootstrap-theme.min.css"-->
		<link rel="stylesheet" type="text/css" href="../css/signin.css">
	<title>SECRETARIA DE EDUCACION PUBLICA, LINEAS REFERENCIADAS DE DEPOSITO</title>
	<link rel="icon" href="../img/ico.png">
		<script src="../js/jquery-1.11.3.min.js"></script>

		<!-- DATATABLE CSS JS-->
		<link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.min.css"/>
   		<script src="../js/jquery.dataTables.js"/></script>
		<script type="text/javascript">
        $(document).ready(function () {
            $('#datatable').dataTable();
            $('#datatableConceptos').dataTable();

            //$('#submitAgregarConcepto').attr('disabled','disabled');
        	//$('#submitAgregarConceptoUpdate').attr('disabled','disabled');
        	$("#validarConcepto").keyup(function(){
	         	//alert("bien");
	         	//validarNombreUsuario();
	        	var myVar1;
	        	window.clearTimeout(myVar1);
	        	myVar1 = setTimeout(validarNombreConcepto(), 2000);
		    })
        });
        function reply_click(clicked_id){
        	//alert(clicked_id);

        	//validarNombreConcepto();
        	validarNombreConceptoUpdate();
        		document.getElementById("conceptoAEliminar").value=clicked_id;

	        	$.post( "../php/updatePrivileges.php", {'x':''+clicked_id+''},function( result ) {
						//document.getElementById('lPUsuario').innerHTML = result;
						document.getElementById('updatePrivilege').innerHTML = result;
				})
        }
    	function pAgregarConcepto(){
        	if(confirm("Desea agregar este concepto?")){
        		
        		document.getElementById("agregarConcepto").submit();
        	}else{
        		
        	}
        }
    	 function pActualizar(){
        	if(confirm("Desea actualizar este concepto?")){
        		
        		document.getElementById("actualizarConcepto").submit();
        	}else{
        		
        	}
        }
        function pEliminar(){
        	if(confirm("Desea eliminar este concepto?")){
        		
        		document.getElementById("eliminarConcepto").submit();
        	}else{
        		
        	}
        }
   document.onload = function()
   {
       document.getElementById('').onclick = function()
       {
           getTicket(1,'plan',1);
       }
   }
   // esaba en #validarConcepto -> onblur="validarNombreConcepto()"
   function validarNombreConcepto(){
        	var validarClaveConcepto = $("#validarConcepto").val();
        	
        	$.post( "../php/validarNombreConcepto.php",{'x':''+validarClaveConcepto+''},function( result ) {
        		//alert(result);
			  	if (result=="existe") {
						$('#submitAgregarConcepto').attr('disabled','disabled');
						$("#validarConcepto").css({'color':'red'});
						$("#existe").css({'color':'red'});
						//document.getElementById('existe').innerHTML = "Esta clave ya existe.";
						document.getElementById('existe').innerHTML = "Clave invalida.";
						
					}else{
						$('#submitAgregarConcepto').removeAttr('disabled','disabled');
						$("#validarConcepto").css({'color':'green'});
						$("#existe").css({'color':'green'});
						document.getElementById('existe').innerHTML = "Clave: Valida.";

					}
				
			})
        }
        function validarNombreConceptoUpdate(){

        	var validarClaveConceptoUpdate = $("#validarConceptoUpdate").val();
        	var idValidarClaveConceptoUpdate = $("#idValidarConceptoUpdate").val();
        	//alert(validarClaveConceptoUpdate+idValidarClaveConceptoUpdate);
        	//alert(idValidarClaveConceptoUpdate);
        	$.post( "../php/validarNombreConceptoUpdate.php",{'x':validarClaveConceptoUpdate,'y':idValidarClaveConceptoUpdate},function( result ) {
        		//alert(result);
        		
			  	if (result=="existe") {
						$('#submitAgregarConceptoUpdate').attr('disabled','disabled');
						$("#validarConceptoUpdate").css({'color':'red'});
						$("#existeUpdate").css({'color':'red'});
						//document.getElementById('existeUpdate').innerHTML = "Esta clave ya existe.";
						document.getElementById('existeUpdate').innerHTML = "Clave invalida.";
						
					}else{
						$('#submitAgregarConceptoUpdate').removeAttr('disabled','disabled');
						$("#validarConceptoUpdate").css({'color':'green'});
						$("#existeUpdate").css({'color':'green'});
						document.getElementById('existeUpdate').innerHTML = "Clave: Valida.";

					}
					
				
			})
        }
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
	<!-- class boxlogin por mi para contenedores -->
	<div class="container">
		<h3>CONCEPTOS</h3>
		<button style="float:right;" type="button" class="btn btn-success" data-toggle="modal" data-target="#popUpWindow"><span class="glyphicon glyphicon-plus"></span> Agregar</button>
		<br><br><br>
	</div>
	<!-- TABLAS CONCEPTOS -->
	<div class="container">
		<div class="table-responsive">
			<!-- table-responsive para el div que contiene table -->
				<?php include '../php/conectarConceptos.php';?>
        </div>
	</div>
	<!-- MODAL -->
	<div class="container">
		<div class="modal fade" id="popUpWindow">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<!-- header -->
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h3 class="modal-title">Agregar concepto.</h3>
					</div>
					
					<!-- body (form) -->
					<div class="modal-body">
						<!-- CONCEPTO Y MONTO pattern="[0-9]*"-->
						<form id="agregarConcepto" role="form" action="../php/insertarConcepto.php" method="post">
							<div class="form-group">
								<h3><small id="existe">Clave.</small></h3>
								<input id="validarConcepto" type="text" name="clave" class="form-control"  maxlength="300" placeholder="Inserta una clave numerica" title="Se necesita una clave numerica" 
									pattern="[0-9]*"
								required/>
								<h3><small>Concepto.</small></h3>
								<input type="text" name="concepto" class="form-control" maxlength="300" placeholder="Inserta un nombre" title="Se necesita un nombre"
									pattern="([A-Z]*[a-z]*[0-9]*[']*[ ]*)*"
								 required/>
								 <h3><small>Monto.</small></h3>
								<input type="text" name="monto"class="form-control" maxlength="300" placeholder=" Inserta un monto $" title="Solo numeros"
									pattern="([0-9]*[.]?[0-9]*)"
								 required/>
							</div>
						</form>
					</div>
					<div class="modal-footer">
			        	<input id="submitAgregarConcepto" type="submit" class="btn btn-primary" onclick="pAgregarConcepto()" value="Guardar" >
			        </div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="modal fade" id="updatePrivileges" role="dialog">
	  		<!-- SIZE -->
		    <div class="modal-dialog modal-md">
		      <!-- Modal content-->
				<div class="modal-content">
				    <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Modificar concepto</h4>
				    </div>
				    <div class="modal-body">
				    <!-- updatePrivilegesPresent.php y updatePrivilege hace el listado -->
						<form id="actualizarConcepto" action="../php/updatePrivilegesPresent.php" method="post">
							<div id="updatePrivilege"></div>
							
						</form>
						<form id="eliminarConcepto" action="../php/eliminarConceptos.php" method="post">
							<div class="form-group">
								<input type="text" id="conceptoAEliminar" name="concepto" hidden>
							</div>
						</form>
				    </div>
				    <div class="modal-footer">
				    	<input type="submit" class="btn btn-danger" style="float:right; margin:10px;" value="Eliminar Concepto" onclick="pEliminar()">
				    	<input id="submitAgregarConceptoUpdate" type="submit" class="btn btn-primary" style="float:right; margin:10px;" value="Actualizar" onclick="pActualizar()" >
				    </div>
				</div>
		    </div>
		</div>
	</div>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>