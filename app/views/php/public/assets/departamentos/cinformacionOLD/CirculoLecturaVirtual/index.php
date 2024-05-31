<?php 
include("../funciones/login.php");
session_start();
//compruebo que el usuario este autentificado

  ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="generator" content="C" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta charset="utf-8">
		<title>
    <?php
	  
		 if(isset($_SESSION['k_se'])) {
      echo $user = $_SESSION['k_se'];
    }
		?>
     <?php
    
     if(isset($_SESSION['k_id'])) {
      echo $iduser = $_SESSION['k_id'];
    }
    ?>
    <?php
    
     if(isset($_SESSION['k_idu'])) {
      echo $nom = $_SESSION['k_idu'];
    }
    ?>
 <?php
    
     if(isset($_SESSION['k_nom'])) {
      echo $nom = $_SESSION['k_nom'];
    }
    ?>
     

  			Circulo de Lectura Virtual
    </title><!-- 
   <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		 -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

    <link rel='stylesheet' href='css/e/normalize.css'>
		<link rel="stylesheet" type="text/css" href="css/e/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/e/bootstrap-datetimepicker.css">
    <link href="css/registro.css" rel="stylesheet">
    <link href="css/principal.css" rel="stylesheet">
    <link rel="stylesheet" href="css/e/bootstrap-theme.min.css">
    <link href="css/font/css/font-awesome.css" rel="stylesheet" media="screen">
    <link href="css/triangulos.css" rel="stylesheet">

    <script src="js/scripts.js"></script>
	  <script src='css/e/angular.min.js'></script>
    <script src="css/e/jquery.min.js"></script>
    <script type="text/javascript" src="css/e/bootstrap.min.js"></script>
		<script type='text/javascript' src="css/e/moment-with-locales.js"></script>
    <script type='text/javascript' src="css/e/bootstrap-datetimepicker.js"></script>
    <script type='text/javascript'>//<![CDATA[ 

    $(window).load(function(){
//$('#datetimepicker1').datetimepicker();
$('#datetimepicker2').datetimepicker({
	 format: 'DD/MM/YYYY'
});
});//]]>  

    </script>

		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	
	</head>
	<body>
<nav class="navbar navbar-trans navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" class="glow" ><label class="glow">CLV</a>
    </div>
    <div class="navbar-collapse collapse" id="navbar-collapsible">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="#section1">Inicio</a></li>
        <li><a href="#section2">Grupos Abiertos</a></li>
        <li><a href="#section3">Ultimos Libros</a></li>
        <li><a href="#section4">Noticias</a></li>
        <li><a href="#section5">Destacados</a></li>
        <li><a href="#section6">Contacto</a></li>
        <li>&nbsp;</li>
      </ul>
      <form class="navbar-form">
        <div class="form-group" style="display:inline;">
          <div class="input-group"> 
            <div class="input-group-btn">
<!--              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user">Busca en Biblioteca</span></button>
     -->        <!-- <ul class="dropdown-menu">
                <li><a href="#">Category 1</a></li>
                <li><a href="#">Category 2</a></li>
                <li><a href="#">Category 3</a></li>
                <li><a href="#">Category 4</a></li>
                <li><a href="#">Category 5</a></li> 
          </ul> -->
       

<?php 
if(!isset($_SESSION['k_se'])){
	echo '<button type="button" class="btn btn-warning "  data-toggle="modal" data-target=".accesoUsuarios">  <span class="glyphicon glyphicon-user"></span> Acceder</button>
';

}else{
  echo '<div class="btn-group">
  <button type="button" class="btn btn-warning">'.$user.'</button>
  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="biblioteca.php">Biblioteca</a></li>
    <li><a href="http://www.itmexicali.edu.mx/">ITM</a></li>
    <li><a href="http://www.itmexicali.edu.mx/">Centro de Informacion</a></li>
    <li class="divider"></li>
    <li><a href="index.php?cierra=1" id="cierraSesion">Cerrar Sesion</a></li>
  </ul>
</div>';
}

