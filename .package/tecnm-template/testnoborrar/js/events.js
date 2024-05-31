$('#submit').live('click', function(){
	
	var user=$('#user').val();
	var contra=$('#password').val();

	$.post('login.php',{usuario:user, contrasena:contra},
		function(sesion){	
		
			if(sesion.status){
				
				window.location='index.php';
				
			}else{
					
				$('#mensaje').html('');
				$('#mensaje').html('Error no se pudo iniciar sesion, Usuario y/o contraseña incorrectos.');	
				
			}		
		}, 'json');
	
});

$('a.portfolio-link').live('click', function(){
	
	var id=$(this).attr('data');
	$.get('mostrar_post.php?id='+id,
		function(post){	
		
		$('#contenedorPost').html('');
		$('#contenedorPost').append('<h2>'+post.titulo+'</h2>');
		$('#contenedorPost').append('<img class="img-responsive img-centered" src="'+post.imagen+'" alt="">');
		$('#contenedorPost').append('<p>'+post.contenido+'</p>');
		$('#contenedorPost').append('<ul class="list-inline"><li>'+post.pie+'</li></ul>');
		$('#contenedorPost').append('<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar post</button>');
		
					
		}, 'json');
	
	
	
});

$('a.edit').live('click', function(){
	
	var id=$(this).attr('data');
	$.get('mostrar_post.php?id='+id,
		function(post){			
		$('#data').html('');
		$('#data').append('<input type="hidden" name="id" value="'+id+'">');
		$('#InputTitulo2').val(post.titulo);
		//$('#InputSubTitulo2').val(post.subtitulo);
		$('#previewActual').attr("data",id);
		$('#InputDescripcion2').val(post.contenido);
		$('#InputPie2').val(post.pie);
		$('#buttons').html('');
		$('#buttons').append('<input type="submit" id="edit" value="Actualizar" data="'+id+'" class="btn btn-primary btn-block">');
		$('#buttons').append('<input type="button" id="delete" value="Eliminar" data="'+id+'" class="btn btn-primary btn-block" style="background-color:red; border-color:red;">');
				
		}, 'json');
	
	
	
});

$('#delete').live('click', function(){

	if(confirm("¿En realidad desea eliminar este post?")){
		var id=$(this).attr('data');
		$.post('delete_post.php',{id:id},
		function(post){	
		
		window.location='index.php';
		
					
		}, 'json');
	}
	
	
	
	
	
});


$('a.openView').live('click', function(){
	
	var id=$(this).attr('data');
	$.get('mostrar_post.php?id='+id,
		function(post){	
		$('#previewActual').removeClass(' openView ');
		$('#previewActual').addClass('closeView');
		$('#previewImage').html('')
		$('#previewImage').append('<img class="img-responsive img-centered" src="'+post.imagen+'" alt="">');
		$('#previewActual').html('');
		$('#previewActual').append('Cerrar');
					
		}, 'json');
	
	
	
});

$('a.closeView ').live('click', function(){
	
	
		
		$('#previewImage').html('')
		$('#previewActual').removeClass(' closeView ');
		$('#previewActual').addClass('openView');
		$('#previewActual').html('');
		$('#previewActual').append('Ver Imagen Actual');
		
	
	
	
});
$('#vistaPrevia').live('click', function(){
	
	var id=$(this).attr('data');
	$.get('mostrar_post.php?id='+id,
		function(post){	
		
		$('#contenedorPost').html('');
		$('#contenedorPost').append('<h2>'+post.titulo+'</h2>');
		$('#contenedorPost').append('<img class="img-responsive img-centered" src="'+post.imagen+'" alt="">');
		$('#contenedorPost').append('<p>'+post.contenido+'</p>');
		$('#contenedorPost').append('<ul class="list-inline"><li>'+post.pie+'</li></ul>');
		$('#contenedorPost').append('<button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Cerrar post</button>');
		
		
		
		
		
		
					
		}, 'json');
	
	
	
});
