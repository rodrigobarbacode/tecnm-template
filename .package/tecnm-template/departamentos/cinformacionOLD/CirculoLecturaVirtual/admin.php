<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Panel de Administracion</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--j grod-->


    <!-- foundation fin  -->
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="/bootstrap/img/favicon.ico">
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">

 
   <script src="css/e/jquery.min.js"></script> <!-- 2.0.2 00>
   <!-- fin jquery verision -->
   <script src= "css/e/angular.min.js"></script> <!-- 1.3.14 -->
        <!-- bootstrap -->
		<!--<link href="css/bootstrap.min.css" rel="stylesheet"> -->
		  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		  
	<!-- 	<script src="js/bootstrap.min.js"></script> -->
	  <script type="text/javascript" src="css/e/bootstrap.min.js"></script>
		 <!-- fin bootstrap fin -->
		 
		 <!-- datepicker -->
 <script type='text/javascript' src="css/e/moment-with-locales.js"></script>
   <script type='text/javascript' src="css/e/bootstrap-datetimepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="css/e/bootstrap-datetimepicker.css">
		 <!-- datepicker fin -->
		 <script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
//$('#datetimepicker1').datetimepicker();
$('#datetimepicker2').datetimepicker({
	 format: 'DD/MM/YYYY'
});
});//]]>  

</script>

		<!-- extras -->
		<link rel="stylesheet" type="text/css" href="css/menuVertical.css">
		<link href="css/admin.css" rel="stylesheet">
		<script src="js/scripts.js"></script>
		<link href="css/styles.css" rel="stylesheet"><!-- theme -->
		<link rel="stylesheet" href="css/e/bootstrap-theme.min.css">
			<link href="css/e/font-awesome.min.css" rel="stylesheet">
			<link href="css/triangulos.css" rel="stylesheet">
			<!-- extras fin -->








        <!-- CSS code from Bootply.com editor -->
        
     <style type="text/css">


</style>
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body  >
        
        
<header class="navbar navbar-bright navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="img/logotec.png" width="31" height="43" style="float: left; margin-left: -50px; position:fixed;">
      <a href="#" class="navbar-brand glow" style="margin-left: 10px;">Panel de Administracion</a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li><a href="#">Como comenzar?</a></li>
        <li><a href="#">Asistente</a></li>
        <li><a href="#">Tutoriales</a></li>
        <li><a href="#">Glosario de Menu</a></li>
        <li><a href="index.php?cierra=1" id="cierraSesion">Cerrar Cesion</a></li>

      </ul>
    </nav>
  </div>
</header>

<div id="masthead">  
  <div class="container">
      <div class="row">
        <div class="col-md-6">
        <!--  <h1>Bootply
            <p class="lead">The easiest way to apply Bootstrap</p>
        </h1> -->
        </div>
        <div class="col-md-4">
            <div class="panel panel-body panel-default"> 
             Pagina Principal
            </div>
        </div>
      </div> 
  </div>
</div>

<!-- Begin Body -->
<!-- menu  fin-->


<!-- menu  fin-->

