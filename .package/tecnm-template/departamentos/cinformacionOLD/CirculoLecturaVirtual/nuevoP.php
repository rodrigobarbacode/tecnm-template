<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Panel de Administracion</title>
  

  <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>


  
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">

 
   <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
   <!-- fin jquery verision -->
   <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
        <!-- bootstrap -->
		<!--<link href="css/bootstrap.min.css" rel="stylesheet"> -->
		  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		  
		<script src="js/bootstrap.min.js"></script> 
<!--	  <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		 <!-- fin bootstrap fin -->
		 <!-- wizrard -->
	<!-- Include Bootstrap Wizard -->
<script src="js/jFormslider.js"></script>

		 <!-- wizard fin -->
		 <!-- datepicker -->
 <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
   <script type='text/javascript' src="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/d004434a5ff76e7b97c8b07c01f34ca69e635d97/src/js/bootstrap-datetimepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/d004434a5ff76e7b97c8b07c01f34ca69e635d97/build/css/bootstrap-datetimepicker.css">
		 <!-- datepicker fin -->
		 <script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
//$('#datetimepicker1').datetimepicker();
$('#datetimepicker2').datetimepicker({
	 format: 'DD/MM/YYYY'
});
});//]]>  

</script>


<style>
.negroFondo{
	background: #aebcbf; /* Old browsers */
background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%); /* IE10+ */
background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 ); /* IE6-9 */

}
	/* Post Table */
.info-table {
    border-spacing: 0;
    border-collapse: separate;
    width: 100%;
    color: #314351;
    font-size: 0.857em;
    line-height: 1em;
    margin-bottom: 17px;
    font-family: "Arial",sans-serif;
}
.info-table a {
 
}
.info-table a:hover {

}
.info-table th, .info-table td {
    border: 1px solid #BCBABA;
    border-top-color: #FFF;
    border-right: none;
    padding: 8px 20px 8px 23px;
    text-align: left;
    vertical-align: middle;
    background: #EEE;
    margin: 0;
}

