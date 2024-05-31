		$(function() {
			load(1);
		});
		function load(page){
			var query=$("#q").val();
			var date=$("#date").val();
			var ttipo=$("#ttipo").val();
			var stats=$("#stats").val();
			var per_page=10;
			var parametros = {"action":"ajax","page":page,'query':query,'date':date,'ttipo':ttipo,'stats':stats,'per_page':per_page};
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'ajax/listar_registros.php',
				data: parametros,
				 beforeSend: function(objeto){
				$("#loader").html("Cargando...");
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$("#loader").html("");
				}
			})
		}
		$('#editregistroModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var folio = button.data('folio') 
		 // $('#edit_code').val(folio)
		  var tipo = button.data('tipo') 
		 // $('#edit_name').val(name)
		  var fecha = button.data('fecha') 

		 // $('#edit_category').val(category)
		  var reporte = button.data('reporte') 
		 // $('#edit_stock').val(stock)
		  var estatus = button.data('estatus') 
		 // $('#edit_price').val(price)
		  var id = button.data('id') 
		  $('#edit_id').val(id)
		  $('#datos_registro').val("FOLIO: "+folio+"  TIPO: "+tipo+"  FECHA: "+fecha+"  ST: "+estatus+"  NARRACION: "+reporte)

		})
		
	/*	$('#deleteProductModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('id') 
		  $('#delete_id').val(id)
		})
		*/
		
		$( "#edit_revision" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/actualizar_registro.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){

					$("#resultados").html(datos);
					/* setTimeout(function() {
    				$('#resultados').fadeOut('fast');
					}, 4000); */

					 $("#resultados").show();
					 $("#resultados").delay(5000).hide(600);
					load(1);
					$('#editregistroModal').modal('hide');
				  }
			});
		  event.preventDefault();
		});
		
		
		$( "#alta_registro" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/guardar_registro.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$("#ttipo").val("");
         			 $("#reporte").val("");
					$('#altaregistroModal').modal('hide');
					
					$("#usuario").val("");
					  $("#ctrol").val("");
         			  $("#name").val("");
         			  if ($("#usuario").val()=="") {
					    $("#interno").hide();
					    $("#externo").hide();
					   $("#Ir").hide();    
					   } 
         			  
				  }
			});
		  event.preventDefault();
		});
		



$( "#consultadeusuario" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/consulta_usuario.php",
					data: parametros,
					 beforeSend: function(objeto){
						//$("#resultados").html("Enviando...");
					  },
					success: function(datos){

					$("#conte-modal").html(datos);
					$('#bootstrap-modal').modal({show:true});
					load(1);
					//$('#editregistroModal').modal('hide');
				  }
			});
		  event.preventDefault();
		});



		/*


			$( "#consultadeusuario" ).submit(function( event ) {
		 	 var parametros = $(this).serialize();
		 	 	
			$.ajax({
					type: "POST",
					url: "ajax/consulta_usuario.php",
					data: parametros,
					 beforeSend: function(objeto){
						//$("#conte-modal").html("Enviando...");
						//$('#bootstrap-modal').modal({show:true});
					  },
					success: function(datos){

					$('#conte-modal').load('ajax/consulta_usuario.php', function() {
    				$('#bootstrap-modal').modal({show:true});
		});



		$( "#delete_product" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/eliminar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#deleteProductModal').modal('hide');
				  }
			});
		  event.preventDefault();
		});*/