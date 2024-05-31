

$('a.portfolio-link').live('click', function(){
	
	var id=$(this).attr('data');
	$.get('../mostrar_post.php',{id,id},
		function(post){	
		
		$('#contenedorPost').html('');
		$('#contenedorPost').append('<h2>'+post.titulo+'</h2>');
		$('#contenedorPost').append('<img class="img-responsive img-centered" src="../'+post.imagen+'" alt="">');
		$('#contenedorPost').append('<p>'+post.contenido+'</p>');
		$('#contenedorPost').append('<ul class="list-inline"><li>'+post.pie+' el '+post.fecha+'</li></ul>');
			
		}, 'json');
	
	
	
});