?>

<script>

$('#dale').submit(function() {

    return confirm('Are you sure you want to search Google?');
});
/**
    $(document).ready(function(){/* activate scrollspy menu 

	
		$("#loginForm2").submit(function( event ) {
       var datos =  $("#loginForm :input").serialize();
       alert(datos);
     //** alert(datos); **
      $("#loginrespuesta").html("<center><img src='img/loading2.gif' width='50' heigth='50'></center>");
      // var curl = "view/index_validarRegistro.php";
          
        $.ajax({// Falta validar espacios vacios y caracteres especiales en password y otros post
        	url: curl,
        	data: {usuario:$("#usuario")val() , pass: $("#password").val() , login:"login" },
        	method:"post",
        	cache: false,
        	context:this,
        	success: function(data){
        		//$("#loginrespuesta").html(data);
          	
        alert(data);
        		//return false;
        	}
        });
     
   //
 
    });
});**/
 </script>
    
          </div>
        </div>
      </form>
    </div>
  </div>
</nav>

<section class="container-fluid " id="section1">

	<center><img src="img/logotec.png" height="160"/></center>
  	<h2 class="text-center  v-center glow">Circulo de Lectura Virtual</h2>

  

 	
  	<div class="container "  style=" border-radius: 40px;">
  		
      <div class="row">
          <div class="col-sm-4">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-2 text-center hidden-xs">
              <h3 class="glow">Biblioteca Virtual</h3>
              
   <!--  <img src="img/clv.png"> -->
  
   Catalogo de libros en linea del Instituto Tecnologico de Mexicali (Ultimos 4 Libros)
  <div class="books hidden-xs" style="margin-top: 9px;">

   <a href="http://cazdo.com" target="_blank">
   <img src="img/20favorite-book-covers-slide-ORTM-slide.jpg"></a>
  
  <img src="img/20favorite-book-covers-slide-DQPY-slide.jpg">
  
  <img src="img/20favorite-book-covers-slide-QNUF-slide.jpg">
  
  <img src="img/20favorite-book-covers-slide-U60O-slide.jpg">
  
  <div class="shelf"></div>
  
</div>
              	<!-- <i class="fa fa-cog fa-5x"></i> -->
                </div>
            </div>
          </div>
          <div class="col-sm-4 text-center">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1 text-center cuadrito2 ">


              <div class="hidden-xs">
              <h3 class="glow">Registrate en un Grupo </h3>
              	
              	<!-- Large modal -->


              	<p>Cada semestre se abriran nuevos grupos de lectura en linea aqui puedes registrarte y adquirir
              		un credito complementario al finalizar una sesion de grupo participando en foros de lectura entre otras
              		actividades.</p>
                  </div>
              <!--	<i class="fa fa-user fa-5x"></i> -->
                  <img src="img/man.png"  width="60" >
                  <br>
                  <br>

                  <?php 
if(!isset($_SESSION['k_nom'])){
  echo ' <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target=".bs-example-modal-lg">(Click)Para Registrarte Aqui</button>';

}else{
  echo ' <button type="button" class="btn btn-warning btn-lg" data-target=".bs-example-modal-lg"> Bienvenido '.$nom.'</button>';
}

?>
            
        

              	</div>
            </div>
          </div>
          <div class="col-sm-4 text-center hidden-xs">
            <div class="row">
              <div   class="col-sm-10 text-center cuadrito box  "><h3 class="glow">Mejores Lectores</h3>
              	
              	<p>Seccion donde se mostraran a los mejores lectores	</p>
              	<img src="img/best.png" >
              	<!-- <i class="fa fa-mobile fa-5x"></i> --></div>
            </div>
          </div>
      </div><!--/row-->
    <div class="row"><br></div>
  </div><!--/container-->
</section>


