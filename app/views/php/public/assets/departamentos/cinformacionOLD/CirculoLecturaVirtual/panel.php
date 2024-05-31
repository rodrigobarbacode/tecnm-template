<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Panel de Administracion</title>
         <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script> -->
       <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"> </script>  -->
     <script src="css/e/jquery-1.9.0b1.min.js"></script> <!-- 1.9.0b1.min
       <script src="https://code.jquery.com/jquery-migrate-1.2.1.js"></script>
       
      
        <!--  <script src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script> -->
  <!-- ANGULAR JS -->
  <link rel='stylesheet' href='css/e/normalize.css'>
<script src='css/e/angular.min.js'></script>
  <!-- ANGULAR JS -->
  <!-- upload -->
  <script src="css/e/jquery.form.js"></script>
  <!-- upload -->
  <!-- Jstorage -->
<script src='css/e/json2.js'></script><script src='css/e/jstorage.min.js'></script><!-- 4.0.4 -->
  <!-- Jstorage -->
  <!-- STEP -->
         <link type="text/css" rel="stylesheet" href="css/rhinoslider-1.05.css" />  <script type="text/javascript" src="js/rhinoslider-1.05.min.js"></script><script type="text/javascript" src="js/mousewheel.js"></script><script type="text/javascript" src="js/easing.js"></script>
 <!-- STEP FIN -->
        <!-- bootstrap -->
  <link rel="stylesheet" type="text/css" href="css/e/bootstrap.min.css"><script src="js/bootstrap.min.js"></script> 
		 <!-- wizrard -->
	<!-- Include Bootstrap Wizard -->
<script src="js/step.js"></script>
 <!-- wizard fin -->
		 <!-- datepicker -->
 <script type='text/javascript' src="js/moment-with-locales.js"></script><script type='text/javascript' src="js/bootstrap-datetimepicker.js"></script><link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css">
		 <!-- datepicker fin -->
<!-- extras -->
		<link rel="stylesheet" type="text/css" href="css/menuVertical.css"><link href="css/admin.css" rel="stylesheet"><script src="js/scripts.js"></script><link href="css/styles.css" rel="stylesheet"><!-- theme --><link rel="stylesheet" href="css/e/bootstrap-theme.min.css"><link href="css/e/font-awesome.min.css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="/css/result-light.css"><link rel="stylesheet" type="text/css" href="css/e/bootstrap-table.css"><script type='text/javascript' src="js/bootstrap-table.js"></script>
	<!-- extras fin -->
	
	
	