<div id="framecontent" class="">
<div class="innertube ">

           
<div class="nav-side-menu" >
    <div class="hederm"><center>Menu De Administracion</center></div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="#">
                  <i class="fa fa-dashboard fa-lg"></i> Inicio
                  </a>
                </li>

                <li  data-toggle="collapse" data-target="#usuarios" class="collapsed ">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> Administrar Usuarios <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="usuarios">
                    <li class="active"><a href="#">Mostrar Usuarios</a></li>
                    <li><a href="#">Registrar Usuario</a></li>
                    <li><a href="#">Modificar Usuarios</a></li>
                    <li><a href="#">Eliminar Usuarios</a></li>
              
                </ul>
                
                  <li  data-toggle="collapse" data-target="#grupos" class="collapsed ">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> Manejar Grupos <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="grupos">
                    <li class="active"><a href="#">Mostrar Grupos</a></li>
                    <li><a href="#">Agregar Grupos</a></li>
                    <li><a href="#">Modificar Grupos</a></li>
                    <li><a href="#">Eliminar Grupos</a></li>
              
                </ul>



     <li  data-toggle="collapse" data-target="#biblioteca" class="collapsed ">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> Biblioteca Virtual <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="biblioteca">
                    <li class="active"><a href="#">Manejar Categorias De Libros</a></li>
                    <li><a href="#">Manejar Libros</a></li>
                    <li><a href="#">Agregar Libro</a></li>
                    <li><a href="#">Modificar Libro</a></li>
                      <li><a href="#">Agregar Categorias</a></li>
                       <li><a href="#">Modificar Categorias</a></li>
              
                </ul>
                
         <li  data-toggle="collapse" data-target="#evalua" class="collapsed ">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> Evaluar Usuarios/Grupos<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="evalua">
                    <li class="active"><a href="#">Candidatos a Obtener Credito!</a></li>
                    <li><a href="#">Confirmar Libros Ganadores</a></li>
                    <li><a href="#">Evaluar Comentarios de Foros</a></li>
                    <li><a href="#">Evaluar Tareas De Grupos</a></li>
                    <li><a href="#">Seleccionar Mejores Lectores</a></li>
                    <li><a href="#">Modificar Categorias</a></li>
              
                </ul>        
                
            


                <li data-toggle="collapse" data-target="#eventos" class="collapsed">
                  <a href="#evento"><i class="fa fa-globe fa-lg"></i>Manejar Eventos<span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="eventos">
                  <li>Agregar Nuevo Evento</li>
                  <li>Modificar Evento</li>
                  <li>Eliminar Eventos</li>
                </ul>


                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="#"><i class="fa fa-car fa-lg"></i> Registros/Estadisticas<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="new">
                  <li>Registro de Actividad</li>
                  <li>Estadistica de Participacion</li>
                  <li>Estadistica de participacion por Carreras</li>
                </ul>


               <!--  <li>
                  <a href="#">
                  <i class="fa fa-user fa-lg"></i> Profile
                  </a>
                  </li>
-->
                
            </ul>
     </div>
</div>
                  	

</div>
</div>



<div id="maincontent" class="masthead" >
<div class="innertube ">

	<h2 id="sec0" class="masthead glow2s" style="padding: 15px;" >Panel de Inicio</h2>
                At Bootply we like to build simple Bootstrap templates that utilize the code Bootstap CSS without a lot of customization. Sure you can 
              	find a lot of Bootstrap themes and inspiration, but these templates tend to be heavy on customization.
              	
            
           
              	<hr class="col-md-12">
              	<div id="respuestaUsuarios"></div>
              	<a href="#" id="sistemas" >Sistemas</a>
              	<a href="#" id="otro" >Otro</a>
              	<script>
              		$( document ).ready(function() {
              	var carrera;
              	$( "#sistemas" ).click(function() {
                      // $( "#target" ).click();
                      carrera =  "mario alonso2";
                       $(document).hacerPost(carrera);
    
                 });
                 
                 
                 	$( "#otro" ).click(function() {
                      // $( "#target" ).click();
                      carrera =  2;
                      $(document).hacerPost(carrera);
                 });
                 
                 $.fn.hacerPost = function(carreraa) { //funcion para hacer Posts
                 //	alert(carrera);
                 $("#respuestaUsuarios").html("<center><img src='img/loading2.gif' width='50' heigth='50'></center>");
                 		var pagina = "controller/usuarioController.php";
              	//	var carrera = 1;
                        $.ajax({
                        	url:pagina,
                        	method:"post",
                        	data: { usuarios: "muestra", carrera: carreraa },
                        	cacha: false,
                        	success:function(data){
                        	$("#respuestaUsuarios").html(data);
                        		//alert(data);
                        	}
                        });
                 	 } 
              
              	
                });
              	</script>
              	
              
              
              	<h2 id="sec1">Content</h2>
              	<p>
                Rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut.
              	</p>
              	<div class="row">
                  <div class="col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-heading"><h3>Hello.</h3></div>
                      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                      Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                      dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                      Aliquam in felis sit amet augue.
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                      <div class="panel panel-default">
                      <div class="panel-heading"><h3>Hello.</h3></div>
                      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                      Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                      dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                      Aliquam in felis sit amet augue.
                      </div>
                    </div>
                  </div>  
              	</div>
              
              	<hr>
              
              	<h2 id="sec2">Section 2</h2>
              	<p>
                Rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut!
              	</p>
              	<div class="row">
              		<div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
                  	<div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
                  	<div class="col-md-4"><img src="//placehold.it/300x300" class="img-responsive"></div>
              	</div>
              
              	<hr>
              
              	<h2 id="sec3">Section 3</h2>
      			Images are responsive sed @mdo but sum are more fun peratis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
              
              	<h2 id="sec4">Section 4</h2>
      			Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae 
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia cor magni dolores 
                eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
                sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. 
                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
              
              
              	<hr>
           
              	<hr>