<section class="container" id="section2">
<br>
<br>
<br>
	<center><h3 class="text-scenteras glow" style="color: #ffffff; margin-top: -45px;">Ultimos Grupos Creados!</h3></center>
    <div class="row">
    
<!--
<div id="box1" class="box blurred-bg tinted mibox">
  <div class="content" id="bluet">
   	<p>Drag this box to move around</p>
    <p class="related">See also: <a href="http://codepen.io/ariona/pen/JopOOr/" target="_blank">3D hover plane effect with CSS3 transform</a></p>  
  </div>
</div>
-->

<br>
<br>
      <div id="muestagrupos"></div>
      <script>
        $(document).ready(function(){/* activate scrollspy menu */
       	$(document).ready( function() {
    $('#myCarousel').carousel({
		interval:   4000
	});
	
	var clickEvent = false;
	$('#myCarousel').on('click', '.nav a', function() {
			clickEvent = true;
			$('.nav li').removeClass('active');
			$(this).parent().addClass('active');		
	}).on('slid.bs.carousel', function(e) {
		if(!clickEvent) {
			var count = $('.nav').children().length -1;
			var current = $('.nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));
			if(count == id) {
				$('.nav li').first().addClass('active');	
			}
		}
		clickEvent = false;
	});
});
       	
            mostrarGrupos("allgrupos","#muestagrupos");
});
    
    
     function mostrarGrupos(tipo,on) {
 	    var ima="";
 	
     	var jsondatos = "controller/grupoController.php?"+tipo; // allgrupos
        $.getJSON(jsondatos, function(data) {
        	
            var html = '';    var libro = '';
         var wi = $( window ).width(); var max;
              if(wi<=1024){
               max=7;
                }else{ 
                max=9
              }
            $.each(data, function(i, r) {
            	if(r.img==""){
            		ima="img/cover.png";
            	}else{
            		ima="up/"+r.img;
            	}
            	 if(i>max) return false;
  //Url de Grupos : http://localhost/CirculoLecturaVirtual/view/Grupos.php?url=
  //Url de Grupos json :http://localhost/CirculoLecturaVirtual/controller/grupoController.php?g=
  libro = ' <div align="center" > <figure class="book">  '+      
       ' <ul class="hardcover_front"> <li><img src="'+ima+'" alt="" width="100%" height="100%"></li>'+
       '   <li></li> </ul><ul class="page">'+
        '  <li></li> <li><br><br><br><a class="btn btn-warning" href="Grupos.php?url='+r.id+'">Entrar</a> </li>  <li></li> <li></li><li></li>'+
        '</ul><ul class="hardcover_back"><li></li><li></li> </ul> <ul class="book_spine"><li></li> <li></li> </ul>'+
        '<figcaption>'+
        
        '</figcaption>  </figure></li> </ul>  </div> </div> '+
       '';
            	html = '<div id="box1" class="box blurred-bg tinted mibox glow"> <br>'+
                       '<div class="content" id="bluet">'+libro+' '+r.nombre+'<br>'+r.creado+''+
   					  '</div></div>'+
                      	'';
            	       $(on).append(html);
                
            });
      
        });
    }

      </script>
     <div>
  </div>
</section>

<section class="container-fluid" id="section3">
<br>
<br>
<br>
	<h3 class="text-center glow" style="margin-top: -55px;">Ultimos Libros Agregados</h3>
    <div class="row">
    <div class="col-xs-6">
    	
    	 
     <div class="librog" style="color:#000000; padding: 30px;">       	
<div  id="librosCSS"  ng-app="MyApp"  ng-controller="PostsCtrl">
  <input type="text" id="query" ng-model="query" placeholder="Buscar Libro" />
  <!--<select ng-model="orderList">
    <option value="titulo">Titulo</option>
    <option value="-registado">Newest</option>
    <option value="registrado">Oldest</option>
  </select> -->
  <ul id="book_ul">
    <li ng-animate="'animate'"   onclick="dale({{post.id}},'{{post.titulo}}','{{post.img}}');"  id="libroS{{post.id}}" ng-repeat="post in posts | filter:query  ">
      nombre: {{post.titulo}}<br/>
      <input id="libroS{{post.id}}" type="hidden" value="{{post.id}}">
      Fecha: {{post.registrado}}<br/>
      <div ng-if="post.img != ''">
    <!-- code to render a large video block-->
     <img src="up/{{post.img}}"  height="170"   style="border: 1px #000000 dotted;max-width: 200px;min-width: 100px;">
       </div> 
      <div ng-if="post.img == ''">
    <!-- code to render a large video block-->
     <img src="img/book.png"  height="170"   style="border: 1px #000000 dotted;max-width: 200px;min-width: 100px;">
       </div>        
        
      <div class="right top">{{post.age}}</div>
     
    </li>
  </ul>
  <span>
  <div id="libroagregado" style="font-size: 15px;">Tenemos un total de: {{posts.length}} Libros Electronicos</div></span>
</div>
</div> 
    	
    </div> <div class="col-xs-6"><!-- contenido derecha --></div>
   
<div id="respuesta">	
</div>
<!--<input  type="text" id="asignalibro" value="" name="libroseleccionado">
 -->   <script> 
  function dale(arg,titulo,img){
  	 $.jStorage.set('libro', titulo);
                          
  	if(img==""){
  		  	$("#libroagregado").html("<img src='img/book.png' height='120'> Seleccionaste el libro el libro:("+titulo+")");
  	}else{
  		  	$("#libroagregado").html("<img src='up/"+img+"' height='120'> Seleccionaste el libro el libro:("+titulo+")");
  	}
  	$("#asignalibro").val(arg);
  	$( "#libroagregado" ).removeClass( "step-error" );

  	$( "#libroagregado" ).addClass( "successlibro" ); //step-error
  	//$("#respuesta").html(arg+" Seleccionaste el libro "+titulo +" <img src='up/"+img+"'>");
  }
  
   </script>




<script>
var app = angular.module('MyApp', []);
app.controller('PostsCtrl', function ($scope, $http) {
    $http.get('controller/bibliotecaController.php?libros=libros').success(function (data) {
        $scope.posts = data;
        $scope.random = function () {
            return 0.5 - Math.random();
        };
    }).error(function (data) {
    });
});
</script>
    
    
   </div>
</section>

<section class="container-fluid" id="section4"> 
	<h2 class="text-center glow">Ultimas Noticias</h2>
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/not1.png" alt="Chania">
    </div>

   
    <div class="item">
     <img src="img/not3.png" alt="Chania">
    </div>

    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Despues</span>
  </a>
</div>
      </div>
    </div>
</section>

<section class="container-fluid" id="section5" >
<br>
<br>
 <div class="col-sm-10 col-sm-offset-2">
   <!-- 
      <div class="col-sm-4 col-xs-12">
            <div class="list-group " style="color:#000000;">
              <a href="#" class="list-group-item active">
                <h3 class="list-group-item-heading text-center glow "> Mejores Lectores</h3>
                <h6 class="text-center" > Aqui una lista de mejores lectores</h6>
              </a>
              <a href="#" class="list-group-item">
                <p style="color:#000000;">Nombre usuario destacado</p>
              </a>
                  <a href="#" class="list-group-item">
                <p style="color:#000000;">Nombre usuario destacado</p>
              </a>
                  <a href="#" class="list-group-item">
                <p style="color:#000000;">Nombre usuario destacado</p>
              </a>
                  <a href="#" class="list-group-item">
                <p style="color:#000000;">Nombre usuario destacado</p>
              </a>
                  <a href="#" class="list-group-item">
                <p style="color:#000000;">Nombre usuario destacado</p>
              </a>
                  <a href="#" class="list-group-item">
                <p style="color:#000000;">Nombre usuario destacado</p>
              </a>
             
              <a href="#" class="list-group-item">
               
              </a>
            </div>
      </div><!--/left-->
<!--  SELECT CONCAT(`cv_Usuario`.`nombre`,` ` ,`cv_Usuario`.`apellido`) FROM `cv_Comentario`
INNER JOIN `cv_Usuario` ON `cv_Usuario`.`idUsuario`= `cv_Comentario`.`idUsuario`
ORDER BY `cv_Comentario`.`idComentario` DESC
LIMIT 0 , 30 -->

      <div class="col-sm-5 col-xs-12">
            <div class="list-group " style="color:#000000;">
              <a class="list-group-item active">
                <h3 class="list-group-item-heading text-center glow"> Mas Participativos</h3>
                <h6 class="text-center" >Usuarios han trabajo ms en una sesion</h6>
              </a>
              <?php 
$con = mysql_connect("localhost", "biblioteca", "biblioteca2015");
mysql_select_db("circulo", $con);
$sql    = mysql_query("SELECT  UPPER(CONCAT(u.nombre,' ', u.apellido)) as Nom FROM cv_Comentario as c  INNER JOIN cv_Usuario as u on c.idUsuario=u.idUsuario ORDER BY c.idComentario DESC
LIMIT 0 , 6",$con);

while($row = mysql_fetch_array($sql)){

echo '<a class="list-group-item"><p style="color:#000000;">'.$row['Nom'].'</p></a>';

}
?>
  <!--    SELECT UPPER( CONCAT( u.nombre, ' ', u.apellido ) ) AS Nom, count( c.idUsuario ) AS total
FROM cv_Comentario AS c
INNER JOIN cv_Usuario AS u ON c.idUsuario = u.idUsuario
GROUP BY Nom
ORDER BY c.idUsuario DESC
LIMIT 0 , 6  -->     
            </div>
      </div><!--/left-->
      
         <div class="col-sm-5 col-xs-12">
            <div class="list-group " style="color:#000000;">
              <a href="#" class="list-group-item active">
                <h3 class="list-group-item-heading text-center  glow ">Mejor comentario</h3>
                <h6 class="text-center" >El comentario con mas votos en una sesion</h6>
              </a>
         <?php 
$con = mysql_connect("localhost", "biblioteca", "biblioteca2015");
mysql_select_db("circulo", $con);
$sql    = mysql_query("SELECT  UPPER(CONCAT(u.nombre,' ', u.apellido)) as Nom FROM cv_Comentario as c  INNER JOIN cv_Usuario as u on c.idUsuario=u.idUsuario ORDER BY c.idComentario  ASC 
LIMIT 0 , 6",$con);

while($row = mysql_fetch_array($sql)){

echo '<a class="list-group-item"><p style="color:#000000;">'.$row['Nom'].'</p></a>';

}
?>    
            </div>
      </div><!--/left-->
      

  </div>
</section>

<section class="container-fluid" id="section6">
	<h2 class="text-center glow ">Contacto</h2>
    <p class="text-center lead"></p>
    <img src="img/man.png" class="img-responsive center-block">
   
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Centro de Informacion</h2>
                    <hr class="primary">
                    <h4>
                    <p> Lic. Socorro Sánchez Aguiar </p>
                    <p>Jefa del Centro de Información</p>
                    </h4>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>01-686-5804922</p>


                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">cinformaciónitmexicali.edu.mx</a></p>
                </div>
            </div>
        </div>
   
    
</section>
<!-- Iconos de Tec o Face Etc. -->
<section class="container" id="section7">
	<h1 class="text-center"></h1>
    <div class="row">

  </div>
</section>

		</body>
		
		<!-- registro -->
		
		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="panel panel-primary">
         <div class="panel-heading">Registro nuevo en Circulo de Lectura Virtual</div>
            <div class="panel-body">
                 <div id="respuesta1"></div>
             
             
             	<form class='form-horizontal' action="controller/registroController.php"   method="post" role='form' name="registroForm" id="registroForm"> 
				<div class='form-group'>
					<label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Carrera y No.Control</label>
					<div class='col-md-8'>
            <div class='col-md-5 indent-small'>
            <div class='form-group internal '>
						<select class='form-control' id='carrera' name="carrera">
							<option value="1">Ing. Industrial</option>
							<option value="2">Ing. Logística</option>
							<option value="3">Ing. Mecatrónica</option>
							<option value="4">Ing. Mecánica</option>
							<option value="5">Ing. Sistemas Computacionales</option>
							<option value="6">Ing. Gestión Empresarial</option>
							<option value="7">Ing. Informática</option>
							<option value="8">Ing. Informática</option>
							<option value="9">Ing. Informática</option>
							<option value="10">Ing. Energías Renovables</option>
							<option value="11">Ing. Electrónica</option>
							<option value="12">Ing. Química</option>
							<option value="13">Contador Público</option>
							<option value="14">Ing. Eléctrica</option>
              </select>

            </div>
           </div>
					
					<div class='col-md-3 indent-small'>
						<div class='form-group internal '>
							<input class='form-control' id='ncontrol' name="ncontrol" placeholder='No. Control' type='text' required>
						</div>
					 </div>
</div>

				</div>

				<div class='form-group'>
					<label class='control-label col-md-2 col-md-offset-2' for='id_title'>Nombre</label>
					<div class='col-md-8'>

						<div class='col-md-3 indent-small'>
							<div class='form-group internal'>
								<input class='form-control' id='nombre' name="nombre" placeholder='Nombres' type='text' required>
							</div>
						</div>

						<div class='col-md-3 indent-small'>
							<div class='form-group internal'>
								<input class='form-control' id='apellido' name="apellido" placeholder='Apellido Paterno' type='text' required>
							</div>
						</div>

						<div class='col-md-3 indent-small'>
							<div class='form-group internal'>
								<input class='form-control' id='apellido2' name="apellido2" placeholder='Apellido Materno' type='text' required>
							</div>
						</div>

					</div>
				</div>

				<div class='form-group'>
					<label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Edad/Semestre</label>
					<div class='col-md-8'>
						<div class='col-md-2 indent-small'>
							<div class='form-group internal'>
								<input class='form-control col-md-8' id='edad' name="edad" placeholder='Edad' type='number'  required>
							</div>
						</div>

						<div class='col-md-4 indent-small'>
							<div class='form-group internal'>
								<input class='form-control col-md-8' id='semestre' name="semestre" placeholder='Semestre en Curso' type='number'  required>
							</div>
						</div>
				
					</div>
				</div>

				<div class='form-group'>
					<label class='control-label col-md-2 col-md-offset-2' for='id_email'>Correo/Usuario</label>
					<div class='col-md-8'>

            <div class='col-md-8  indent-small'>
						<div class='form-group  '>
								<input class='form-control' id='email'  name="email" placeholder='E-mail (Correo Electronico)' type='email'  required>
						</div>
						</div>
        </div>
        </div>
        
        <div class='form-group'>
        <label class='control-label col-md-2 col-md-offset-2' for='id_email'>Contraseña</label>
          
         <div class='col-md-8'>
            <div class='col-md-6  indent-small'>
						<div class='form-group internal '>
					    <input class='form-control' id='pw'  name="pw" placeholder='Contraseña (Minimo 7 caracteres)' type='password'  required>
						</div>
						</div>

            <div class='col-md-4  indent-small'>
						<div class='form-group internal'>
								<input class='form-control' id='pw2'name="pw2"  placeholder='Repita su Contraseña' type='password' required>
            </div>
						</div>
        </div>
				</div>
				

				<div class='form-group'>
					<label class='control-label col-md-2 col-md-offset-2' for='id_checkin'>Fecha Nacimiento</label>
					<div class='col-md-8'>
						<div class='col-md-3'>
							
        <input type="text" name="fechaN"  class="form-control" id="datetimepicker2"  required />
			
						</div>

					</div>
				</div>

				<div class='form-group'>
					<div class='col-md-offset-4 col-md-3'>
						<input type="submit"  class="btn btn-lg btn-primary btn-block" value="Registrarme"/>
					</div>
					<div class='col-md-3'>
						<!--   <button class='btn-lg btn-danger' style='float:right' type='submit'>Cancel</button> -->
					</div>
				</div>
			</form>
			
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
 	
 	  var sc = $( window ).width();
if(sc<=1024){ 
$("#navacces").html('<button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target=".accederNav">  <span class="glyphicon glyphicon-user"></span> Acceder</button>');
}


 	$( "#registroForm" ).submit(function( event ) {
       var datos =  $("#registroForm :input").serialize();
      // alert(datos);
     // alert(datos);
      $("#respuesta1").html("<center><img src='img/loading2.gif' width='50' heigth='50'></center>");
       var curl = "view/index_validarRegistro.php";
       
        $.ajax({// Falta validar espacios vacios y caracteres especiales en password y otros post
        	url: curl,
        	data: datos,
        	method:"post",
        	cache: false,
        	context:this,
        	success: function(data){
        		//$("#respuesta1").html(data);
        		if(data==1){
        			$("#respuesta1").html("");
        			//alert('submit');
        		//	this.submit();
        			var thepost = "controller/registroController.php";
        			$.ajax({
        				url: thepost,
        				data:datos,
        				method:"post",
        				cacha: false,
        				success:function(data){
        					//alert("asa");
        					$("#respuesta1").html("Registro Con Exito!");
        				}
        			});
        			
        		}
        		else{
              		$("#respuesta").html('<div class="alert alert-danger" role="alert"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>'+data+'</div>');
        		}
        		return false;
        	}
        });
       return false;
 
    });
});
 	
 

</script>

           </div>
    </div>
      
    </div>
  </div>
</div>
		
		<!-- regditro fin -->
  
  
		<!-- acces-->
		
		<div class="modal fade accesoUsuarios" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <div class="panel panel-primary">
         <div class="panel-heading">Acceso a usuarios</div>
            <div class="panel-body">
            
			
<form   class='navbar-form navbar-left' action="controller/usuarioController.php"   name="dale" role='form' id="dale">
     <input type="text"  name="usuario"  id="usuario" class="form-control" placeholder="Usuario" required> 
     <input type="password" name="password"  id="password" class="form-control" placeholder="Password" required> 
     <input type="submit" class="btn btn-warning"  value="Acceder">

</form>
<div id="loginrespuesta" > </div>
<script>
$('#dale').submit(function() {
     
   //  alert("s");
      $("#loginrespuesta").html("<center><img src='img/loading2.gif' width='50' heigth='50'></center>");
       var curl = "controller/usuarioController.php";
          
        $.ajax({// Falta validar espacios vacios y caracteres especiales en password y otros post
        	url: curl,
        	data: {usuario:$("#usuario").val() , pass: $("#password").val() , login:"login" },
        	method:"post",
        	cache: false,
        	context:this,
        	success: function(data){
        		//alert(data);
        		//$("#loginrespuesta").html(data);
        		//$("#loginrespuesta").html(data);
          if(data==1){
          	//$("#loginrespuesta").html(data);
       	// alert("Ok");
       // location.reload();

         window.location.href = 'biblioteca.php';
              // alert("CAMBIO");
             
          }else{
          	$("#loginrespuesta").html('<div class="alert alert-danger" role="alert">'+
 '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>'+
 '<span class="sr-only">Error:Los datos no son correctos</span>'+
 'Los datos no son correctos</div>');
 	//$("#loginrespuesta").html(data);
          }
        		return false;
        	}
        });
     
     return false;
     
});

</script>


           </div>
    </div>
      
    </div>
  </div>
</div>
		
		<!-- acces-->
  
  <!-- Jquery UI -->

  <link rel="stylesheet" href="/resources/demos/style.css">
  
  
  <!--ui -->
	</body>
</html>