<style type="text/css">
	
	.field { width: 100%; float: left; margin: 0 0 20px; }
	.field input { margin: 0 0 0 20px; }
	h3 span { background: #444; color: #fff; padding: 3px; }
	pre { background: #f4f4f4; }

	/* Used for the Switch effect: */
	.cb-enable, .cb-disable, .cb-enable span, .cb-disable span { background: url(img/switch.gif) repeat-x; display: block; float: left; }
	.cb-enable span, .cb-disable span { line-height: 30px; display: block; background-repeat: no-repeat; font-weight: bold; }
	.cb-enable span { background-position: left -90px; padding: 0 10px; }
	.cb-disable span { background-position: right -180px;padding: 0 10px; }
	.cb-disable.selected { background-position: 0 -30px; }
	.cb-disable.selected span { background-position: right -210px; color: #fff; }
	.cb-enable.selected { background-position: 0 -60px; }
	.cb-enable.selected span { background-position: left -150px; color: #fff; }
	.switch label { cursor: pointer; }
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

	<div id="sec0" class="masthead glow2" style="padding: 9px; margin-top: 27px; font-size: 15px;" ><img src="img/man.png" width="25" height="25">
		 - Administracion de Usuarios</div>
		 
<div id="carga"></div>
	
	<script type="text/javascript">
	//read_json();
    function read_json() {
        $.getJSON("http://localhost/CirculoLecturaVirtual/controller/bibliotecaController.php?accion=categorias", function(data) {
            var html = '';
            $.each(data, function(i, record) {
                html += '' +
                '<td>' +
                    '<a href="' + record.nombre + '" data-ajax="false">' +
                        '<img src="' + record.img + '">' +
                        '<div class="dsc">' +
                            record.nombre + '<br>' +
                            '<em>' + record.datum + '</em>' +
                        '</div>' +
                    '</a>' +
                '</td>';
            });
            $('#kome').html(html);
        });
    }
    
    
    
    muestraCategorias();
     function muestraCategorias() {
     /**  <select name="cars">
    <option value="volvo">Volvo XC90</option>
    <option value="saab">Saab 95</option>
    <option value="mercedes">Mercedes SLK</option>
    <option value="audi">Audi TT</option>
  </select>**/
        $.getJSON("http://localhost/CirculoLecturaVirtual/controller/bibliotecaController.php?accion=categorias", function(data) {
            var html = '';
               html += '<select name="categorias">';
            $.each(data, function(i, r) {
                html += '' +
                '   <option value="' + r.id + '">' + r.nombre + '</option>' +
                '';
            });
              html += '</select>';
            $('#categoriasl').html(html);
        });
    }
</script>
<div id="kome"></div>
 <!-- <div class="alert alert-success" id="eventsResult">
    Here is the result of event.
</div> -->
<div style="padding: 12px;">
	<div  class="alert alert-success" style="font-size: 13px;">Aqui se muestran los ultimos 300 usuarios registrados para busqueda rapida. Si desea buscar entre todos los usuarios de un click en "Busqueda especifica"
	<br><br>
	    <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target=".bs-example-modal-lg">  <span class="glyphicon glyphicon-plus"></span> Agregar Usuario</button>
 	    <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target=".agregarGrupo">  <span class="glyphicon glyphicon-plus"></span> Agregar Grupo</button>
 	    <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target=".agregarCategoria">  <span class="glyphicon glyphicon-plus"></span> Agregar Categoria</button>
       <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target=".agregarLibroo">  <span class="glyphicon glyphicon-plus"></span> Agregar Libro</button>
<button type="button" class="btn btn-info btn-sm " data-toggle="modal" data-target=".bs-example-modal-lg">  <span class="glyphicon glyphicon-search"></span> Busqueda Especifica</button>

</div>
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
              			$("#cargador").load("libro");
              	var carrera;
              	$( "#sistemas" ).click(function() {
                      // $( "#target" ).click();
                      carrera =  "mario alonso2";
                       $(document).hacerPost(carrera);
    
                 });
                 
                 
                 	$( "#otro" ).click(function() {
                      // $( "#target" ).click();
                      carrera =  1;
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
                        	cache: false,
                        	success:function(data){
                        	$("#respuestaUsuarios").html(data);
                        		alert(data);
                        	},
                        	error: function(){
                        alert('ERROR');
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

      
      <div class="panel panel-default" >
         <div class="negroFondo " style="padding: 10px;color:#fff;">Agregar Nuevo Grupo</div>
         
                 <script> 
                 	var tema = 1;
                 	var numtemas = 1;
                 		var lostemas = [];
                   $(document).ready(function() {
                          $( "#siguientepaso" ).click(function() {
                         
                          	 $.jStorage.set('nombre', $("#fnombre").val());
                          	 $.jStorage.set('descripcion', $("#fnombre").val());
                          	 $.jStorage.set('limite', $("#llimite").val()); 
                          	 $.jStorage.set('libro', $("#asignalibro").val()); 
                          	
                         // 	$.jStorage.set('libro', titulo);     
                            // var  value = $.jStorage.get("nombre");
                      
                            });
                     });
                 
                 	</script>
                <h3>Account Registration</h3>
                <form action="" >

                    <div id="slider">
                        <div class="form-step" >
                          
                            <div class="row">
                                <div class="form-left">Nombre de Grupo *</div>
                                <div class="form-right"><input value="1" class="form-control" type="text" id="fnombre" name="fnombre" /></div>
                                <div class="form-error"></div>
                            </div>
                            
						
                            <div class="row">
                                <div class="form-left">Descripcion *</div>
                                <div class="form-right"><input value="1" type="text" id="ldesc" name="ldesc" class="form-control" /></div>
                                <div class="form-error"></div>
                            </div>
                            
                             <div class="row">
                                <div class="form-left">Limite de Usuarios *</div>
                                <div class="form-right"><input type="number" id="llimite" name="llimite" class="form-control" value="20" /></div>
                                <div class="form-error"></div>
                            </div>
                            <div class="row">
                                <div class="form-left">Modo de inscripcion *</div>
                                <div class="form-right">
                                    <select id="gender" name="gender">
                                        <option value="1">Aprobar Usuarios que se inscriben Manuelmente</option>
                                        <option value="2">Aprobar Automaticamente a los usuarios que se inscriban</option>
                                       
                                    </select>
                                </div>
                                <div class="form-error"></div>
                            </div>
                           <!-- <div class="row">
                                <div class="form-left">Address</div>
                                <div class="form-right"><input type="text" id="address" name="address" class="form-control" /></div>
                                <div class="form-error"></div>
                           </div> -->

                        </div>
                        <div class="form-step" >
                        	       <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target=".agregarLibroo">  <span class="glyphicon glyphicon-plus"></span> Agregar un Nuevo libro</button> (Puede agregar un nuevo libro para despues seleccionarlo o buscar uno en la biblioteca virtual)

         <div class="librog">       	
<div  id="librosCSS"  ng-app="MyApp"  ng-controller="PostsCtrl">
  <input type="text" id="query" ng-model="query" placeholder="Buscar Libro en Biblioteca Virtual" />
  <!--<select ng-model="orderList">
    <option value="titulo">Titulo</option>
    <option value="-registado">Newest</option>
    <option value="registrado">Oldest</option>
  </select> -->
  <ul id="book_ul">
    <li ng-animate="'animate'"   onclick="dale({{post.id}},'{{post.titulo}}','{{post.img}}');"  id="libroS{{post.id}}" ng-repeat="post in posts | filter:query | orderBy: id">
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
        
      <div class="right top">{{notebook.age}}</div>
     
    </li>
  </ul>
  <span><div id="libroagregado" style="font-size: 15px;">Tenemos un total de: {{posts.length}} Libros Electronicos (Da un click sobre el libro que quieres agregar)</div></span>
</div>
</div> 
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


</body>

<script>
var app = angular.module('MyApp', []);
app.controller('PostsCtrl', function ($scope, $http) {
    $http.get('http://localhost/CirculoLecturaVirtual/controller/bibliotecaController.php?libros=libros').success(function (data) {
        $scope.posts = data;
        $scope.random = function () {
            return 0.5 - Math.random();
        };
    }).error(function (data) {
    });
});
</script>
                        	
                            <div class="row">
                                
                                <div class="form-right"><br><br><input type="hidden" id="asignalibro" name="libroseleccionado" class="form-control" /></div>
                                <div class="form-error"></div>
                            </div>
                       
                        </div>
                        <div class="form-step">
                           
                       <div class="fija" style="margin-top: 30px;">
                       
                                    <!--<div id="addtema"></div> -->
                                     <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target=".addtemaa">  <span class="glyphicon glyphicon-plus"></span> Agregar Tema Nuevo</button> (Usted puede dejar esto en blanco y crear encuestas posteriormente)
                         
                                      <div id="listertemas"> 
                                      	<div class="alert alert-warning" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  	(Sin ningun tema asignado aun usted debe asignar 1 tema como minimo)<br> * Nota: Posteriormente puede agregar mas temas en | Panel de administracion > Manejo de Grupos | <br>*Nota 2: (Para descartar campos simplemente puede dejarlos en blanco)
              
</div>
                                      	
                                      </div><!-- listertarea -->
                                    
                             <!--  <a type="button" class="btn btn-default btn-sm " id="addtt">  <span class="glyphicon glyphicon-plus"></span> Agregar Tema</a>
  -->          
                         </div>   
                            
                            <script> 
                  
                
                          $( "#addtt" ).click(function() {
                          	//alert("q");
                          	 tema=tema+1;
 $("#addtema").append('<div class="row"> <div class="form-left">Tema '+tema+'</div> <div class="form-right"><input type="text" id="tema'+tema+'" name="tema'+tema+'" class="form-control" /></div>  <div class="form-error"></div> </div>');
                         
                          //	 $.jStorage.set('nombre', $("#fnombre").val());
//value = $.jStorage.get('libro');
//alert("test"+value);
                             
                            // var  value = $.jStorage.get("nombre");
                             //  alert(value);
                            });
                 
                 
                 	</script>
                        </div>
                        
                       
                          <div class="form-step">
                          	 <div class="fija" style="margin-top: 30px">
                            <div class="row">
                                <div class="form-left">Nombre de encuesta</div>
                                <div class="form-right"><input type="text" id="encuestaid" name="encuestaid" class="form-control" /></div>
                                <div class="form-error"></div>
                            </div>
                                             <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target=".encuesta">  <span class="glyphicon glyphicon-plus"></span> Agregar Pregunta</button> (Usted puede dejar esto en blanco y crear encuestas posteriormente)
                            <div id="listerencuesta"></div><!-- listertarea -->
            
    
                         <!--   <a href="#" id="agregarpregunta" onclick="addlister();">Agregar Pregunta</a> -->
                        </div>
                        </div>
                        
                       <script>
                       var xp = 0;
                        var nup = 0;
                             var numta= 0 ;
                             
                           
                        </script>
                        
                        
                            <div class="form-step"><!-- tareastep -->
                             	 <div class="fija" style="margin-top: 30px">
                            
                          
                                <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target=".addtareaa">  <span class="glyphicon glyphicon-plus"></span> Agregar Nueva Tarea</button> (Usted puede continuar y agregas tareas posteriormente)
                                    <div id="listertarea"></div><!-- listertarea -->
                         <!--   <a href="#" id="agregarpregunta" onclick="addlister();">Agregar Pregunta</a> -->
                        </div>
                        </div>
                        
                            <div class="form-step">
                            	 <div id="respuestastap2"></div>
                            	 <div id="respuestastap"></div>
                            <!--<div class="row">
                                <div class="form-left">Finalizar</div>
                                <div class="form-right"><input type="text" id="email" name="email" class="form-control" /></div>
                                <div class="form-error"></div>
                            </div>
                            <div class="row">
                                <div class="form-left">Mobile No</div>
                                <div class="form-right"><input type="text" id="mobile" name="mobile" class="form-control" /></div>
                                <div class="form-error"></div>
                            </div> -->
                            
                            <div id="respuestastap2"></div>
                        </div>
                    </div>
                </form>
          
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
		
		

		
		
		
	<!-- Agregar Categoria Biblioteca -->
		
		<div class="modal fade agregarCategoria"style="z-index: 999999;"  id="#calificaModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

     <div class="panel panel-default" >
         <div class="negroFondo " style="padding: 10px;color:#fff;">Registro de Nueva categoria  </div>
            <div class="panel-body">
             <div id="respuesta"></div>
           <!-- panel preview -->
      <div id="message2">
       <div class="alert alert-info" id="events-result" data-es="" style="color:#000033;">   
Agrega una categoria para Biblioteca Virtual.(La insercion de imagen es Opcional)</div>
</div>
            <div class="panel panel-default">
                <div class="panel-body form-horizontal ">
                	<form id="addCategoria" action="controller/bibliotecaController.php"  method="post" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Nombre:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="titulo" name="titulo" required placeholder="Escribe un nombre">
                        </div>
                    </div>
                         <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label">Imagen de Categoria:</label>
                        <div class="col-sm-9">
                               <input type="file"  class="form-control" name="myfile" id="imgInp">
                               <input type="hidden" size="60" name="enviarcatalogo" id="imagenC" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="col-sm-3 control-label">Descripcion:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="descripcion" name="descripcion" required placeholder="Escribe una breve descripcion">
                        </div>
                    </div> 
                    
                  <!--  <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Date</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                  </div>    -->
                    <div class="form-group">
                        <div class="col-sm-12 text-right">
                        	
               <span class='glyphicon glyphicon-plus'></span> <input type="submit"   class="btn btn-default preview-add-button" value="       Agregar Categoria"><br>
                           
                        </div>
                    </div>
                    
                    
                       <center><div id="imagen1"></div>
 
 <div id="progress">
       
</div>
    </center>        
         
<script>
$(document).ready(function()
{
	 
	    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
            	                	$("#imagenC").val("imagen");
            	$("#imagen1").html(' <img   id="blah" src="#" alt="your image"  width="150"/>');
                $('#blah').attr('src', e.target.result);
                	$("#progress").html(' <div id="bar"></div><div id="percent">0%</div >');

            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });

	var options = { 
    beforeSend: function() 
    {
    	$("#progress").show();
    	//clear everything
    	$("#bar").width('0%');
    	$("#message2").html("");
		$("#percent").html("0%");
    },
    uploadProgress: function(event, position, total, percentComplete) 
    {
    	$("#bar").width(percentComplete+'%');
    	$("#percent").html(percentComplete+'%');

    
    },
    success: function() 
    {
        $("#bar").width('100%');
    	$("#percent").html('100%');
    	$("#imagenC").val("");
    	$("#imgInp").val("");
    	 muestraCategorias();

    },
	complete: function(response) 
	{
		$("#message2").html("<font color='green'>"+response.responseText+"</font>");
		$("#progress").html('');
		$("#imagen1").html('');
		$("#imgInp").val("");
	},
	error: function()
	{
		$("#message2").html("<font color='red'> ERROR: unable to upload files</font>");
		$("#progress").html(''); $("#imgInp").val("");
		$("#imagen1").html('');

	}
     
}; 

     $("#addCategoria").ajaxForm(options);

});

</script>   
            
            
            
            </div>            
        </div> <!-- / panel preview -->
</form>
 
 
             </div>
             </div>


  
    </div>
  </div>
</div>
		
		<!--  Agregar Categoria  FIN-->
  
  
  
  	<!-- Agregar  una pregunta -->
		
		<div class="modal fade encuesta" id="#calificaModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

     <div class="panel panel-default" >
         <div class="negroFondo " style="padding: 10px;color:#fff;">Agrega una pregunta </div>
            <div class="panel-body">
              <div class="row">
                                 <div class="form-left " style="margin-left: 10px;"><strong>** Pregunta </strong></div>
                                <div class="form-right"><input type="text" id="masterpregunta" name="masterpregunta" class="form-control" /></div>
                                <div class="form-error"></div>
                            </div>
                            
                            <div class="row" style="margin-left: 20px;">
                                 <div class="form-left">Opcion A</div>
                                <div class="form-right"><input type="text" id="oA" name="oA" class="form-control" /></div>
                                <div class="form-error"></div>
                            </div>
                            
                            <div class="row" style="margin-left: 20px;">
                                <div class="form-left">Opcion B</div>
                                <div class="form-right"><input type="text" id="oB" name="oB" class="form-control" /></div>
                                <div class="form-error"></div>
                            </div>
                            <div class="row" style="margin-left: 20px;">
                                <div class="form-left">Opcion C</div>
                                <div class="form-right"><input type="text" id="oC" name="oC" class="form-control" /></div>
                                <div class="form-error"></div>
                            </div>
                            <div class="row" style="margin-left: 20px;">
                                <div class="form-left">Opcion D</div>
                                <div class="form-right"><input type="text" id="oD" name="oD" class="form-control" /></div>
                                <div class="form-error"></div>
                            </div>
                             <div class="row" style="margin-left: 20px;">
                                <div class="form-left">Respuesta Correcta</div>
                                <div class="form-right">
                                	<select name="respeustapp" id="respuestapp"  class="form-control" />
                                	  <option value="1" id="1">Opcion A</option>
                                	  <option value="2" id="2">Opcion B</option>
                                	  <option value="3" id="3">Opcion C</option>
                                	  <option value="4" id="4">Opcion D</option>
                                	</select>
                                </div>
                                <div class="form-error"></div>
                            </div>
                            <script>
                           
                            $( document ).ready(function() {
                                  $( "#agregalapregunta" ).click(function() {
                                //  $( "#target" ).click();  aqui ando
                              //  alert("Asdas");
                              nup++;
                             // alert(nup);
                               var respp =     $("#respuestapp").val();
                              //  if(respp==1){ respp="A"  }if(respp==2){ respp="B"  }if(respp==3){ respp="C"  }if(respp==4){ respp="D"  }
                            	$("#listerencuesta").append('Pregunta'+nup+':('+$("#masterpregunta").val()+')<br>A:'+$("#oA").val()+'<br>B:'+$("#oB").val()+'<br>C:'+$("#oC").val()+'<br>D:'+$("#oD").val()+'<br>Respuesta:'+respp+'<br><hr>');
                                         var key1 =  'pregunta'+nup;
                                       //  alert(key1);
                                           	 $.jStorage.set(key1, $("#masterpregunta").val());
                                        	 $.jStorage.set('a'+nup, $("#oA").val());
                                        	 $.jStorage.set('b'+nup, $("#oB").val());
                                        	 $.jStorage.set('c'+nup, $("#oC").val());
                                        	 $.jStorage.set('d'+nup, $("#oD").val());
                                        	 $.jStorage.set('correcta'+nup,  $("#respuestapp").val());
                                        	// alert($.jStorage.get('a1'));
                                          	 
                                });
                            });

                            
                            //$("#agregalapregunta").click(function(){
                            /**	alert("as");
                            	  var respp =     $("#respuestapp").val();
                                if(respp==1){ respp="A"  }if(respp==2){ respp="B"  }if(respp==3){ respp="C"  }if(respp==4){ respp="D"  }
                            	$("#listerencuesta").html('Pregunta:('+$("#masterpregunta").val()+')<br>A:'+$("#oA").val()+'<br>B:'+$("#oB").val()+'<br>C:'+$("#oC").val()+'<br>D:'+$("#oD").val()+'<br>Respuesta:'+respp+'<br>');
                            ***/
                           // });
                          
                            	
                               
                            </script>
                              <a  class="btn btn-default btn-sm " id="agregalapregunta" >  <span class="glyphicon glyphicon-plus"></span> Agregar Pregunta</a>
    
 
             </div>
             </div>


  
    </div>
  </div>
</div>
		
		<!-- agrega pregunta ->
		
		
		
		  
  	<!-- Agregar  TAREA -------------------------------------- -->
		
		<div class="modal fade addtareaa" id="#calificaModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

     <div class="panel panel-default" >
         <div class="negroFondo " style="padding: 10px;color:#fff;">Agrega Una nueva Tarea</div>
            <div class="panel-body">
              <div class="row">
                                 <div class="form-left " style="margin-left: 10px;"><strong>Tarea  </strong></div>
                                <div class="form-right"><textarea type="text" id="tareaa" name="tareaa" class="form-control"  placeholder="Escribe una descripcion para su tarea(Ejem:Hacer investigacion de...)" /></textarea>
                                </div>
                                <div class="form-error"></div>
                            </div>
                            
                            <div class="row" style="margin-left: 20px;">
                                 <div class="form-left">Valor de Tarea(Recomendable 4 pts)</div>
                                <div class="form-right"><input type="number" id="valortarea" name="valortarea" class="form-control"   value="4"/></div>
                                <div class="form-error"></div>
                            </div>
                     <a  class="btn btn-default btn-sm " id="agregalatarea" >  <span class="glyphicon glyphicon-plus"></span> Agregar Tarea</a>
    
                            <script>
                      
                            $( document ).ready(function() {
                                  $( "#agregalatarea" ).click(function() {
                                //  $( "#target" ).click();  aqui ando
                              //  alert("Asdas");
                              numta++;
                            //  alert(nup);
                              // var respp =     $("#respuestapp").val();
                               // if(respp==1){ respp="A"  }if(respp==2){ respp="B"  }if(respp==3){ respp="C"  }if(respp==4){ respp="D"  }
                            	$("#listertarea").append('Tarea '+numta+':('+$("#tareaa").val()+')<br>Valor de Tarea:('+$("#valortarea").val()+'pts)<hr>');
                                         var key1 =  'tarea'+numta;
                                        // alert(key1);
                                           	 $.jStorage.set(key1, $("#tareaa").val());
                                        	 $.jStorage.set('valort'+numta, $("#valortarea").val());
                                        	
                                        	// alert($.jStorage.get('a1'));
                                          	 
                                });
                            });

                            
                            //$("#agregalapregunta").click(function(){
                            /**	alert("as");
                            	  var respp =     $("#respuestapp").val();
                                if(respp==1){ respp="A"  }if(respp==2){ respp="B"  }if(respp==3){ respp="C"  }if(respp==4){ respp="D"  }
                            	$("#listerencuesta").html('Pregunta:('+$("#masterpregunta").val()+')<br>A:'+$("#oA").val()+'<br>B:'+$("#oB").val()+'<br>C:'+$("#oC").val()+'<br>D:'+$("#oD").val()+'<br>Respuesta:'+respp+'<br>');
                            ***/
                           // });
                          
                            	
                               
                            </script>
                           
 
             </div>
             </div>


  
    </div>
  </div>
</div>
		
		<!-- Fin tarea -->
		
		  
  	<!-- Agregar  team -------------------------------------- -->
		
		<div class="modal fade addtemaa" id="#calificaModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

     <div class="panel panel-default" >
         <div class="negroFondo " style="padding: 10px;color:#fff;">Agrega Una nuevo tema al Foro</div>
            <div class="panel-body">
             
                            
                          <div class="form-left " style="margin-left: 10px;"><strong>Nuevo Tema:  </strong></div>
                                <div class="form-right"><textarea type="text" id="temaaa" name="temaaa" class="form-control"  placeholder="Escribe un tema respecto al libro" /></textarea>
                                </div>
                                <div class="form-error"></div>
                            </div> 

                               
                                      <button type="button" class="btn btn-default btn-sm " id="agregaeltema">  <span class="glyphicon glyphicon-plus"></span> Agregar Tema</button> 
                                      
          
    
                            <script>
                     var  ntema=0;
                            $( document ).ready(function() {
                                  $( "#agregaeltema" ).click(function() {
                              ntema++;
                          
                            	$("#listertemas").append('Tema'+ntema+':('+$("#temaaa").val()+')<hr>');
                                         var key1 =  'tema'+ntema;
                                           	 $.jStorage.set(key1, $("#temaaa").val());
                                        
                                          	 
                                });
                            });

            
                            	
                               
                            </script>
                           
 
             </div>
             </div>


  
    </div>
  </div>
</div>
		
		<!-- Fin tema -->
		
		
	  
  	<!-- Agregar  libro -------------------------------------- -->
		
		<div class="modal fade agregarLibroo" id="#calificaModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

     <div class="panel panel-default" >
         <div class="negroFondo " style="padding: 10px;color:#fff;">Agrega Un nuevo libro a la biblioteca</div>
            <div class="panel-body">
       <div id="cargador"></div>
 
             </div>
             </div>


  
    </div>
  </div>
</div>
		
		<!-- Fin add libro-->
		
  
  
  
  
  
  	
  
  
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
  






		 <script type='text/javascript'>//<![CDATA[ 
$(window).load(function(){
//$('#datetimepicker1').datetimepicker();
$('#datetimepicker2').datetimepicker({
	 format: 'DD/MM/YYYY'
});
});//]]>  


  $( "#registraGrupoya" ).click(function() {

     });    

</script>

</body>


</html>