</div>
</div>
<div class="container">


	<div class="row">
  			<div class="col-md-3" id="leftCol" style="float: left; z-index: 88;" >
 
                  	
              <!--    	
              	<div class="nav nav-stacked azulfuerte" id="sidebar" style="border: 3px #5c97d6 dotted; padding: 14px;">
              		
              	
              		
              		
                    <a href="#sec0">
                  	<button type="button" class="btn btn-default btn-block" aria-label="Left Align">
                  	<span class="glyphicon glyphicon-align-left2" aria-hidden="true"> Pagina Principal</span></button>	
                  	</a><a href="#sec1"><button type="button" class="btn btn-default btn-block" aria-label="Left Align">
                  	<span class="glyphicon glyphicon-align-left2" aria-hidden="true"> Administrar Usuarios</span></button></a>
                  		</a><a href="#sec2"><button type="button" class="btn btn-default btn-block" aria-label="Left Align">
                  	<span class="glyphicon glyphicon-align-left2" aria-hidden="true"> Administrar Biblioteca</span></button></a>
                  		</a><a href="#sec3"><button type="button" class="btn btn-default btn-block" aria-label="Left Align">
                  	<span class="glyphicon glyphicon-align-left2" aria-hidden="true"> Administrar Grupos</span></button></a>
                  		</a><a href="#sec4"><button type="button" class="btn btn-default btn-block" aria-label="Left Align">
                  	<span class="glyphicon glyphicon-align-left2" aria-hidden="true"> Administrar Noticias</span></button></a>
                  
              
      		</div>  --></div>
      		<div class="col-md-9" id="mainCol" style="float: right; z-index: 87; position: fixed;">
              
              	<br>
              
              
              	
              	
      		</div> 
  	</div>
</div>





        <script type='text/javascript' src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>






        
        <!-- JavaScript jQuery code from Bootply.com editor  -->
        
        <script type='text/javascript'>
  
        $(document).ready(function() {
        
            $('#sidebar').affix({
      offset: {
        top: 100
      }
});

var $body   = $(document.body);
var navHeight = $('.navbar').outerHeight(true) + 10;

$body.scrollspy({
	target: '#leftCol',
	offset: navHeight
});
        
        });
      
        </script>
        
        <script>
      
      
      
$(document).ready(function() {
/**if ((screen.width>=1024) && (screen.height>=768)) {
alert('Resolucion: 1024x768 o mayor');
$("link[rel=stylesheet]:not(:first)").attr({href : "detect1024.css"});
}
else  {
alert('Resolucion: Menos de 1024x768, a lo mejor es 800x600');
$("link[rel=stylesheet]:not(:first)").attr({href : "detect800.css"});
}**/


$( window ).resize(function() {
  //$( "body" ).prepend( "<div>" + $( window ).width() + "</div>" );
});
});
      
      
      
      
        </script>
        
            <div id="cierra"> 
      </div>
      
            <?php 
      if(isset($_GET['cierra'])){
        if($_GET['cierra']==1){
          session_destroy();
          ?>
          <script>
          history.back();
          </script>
          <?php
        }
      }
      ?>
<script>



 $(document).ready(function() {

$( "#cierraSesion" ).click(function() {
  $("#cierra").load("cierra.php");
  // location.reload();
  // location.back();
  //history.back();
});
</script>
    </body>
</html>