.info-table th {
background: #aebcbf; /* Old browsers */
background: -moz-linear-gradient(top,  #aebcbf 0%, #6e7774 50%, #0a0e0a 51%, #0a0809 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aebcbf), color-stop(50%,#6e7774), color-stop(51%,#0a0e0a), color-stop(100%,#0a0809)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%); /* IE10+ */
background: linear-gradient(to bottom,  #aebcbf 0%,#6e7774 50%,#0a0e0a 51%,#0a0809 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#aebcbf', endColorstr='#0a0809',GradientType=0 ); /* IE6-9 */

    text-align: left;
    font-size: 13px;
    line-height: 1.538em;
    padding: 6px 20px 5px 23px;
    color: #ffffff;
  /** text-shadow: 0px 0px 1px rgba(0, 81, 168, 0.38); **/
    border-color: #cccccc;
  
}

.info-table th:last-child {
    border-right: 1px solid #BCBABA;
    text-align: center;
}

.info-table td.last, .info-table td:last-child {
    border-right: 1px solid #C2CAD0;
}

.info-table .even td, .info-table tr:nth-child(even) td {
    background: #ffffff;
}
</style>


		<!-- extras -->
		<link rel="stylesheet" type="text/css" href="css/menuVertical.css">
		<link href="css/admin.css" rel="stylesheet">
		<script src="js/scripts.js"></script>
		<link href="css/styles.css" rel="stylesheet"><!-- theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
			<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
			<!-- <link href="css/triangulos.css" rel="stylesheet">
			<!-- extras fin -->






  
<!-- <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">



  
  <link rel="stylesheet" type="text/css" href="/css/result-light.css">
  
    
      <link rel="stylesheet" type="text/css" href="https://rawgit.com/wenzhixin/bootstrap-table/master/src/bootstrap-table.css">
    
  
    
      <script type='text/javascript' src="js/bootstrap-table.js"></script>
    
  
  <style type='text/css'>
    
  </style>
  
</head>
<body>
	
        
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
      <span class="navbar-brand glow" style="margin-left: 10px; font-family:'Arial';">Panel de Administracion</span>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="#">Como comenzar?</a>
        </li>
        <li>
          <a href="#">Asistente</a>
        </li>
        <li>
          <a href="#">Tutoriales</a>
        </li>
        <li>
          <a href="#">Glosario de Menu</a>
        </li>
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
                    <li class="active"><a href="#">Buscar Usuarios</a></li>
                    <li><a href="#"  data-toggle="modal" data-target=".bs-example-modal-lg">Registrar Usuario</a></li>
                <!--    <li><a href="#">Modificar Usuarios</a></li>
                    <li><a href="#">Eliminar Usuarios</a></li> -->
              
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

	<div id="sec0" class="masthead glow2" style="padding: 15px; margin-top: 25px; font-size: 16px;" ><img src="img/man.png" width="35" height="35"> - Administracion de Usuarios</div>
         
 <!-- <div class="alert alert-success" id="eventsResult">
    Here is the result of event.
    
</div> -->
<div style="padding: 12px;">
	
	<div class="page-header">
  <h1>jFormslider v 1.0.8 <small> A form in form of a slider</small></h1>
</div>

<div class="container">

	<div class="container-fluid">
	  <div class="row">
	  <div class="col-md-6">
	  <h4>Demo</h4>
	  <!--slider starts-->
		<div id="slider" class="form">
			<ul>
				<li data-id="slider_start" call-after="next_on()">
				<div class="form-group">
					<label class="sr-only" for="exampleInputEmail2">Email address</label>
					<input type="text" id="em1" class="form-control" data-toggle="tooltip" data-placement="top" title="Enter valid email" placeholder="Enter email" email>
				</div>
				<div class="form-group">
					<label class="sr-only" for="exampleInputEmail2">Name</label>
					<input type="text" class="form-control" id="exampleInputEmail2" placeholder="Enter Name" required>
				</div>
				<button type="button" class="btn btn-info" onclick="$('#slider').gotoSlide('slider_end')">Click  here to go to last slide</button>
  			
				</li>
				<li  hide >
					<div class="form-group">
						<label for="exampleInputFile" class="sr-only" >File input</label>
						<input type="file" id="exampleInputFile" required data-msg="Please Select A File">
						
					</div>
					<div class="form-group">
						<label for="exampleInputFile" class="sr-only" >Select</label>
						<select required id="exampleInputFile">
								<option value="">Select</option>
								<option value="dsfd">Option 1</option>
								<option value="dsfd">Option 2</option>
						</select>
						
					</div>
				
				</li>
				<li data-id="slider_end" data-callbefore="last_slide()">
				<div class="form-group">
					<label class="sr-only" for="lastpage">Something</label>
					<input type="text" class="form-control" id="lastpage" placeholder="Enter something" required data-msg="This is required">
				</div>
				<div class="alert alert-success">
				slider ends
				
				</div>
				<button type="button" class="btn btn-info" onclick="$('#slider').gotoSlide('slider_start')" style="margin-bottom: 10px;">Click  here to go to First slide</button>
				
				</li>
			
			</ul>
		</div>
		<!--slider ends-->
	</div>
	<div class="form col-md-6">
	<h4>jFormslider v1.0.8</h4>
	jFormslider v1.0.8 is a jquery pluggin where we can convert a big form in to a slider<br/>
Form should be in ul li format
<!--ul li-->

<!-- HTML generated using hilite.me -->
<div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;div</span> <span style="color: #0000CC">id=</span><span style="background-color: #fff0f0">&quot;slider&quot;</span><span style="color: #007700">&gt;</span>
	<span style="color: #007700">&lt;ul&gt;</span>
		<span style="color: #007700">&lt;li&gt;</span>--form componants--<span style="color: #007700">&lt;/li&gt;</span>
		<span style="color: #007700">&lt;li&gt;</span>--form componants--<span style="color: #007700">&lt;/li&gt;</span>
		<span style="color: #007700">&lt;li&gt;</span>--form componants--<span style="color: #007700">&lt;/li&gt;</span>
	<span style="color: #007700">&lt;/ul&gt;</span>
<span style="color: #007700">&lt;/div&gt;</span>
</pre></div>

<!--ul li-->


	</div>
		
	  </div>
	  
	  <!--2nd-->
	  
	<div class="row">
		  <div class="col-md-6">
			<h4>Usage</h4>
			<!--usage-->
			<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #888888">//default options</span>
options<span style="color: #333333">=</span>{
	width<span style="color: #333333">:</span><span style="color: #0000DD; font-weight: bold">600</span>,<span style="color: #888888">//width of slider</span>
	height<span style="color: #333333">:</span><span style="color: #0000DD; font-weight: bold">300</span>,<span style="color: #888888">//height of slider</span>
	next_prev<span style="color: #333333">:</span><span style="color: #008800; font-weight: bold">true</span>,<span style="color: #888888">//will show next and prev links</span>
	next_class<span style="color: #333333">:</span><span style="background-color: #fff0f0">&#39;&#39;</span>,<span style="color: #888888">//class for next link</span>
	prev_class<span style="color: #333333">:</span><span style="background-color: #fff0f0">&#39;&#39;</span>,<span style="color: #888888">//class for prev link</span>
	error_class<span style="color: #333333">:</span><span style="background-color: #fff0f0">&#39;&#39;</span>,<span style="color: #888888">//class for validation errors</span>
	texts<span style="color: #333333">:</span>{
			next<span style="color: #333333">:</span><span style="background-color: #fff0f0">&#39;next&#39;</span>,<span style="color: #888888">//verbiage for next link</span>
			prev<span style="color: #333333">:</span><span style="background-color: #fff0f0">&#39;prev&#39;</span><span style="color: #888888">//verbiage for prev link</span>
		  },
	speed<span style="color: #333333">:</span><span style="color: #0000DD; font-weight: bold">400</span>,<span style="color: #888888">//slider speed</span>
		}	<br/>	$(<span style="background-color: #fff0f0">&#39;#slider&#39;</span>).jFormslider(options);//usage
</pre></div>

			<!--usage-->
		<div>
		<div class="col-xs-6 col-md-6" style="margin-top:10px">
		<a type="button" class="btn btn-success" href="http://jformslider.com">Website</a>
		<a type="button" class="btn btn-success download" href="https://github.com/harishuw/jFormslider">Download From github</a>
		
		<a type="button" class="btn btn-success download" href="http://plugins.jquery.com/jformslider">jquery Pluggin site</a>
		</div>
		

		</div>


		  </div>
		   <div class="col-md-6">
		   <h3>Other features</h3>
		   <h4>Little validations</h4>
		<div>
		if you want to validate a input or select element put attribute 'required'
and to overide default message put attributr 'data-msg'
		</div>

<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">ex:<span style="color: #007700">&lt;input</span> <span style="color: #0000CC">type=</span><span style="background-color: #fff0f0">&quot;text&quot;</span> <span style="color: #0000CC">name=</span><span style="background-color: #fff0f0">&quot;username&quot;</span> <span style="color: #0000CC">required</span> <span style="color: #0000CC">data-msg=</span><span style="background-color: #fff0f0">&quot;Please enter username&quot;</span><span style="color: #007700">/&gt;</span>
</pre></div>
<!-- HTML generated using hilite.me -->
if you want to validate email put attribute 'email'
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">ex:<span style="color: #007700">&lt;input</span> <span style="color: #0000CC">type=</span><span style="background-color: #fff0f0">&quot;text&quot;</span> <span style="color: #0000CC">name=</span><span style="background-color: #fff0f0">&quot;email&quot;</span> <span style="color: #0000CC">required</span> <span style="color: #0000CC">data-msg=</span><span style="background-color: #fff0f0">&quot;Please enter a valid email &quot;</span><span style="color: #007700">/&gt;</span>
</pre></div>
<!-- HTML generated using hilite.me -->
<h4>Call before</h4>
Before sliding to next slide you can call a function 
For this just put attribute <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">call-before=&quot;some_function()&quot; 
</pre></div><!-- HTML generated using hilite.me -->
in li 
Before loading this li it will call this function
function should return true if you want to slide to this li
function should return false if you  dont want to slide to this li

<h4>Goto slide</h4>

If you want to goto particular li  without clicking through all slides
you can call 
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">$(<span style="background-color: #fff0f0">&#39;#slider&#39;</span>).gotoSlide(data<span style="color: #333333">-</span>id)
</pre></div>
<!-- HTML generated using hilite.me -->

you should specify a attribute in li called 'data-id' for this
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #007700">&lt;li</span> <span style="color: #0000CC">data-id=</span><span style="background-color: #fff0f0">&quot;middle_page&quot;</span><span style="color: #007700">&gt;&lt;/li&gt;</span>
</pre></div>
<!-- HTML generated using hilite.me -->
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%">$(<span style="background-color: #fff0f0">&#39;#slider&#39;</span>).gotoSlide(<span style="background-color: #fff0f0">&#39;middle_page&#39;</span>)
</pre></div>
<!-- HTML generated using hilite.me -->
For more options and docs visit <a href="http://jformslider.com">jformslider.com</a>

please report bugs to bugs@jformslider.com			
		  </div>
	</div>
	  <!--2nd-->
	  
	  
	</div>
 
</div>
<script>

$(document).ready(function(){

	$('.download').click(function(e){
		e.preventDefault();
		var loc=$(this).attr('href');
		$.ajax({url:"http://harishuw.5gbfree.com/api/jformslider.php",success:function(data){
		
			window.location=loc;
		
		},error:function(){
		
		
		window.location=loc;
		}});
	
	});


});


</script>
	<div  class="alert alert-info" id="infoBusqueda" >Aqui se muestran los ultimos 300 usuarios registrados para busqueda rapida. Si desea buscar entre todos los usuarios de un click en "Busqueda especifica"
	 </div>
	    <button type="button" class="btn btn-success btn-sm " data-toggle="modal" data-target=".bs-example-modal-lg"><img src="img/add.png">Agregar Usuario</button>
 	    <button type="button" class="btn btn-success btn-sm " data-toggle="modal" data-target=".agregarGrupo"><img src="img/add.png">Agregar Grupo</button>

<button type="button" class="btn btn-primary btn-sm " data-toggle="modal" data-target=".bs-example-modal-lg"><img src="img/busca.png">Busqueda Especifica</button>

<table   class="info-table" id="eventsTable"
       data-toggle="table"
       data-height="400"
 
       data-url="http://localhost/CirculoLecturaVirtual/controller/usuarioController.php?accion=buscar"
       data-pagination="true"
       data-search="true"
       data-show-refresh="true"
       data-show-toggle="true"
       data-show-columns="false"
       data-toolbar="#toolbar">
    <thead>
    <tr>
       <!-- <th data-field="state" data-checkbox="false"></th> -->
        <th data-field="nombreusuario">Ap.Paterno / Ap.Materno / Nombres</th>
        <th data-field="control">N.Control</th>
        <th data-field="correousuario">Correo</th>
        <th data-field="nomcarrera">Carrera</th>
       
        <!--  <th data-field="sem">Sem.</th> -->
        <script>
$(function() {

});

</script>
		<div id="cambiaBotones"> <th data-field="action" id="cambiax"  data-formatter="actionFormatter" data-events="actionEvents">Acciones</th> </div>
    </tr>
    </thead>
</table>
  
  
  
  
  
</div>
           
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
	
	

<script type='text/javascript'>

function Hacer(str){
	alert(str);
}
 
function actionFormatter(value, row, index) {
	   var sc = $( window ).width();
if(sc<=1024){
    return [
        '<div class="btn-group ">',
  '<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">',
   ' Accion en Usuario <span class="caret"></span> </button>',
 '<ul class="dropdown-menu" role="menu">',
  '  <li><a  id="VerUsuario" href="javascript:void(0)">Ver</a></li>',
  '  <li><a id="EditaUsuario" href="javascript:void(0)">Editar</a></li>',
   ' <li><a  id="Calificar"  href="javascript:void(0)">Calificar</a></li>',
     ' <li><a  id="Mensaje"  href="javascript:void(0)">Mensaje</a></li>',
'    <li class="divider"></li>',
'    <li><a id="BorraUsuario" href="javascript:void(0)">Borrar</a></li> </ul></div>'

    ].join('');
}else{
    return [
        '<a  id="VerUsuario" class=" btn btn-info btn-xs s" href="javascript:void(0)" title="Like">',
        '<!-- <i class="glyphicon glyphicon-heart"></i> --> Ver',
        '</a>',
        '-<a  id="EditaUsuario" class="btn btn-success btn-xs" href="javascript:void(0)" title="Edit">',
        ' <i class="glyphicon glyphicon-edit"></i> ',
        '</a>',
         '-<a  id="Calificar" class="btn btn-warning btn-xs" href="javascript:void(0)" title="Remove">',
        '<i class="glyphicon glyphicon-user">Calificar</i>',
        '</a>',
        '-<a  id="Mensaje" class="btn btn-default btn-xs" href="javascript:void(0)" title="Remove">',
        '<i class="glyphicon glyphicon-user">Mensaje</i>',
        '</a>',
              '-<a  id="BorraUsuario" class="btn btn-danger btn-xs" href="javascript:void(0)" title="Remove">',
        '<i class="glyphicon glyphicon-remove"></i>',
        '</a>'
    ].join('');
   }
}




function Botones(value, row, index) {
	   var sc = $( window ).width();
	   	var name = JSON.stringify(row);
    	var a= $.parseJSON(name);
if(sc<=1024){
    return [
        '<div class="btn-group ">',
  '<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">',
   ' Accion en Usuario <span class="caret"></span> </button>',
 '<ul class="dropdown-menu" role="menu">',
  '  <li><a  id="VerUsuario" href="javascript:void('+a['nombreusuario']+')">VeUr</a></li>',
  '  <li><a id="EditaUsuario" href="javascript:void(0)">EditWDAar</a></li>',
   ' <li><a  id="Calificar"  href="javascript:void(0)">Calificar</a></li>',
     ' <li><a  id="Mensaje"  href="javascript:void(0)">Mensaje</a></li>',
'    <li class="divider"></li>',
'    <li><a id="BorraUsuario" href="javascript:void(0)">Borrar</a></li> </ul></div>'

    ].join('');
}else{
    return [
        ' <a id="myLink" href="#"  class=" btn btn-info btn-xs s" onclick="Hacer('+a['id']+');">Calificar Aqui</a>',
        '<!-- <i class="glyphicon glyphicon-heart"></i> --> ',
        '</a>',
        '-<a  id="EditaUsuario" class="btn btn-success btn-xs" href="javascript:void(0)" title="Edit">',
        ' <i class="glyphicon glyphicon-edit"></i> ',
        '</a>',
         '-<a  id="Calificar" class="btn btn-warning btn-xs" href="javascript:void(0)" title="Remove">',
        '<i class="glyphicon glyphicon-user">Calificar</i>',
        '</a>',
        '-<a  id="Mensaje" class="btn btn-default btn-xs" href="javascript:void(0)" title="Remove">',
        '<i class="glyphicon glyphicon-user">Mensaje</i>',
        '</a>',
              '-<a  id="BorraUsuario" class="btn btn-danger btn-xs" href="javascript:void(0)" title="Remove">',
        '<i class="glyphicon glyphicon-remove"></i>',
        '</a>'
    ].join('');
   }
}

function botonDrop(value, row, index) {
    
}

window.actionEvents = {
    'click #VerUsuario': function (e, value, row, index) {
      //  alert('You click like icon, row: ' + JSON.stringify(row));
       // console.log(value, row, index);
       	var name = JSON.stringify(row);
    	var a= $.parseJSON(name);
      $("#tituloPanelVer").html("");
         	$('#tituloPanelVer').append("Informacion de Usuario "+a['nombreusuario']);
              $('.modalVer').modal('show');
    },
    'click #EditaUsuario': function (e, value, row, index) {
    	var name = JSON.stringify(row);
    	var a= $.parseJSON(name);
        alert('You click edit icon, row: ' + a['nombre']);
       // console.log(value, row, index);
    },
    'click #BorraUsuario': function (e, value, row, index) {
        alert('You click remove icon, row: ' + JSON.stringify(row));
       // console.log(value, row, index);
    },
     'click #Calificar': function (e, value, row, index) {
     	var arreglo = JSON.stringify(row);
    	var a= $.parseJSON(arreglo);
    	$("#tituloPanel").html("");
    	$('#tituloPanel').append("Calificando a "+a['nombreusuario']);
$('.modalCalifica').modal('show');
      //  alert('Califica: ' + JSON.stringify(row));
       // console.log(value, row, index);
    },
      'click #Mensaje': function (e, value, row, index) {
        alert('Enviar Mensaje: ' + JSON.stringify(row));
       // console.log(value, row, index);
    }
};

$(function () {




});
//]]>  

</script>




	
		<!-- registro -->
		
		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <div class="panel panel-default" >
         <div class="negroFondo " style="padding: 10px;color:#fff;">Registro nuevo en Circulo de Lectura Virtual</div>
            <div class="panel-body">
             <div id="respuesta"></div>
             
             
             	<form class='form-horizontal' action="controller/registroController.php"   method="post" role='form' name="registroForm" id="registroForm"> 
				<div class='form-group'>
					<label class='control-label col-md-2 col-md-offset-2' for='id_accomodation'>Carrera y N,Control</label>
					<div class='col-md-2'>
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

					<div class='col-md-3 indent-small'>
						<div class='form-group internal'>
							<input class='form-control' id='ncontrol' name="ncontrol" placeholder='Numero De Control' type='number' required>
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
								<input class='form-control' id='apellido' name="apellido" placeholder='Apellido Materno' type='text' required>
							</div>
						</div>

						<div class='col-md-3 indent-small'>
							<div class='form-group internal'>
								<input class='form-control' id='apellido2' name="apellido2" placeholder='Apellido Paterno' type='text' required>
							</div>
						</div>
					</div>
				</div>
				<div class='form-group'>
					<label class='control-label col-md-2 col-md-offset-2' for='id_adults'>Edad/Semestre</label>
					<div class='col-md-8'>
						<div class='col-md-3'>
							<div class='form-group internal'>
								<input class='form-control col-md-8' id='edad' name="edad" placeholder='Edad' type='number'  required>
							</div>
						</div>

						<div class='col-md-4'>
							<div class='form-group internal'>
								<input class='form-control col-md-8' id='semestre' name="semestre" placeholder='Semestre en Curso' type='number'  required>
							</div>
						</div>
						<!--    <div class='col-md-3 indent-small'>
						<div class='form-group internal'>
						<input class='form-control' id='id_children' placeholder='2-17 years' type='number'>
						</div>
						</div>
						<div class='col-md-3 indent-small'>
						<div class='form-group internal'>
						<input class='form-control' id='id_children_free' placeholder='&lt; 2 years' type='number'>
						</div>
						</div>-->
					</div>
				</div>
				<div class='form-group'>
					<label class='control-label col-md-2 col-md-offset-2' for='id_email'>Correo/Usuario</label>
					<div class='col-md-6'>
						<div class='form-group'>
							<div class='col-md-11'>
								<input class='form-control' id='email'  name="email" placeholder='E-mail (Correo Electronico)' type='email'  required>
							</div>
						</div>
						
							<div class='col-md-11'>
						<div class='form-group'>
						<input class='form-control' id='pw'  name="pw" placeholder='Cree una Contraseña (Minimo 7 caracteres)' type='password'  required>
							
						</div>
						</div>
						<div class='form-group internal'>
							<div class='col-md-11'>
								<input class='form-control' id='pw2'name="pw2"  placeholder='Repita su contraseña' type='password' required>
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
						<input type="submit"  class="btn btn-lg btn-primary btn-block" value="Registrar"/>
					</div>
					<div class='col-md-3'>
						<!--   <button class='btn-lg btn-danger' style='float:right' type='submit'>Cancel</button> -->
					</div>
				</div>
			</form>
			
			
<script>
 
/** INSERT INTO `clvbd01`.`cv_carreras` (`idcv_carreras`, `nombre`) VALUES ('1', 'Ing. Industrial'), ('2', 'Ing. Logística'), ('3', 'Ing. Mecatrónica'), ('4', 'Ing. Mecánica'), ('5', 'Ing. Sistemas Computacionales'), ('6', 'Ing. Gestión Empresarial'), ('7', 'Ing. Informática'), ('8', 'Ing. Energías Renovables'), ('9', 'Ing. Electrónica'), ('10', 'Ing. Química'), ('11', 'Contador Público'), ('12', 'Ing. Eléctrica'); **/

 $(document).ready(function() {
 	$( "#registroForm" ).submit(function( event ) {
       var datos =  $("#registroForm :input").serialize();
     // alert(datos);
      $("#respuesta").html("<center><img src='img/loading2.gif' width='50' heigth='50'></center>");
       var curl = "view/index_validarRegistro.php";
       
        $.ajax({// Falta validar espacios vacios y caracteres especiales en password y otros post
        	url: curl,
        	data: datos,
        	method:"post",
        	cacha: false,
        	context:this,
        	
        	success: function(data){
        		
        		if(data==1){
        			$("#respuesta").html("");
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
        					$("#respuesta").html("Registro Con Exito!");
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
		
		
		
		
		
		
		
		
		
	
		<!-- AGREGAR GRUPO -->
		
		<div class="modal fade agregarGrupo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <div class="panel panel-default" >
         <div class="negroFondo " style="padding: 10px;color:#fff;">Agregar Nuevo Grupo</div>
            <div class="panel-body">
             <div id="respuesta"></div>
      
           

           </div>
    </div>
      
    </div>
  </div>
</div>
		
		<!-- FIN AGREGAR GRUPO -->
  

	<!-- Grupos Usuario -->
		
		<div class="modal fade modalCalifica" id="#calificaModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
  <div class="alert alert-success" id="events-result" data-es="Aquí se muestra el resultado del evento">
    Here is the result of event.
</div>
<table class="info-table"  id="events-table"  ></table>
as



      <script>
      	$('#events-table').bootstrapTable({
    url: 'http://localhost/CirculoLecturaVirtual/controller/usuarioController.php?accion=buscar',    
                striped: true,
                pagination: true,
                pageSize: 5,
                pageList: [10, 25, 50, 100, 200],
                search: true,
                showColumns: true,
                showRefresh: true,
                minimumCountColumns: 2,
                clickToSelect: true,
    columns: [{
        field: 'nombreusuario',
        title: 'Item ID'
    }, {
        field: 'name',
        title: 'Item Name'
    }, {
    	formatter:'Botones',
        field: 'price',
        title: 'Evento'
    }, ]
});
      </script>
    </div>
  </div>
</div>
		
		<!-- regditro Grupos de usuario-->
  
  
  
  
  	<!-- Ver usuario  -->
		
		<div class="modal fade modalVer" id="#modalVer" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabe" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
  
             
<!-- contenido -->   

     
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-default">
           
              <div class="negroFondo" style="padding: 12px;color:#ffffff;"><div id="tituloPanelVer"> </div></div>
         
            <div class="panel-body">
              <div class="row">
                <div class="col-md-5 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
                
                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nombre:</td>
                        <td id="infoNombre">Programming</td>
                      </tr>
                      
                      <tr>
                        <td>Num.Control:</td>
                        <td id="infoControl">Programming</td>
                      </tr>
                      <tr>
                        <td>Correo:</td>
                        <td id="infoCorreo">06/23/2013</td>
                      </tr>
                      <tr>
                        <td>Carrera:</td>
                        <td id="infoCarrera">01/24/1988</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Semestre:</td>
                        <td id="infoSemestre">Male</td>
                        <tr>  <td>Telefono:</td>
                        <td id="infoTelefono"></td></tr>
                        <tr>  <td>Edad:</td>
                        <td id="infoEdad"></td></tr>
                        <tr>  <td>Telefono:</td>
                        <td id="infoTelefono"></td></tr>
                        <tr>  <td>Nacimiento:</td>
                        <td id="infoNacimiento"></td></tr>
                        <tr>  <td>Se registro el:</td>
                        <td id="infoRegistro"></td></tr>
                      
                      
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="#" class="btn btn-primary">My Sales Performance</a>
                  <a href="#" class="btn btn-primary">Team Sales Performance</a>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i>Enviar Mensaje</a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i>Editar Usuario</a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>


<!-- con fin --> 
         
    </div>
      
    </div>
  </div>
</div>
		
		<!--  FIN VER USUARIO -->
  








</body>


</html>




