<?php 
include("../funciones/login.php");
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>
   Panel de Administracion
 <?php
  
     if(isset($_SESSION['k_se']) ) {
      echo $user = $_SESSION['k_se'];
      $id   = $_SESSION['k_id'];
      if ($id == 2) {
        echo "User Normal";
        header("Location: index.php"); 
      }

    }else {
 header("Location: index.php"); 
 exit; 
} 
 ?>
 </title>
         <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script> -->
       <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"> </script>  -->
     <script src="css/e/jquery-1.9.0b1.min.js"></script> <!-- 1.9.0b1.min
       <script src="https://code.jquery.com/jquery-migrate-1.2.1.js"></script>
       <!-- slide Nuevo -->
        <link rel="stylesheet" href="css/slideform.css" type="text/css" media="screen"/>
		<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
       --> <script type="text/javascript" src="js/sliding.form.js"></script>
       <!-- slide nuevo  -->
      
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
		<link rel="stylesheet" type="text/css" href="css/menuVertical.css"><link href="css/admin.css" rel="stylesheet"><script src="js/scripts.js"></script><link href="css/styles.css" rel="stylesheet"><!-- theme -->
		<link rel="stylesheet" href="css/e/bootstrap-theme.min.css"><link href="css/font/css/font-awesome.min.css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="/css/result-light.css"><link rel="stylesheet" type="text/css" href="css/e/bootstrap-table.css"><script type='text/javascript' src="js/bootstrap-table.js"></script>
	<!-- extras fin -->
	
	
	

<style type="text/css">
	iframe {

    background: #000;
    border: none;
 
    width: 100%;
    min-height: 440px;
    height: 100%;
}
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
	
  
<nav class="navbar navbar-trans navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> 
        <a class="navbar-brand" href="index.php" class="glow" ><label class="glow">CLV</label></a>
        
     </div>
    <div class="navbar-collapse collapse" id="navbar-collapsible">
      <ul class="nav navbar-nav navbar-left">
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li> 
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li> 
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li> 
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li> 
       <li><a href="index.php">Inicio</a></li>
        <li><a href="#">Como comenzar?</a></li>
        <li><a href="#">Asistente</a></li>
        <li><a href="#">Tutoriales</a></li>
        <li><a href="#">Glosario de Menu</a></li>
        <li><a href="#">Cerrar Sesion</a></li>
        <li>&nbsp;</li>
      </ul>
  </div>
</nav>

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

    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li id="kprincipal">
                  <a href="#" >
                  <i class="fa fa-home fa-lg"></i> Inicio
                  </a>
                </li>

                <li  data-toggle="collapse" data-target="#usuarios" class="collapsed ">
                  <a href="#"><i class="fa  fa-globe fa-lg"></i> Administrar Usuarios <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="usuarios">
                    <li  id="kprincipal" class="active"><a href="#" >Buscar Usuarios</a></li>
                    <li><a href="#"  data-toggle="modal" data-target=".bs-example-modal-lg">Registrar Usuario</a></li>
                <!--    <li><a href="#">Modificar Usuarios</a></li>
                    <li><a href="#">Eliminar Usuarios</a></li> -->
              
                </ul>
                
                  <li  data-toggle="collapse" data-target="#grupos" class="collapsed ">
                  <a href="#"><i class="fa  fa-globe fa-lg"></i> Manejar Grupos <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="grupos">
                    <li class="active"><a href="#" id="kgrupos" >Mostrar Grupos</a></li>
                    <li><a href="#"  data-toggle="modal" data-target=".agregarGrupo">Agregar Grupo</a></li>
              
              
                </ul>



     <li  data-toggle="collapse" data-target="#biblioteca" class="collapsed ">
                  <a href="#"><i class="fa  fa-book fa-lg"></i> Biblioteca Virtual <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="biblioteca">
                    <li class="active"><a href="#"  id="kbiblioteca" >Manejar Biblioteca</a></li>
                    <li><a href="#"   data-toggle="modal" data-target=".agregarLibroo"   >Agregar Libro</a></li>
                    <li><a href="#" data-toggle="modal" data-target=".agregarCategoria" >Agregar Categoria</a></li>
           
              
                </ul>
                
         <li  data-toggle="collapse" data-target="#evalua" class="collapsed ">
                  <a href="#"><i class="fa fa-check fa-lg"></i> Evaluar Usuarios/Grupos<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="evalua">
                    <li class="active"><a href="#" id="kcandidatos">Candidatos a Obtener Credito!</a></li>         
                    <li><a href="#" id="kcomentarios">Evaluar Comentarios de Foros</a></li>
                  <!--  <li><a href="#">Evaluar Tareas De Grupos</a></li> -->
                   <!--   <li><a href="#">Seleccionar Mejores Lectores</a></li> -->
                     
              
                </ul>        
                
            


                <li data-toggle="collapse" data-target="#eventos" class="collapsed">
                  <a href="#evento"><i class="fa fa-globe fa-lg"></i>Manejar Eventos<span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="eventos">
                  <li>Agregar Nuevo Evento</li>
                  <li>Modificar Evento</li>
                  <li>Eliminar Eventos</li>
                </ul>


              <!--  <li data-toggle="collapse" data-target="#new" class="collapsed">
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

<script>

$( document ).ready(function() {
    	$("#principal").hide().fadeIn(1000);
    	$('#tituloup').html('	<img src="img/man.png" width="25" height="25"> - Pagina De Administracion Principal');
   $("#agrupos").hide();
    $("#abiblioteca").hide();
     $("#aevaluar").hide();
      $("#acandidatos").hide();
      $("#aeventos").hide();
      $("#acomentarios").hide();
      $("#atareas").hide();
      $("#ausuarios").hide();

});

      
      
$( "#kprincipal" ).click(function() {
	$("#principal").hide().fadeIn(500);
   $("#agrupos").fadeOut('slow');
    $("#abiblioteca").fadeOut('slow');
     $("#aevaluar").fadeOut('slow');
    $("#acandidatos").fadeOut('slow');
      $("aeventos").fadeOut('slow');
            $("#acomentarios").hide();
      $("#atareas").hide();
      $("#ausuarios").hide();
});
$( "#kgrupos" ).click(function() {
  $("#principal").fadeOut(1000);
  $('#tituloup').html('	<img src="img/man.png" width="25" height="25"> - Administracion de Grupos');
   $("#agrupos").hide().fadeIn(2000);
    $("#abiblioteca").fadeOut('slow');
     $("#aevaluar").fadeOut('slow');
     $("#acandidatos").fadeOut('slow');
      $("aeventos").fadeOut('slow');
            $("#acomentarios").hide();
      $("#atareas").hide();
      $("#ausuarios").hide();
});
$( "#kbiblioteca" ).click(function() {
  $("#principal").hide();
  $('#tituloup').html('	<img src="img/book.png" width="25" height="25"> - Administracion de Biblioteca Virtual');
   $("#agrupos").hide();
    $("#abiblioteca").hide().fadeIn(1000);
     $("#aevaluar").fadeOut('slow');
     $("#acandidatos").fadeOut('slow');
      $("aeventos").fadeOut('slow');
});
$( "#kevaluar" ).click(function() {
    $("#principal").hide();
  $('#tituloup').html('	<img src="img/book.png" width="25" height="25"> - Candidatos');
   $("#agrupos").hide();
    $("#abiblioteca").fadeOut('slow');
     $("#aevaluar").hide().fadeIn(1000);
     $("#acandidatos").fadeOut('slow');
      $("aeventos").fadeOut('slow');
            $("#acomentarios").hide();
      $("#atareas").hide();
      $("#ausuarios").hide();
});


$( "#kcandidatos" ).click(function() {
      $("#principal").hide();
  $('#tituloup').html('	<img src="img/book.png" width="25" height="25"> - Candidatos');
   $("#agrupos").hide();
    $("#abiblioteca").fadeOut('slow');
     $("#aevaluar").fadeOut('slow');
     $("#acandidatos").hide().fadeIn(1000);
      $("aeventos").fadeOut('slow');
            $("#acomentarios").hide();
      $("#atareas").hide();
      $("#ausuarios").hide();
});
$( "#keventos" ).click(function() {
  alert( "Handler for .click() called." );
});

$( "#kcomentarios" ).click(function() {
      $("#principal").hide();
  $('#tituloup').html('	<img src="img/book.png" width="25" height="25"> - Moderar Comentarios');
   $("#agrupos").hide();
    $("#abiblioteca").fadeOut('slow');
     $("#aevaluar").fadeOut('slow');
     $("#acandidatos").fadeOut('slow');
      $("aeventos").fadeOut('slow');
     $("#acomentarios").hide().fadeIn(1000);
      $("#atareas").hide();
      $("#ausuarios").hide();
});
</script>

<div id="maincontent" class="masthead" >
<div class="innertube ">

	<div id="sec0" class="masthead glow2" style="padding: 9px; margin-top: 27px; font-size: 15px;" >
	 <div id="tituloup"></div></div>

	
	<script type="text/javascript">
	//read_json();
    function read_json() {
        $.getJSON("controller/bibliotecaController.php?accion=categorias", function(data) {
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
        $.getJSON("controller/bibliotecaController.php?accion=categorias", function(data) {
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
<div id="acandidatos"  style="padding: 12px;">  <!-- inicio candidtos -->
	
	
    
    	<table class="info-table"  id="candidatostable"  ></table>


      <script>
      	$('#candidatostable').bootstrapTable({
    url: 'controller/grupoController.php?candidatos',    
                striped: true,
                pagination: true,
                pageSize: 8,
                pageList: [10, 25, 50, 100, 200],
                search: true,
                showColumns: true,
                showRefresh: true,
                minimumCountColumns: 2,
                clickToSelect: true,
    columns: [{
        field: 'nombre',
        title: 'Nombre Usuario'
    }, {
        field: 'ap1',
        title: 'Ap.Paterno'
    },
    {
        field: 'ap2',
        title: 'Ap.Materno'
    },
     {
        field: 'nc',
        title: 'N.Control'
    },
     {
        field: 'grupo',
        title: 'Grupo'
    }, {
    	formatter:'Candidatos',
        field: 'price',
        title: 'Evento'
    }, ]
});



function Candidatos(value, row, index) {
	   var sc = $( window ).width();
	   	var name = JSON.stringify(row);
    	var a= $.parseJSON(name);

    return [
        ' <a id="myLink" href="#"  class=" btn btn-success btn-xs s" onclick="Hacer('+a['id']+');">Confirmar Credito!</a>',
        '<!-- <i class="glyphicon glyphicon-heart"></i> --> ',
        '</a>'
    ].join('');

}

      </script>
    
    
    
    
	
	
</div>                                     <!-- fin candidatos -->



<div id="acomentarios"  style="padding: 12px;">  <!-- inicio comentaios -->
	
	
    
    	<table class="info-table"  id="comentariostable"  ></table>


      <script>
      	$('#comentariostable').bootstrapTable({
    url: 'controller/grupoController.php?comentariosall',    
                striped: true,
                pagination: true,
                pageSize: 8,
                pageList: [10, 25, 50, 100, 200],
                search: true,
                showColumns: true,
                showRefresh: true,
                minimumCountColumns: 2,
                clickToSelect: true,
    columns: [{
        field: 'autor',
        title: 'Autor'
    }, {
        field: 'fecha',
        title: 'Fecha'
    },
    {
        field: 'comentario',
        title: 'Comentario'
    },
     {
        field: 'grupo',
        title: 'Grupo'
    },
     {
    	formatter:'Comentarios1',
        field: 'price',
        title: 'Evento'
    }, ]
});



function Comentarios1(value, row, index) {
	   var sc = $( window ).width();
	   	var name = JSON.stringify(row);
    	var a= $.parseJSON(name);
    	var p = "Pidiendo Revision";

    return [
        ' <a id="myLink" href="#"  class=" btn btn-danger btn-xs s" onclick="Hacer('+a['id']+');">Eliminar</a>',
        '<!-- <i class="glyphicon glyphicon-heart"></i> --> ',
        '</a>',
          ' <a id="myLink" href="#"  class=" btn btn-success btn-xs s" onclick="Hacer('+p+');">Pedir Revision</a>',
        '<!-- <i class="glyphicon glyphicon-heart"></i> --> ',
        '</a>'
        
     
    ].join('');

}

      </script>
    
    
    
    
	
	
</div>                                     <!-- fin comentarios -->
<div id="abiblioteca"  style="padding: 12px;">
	  
	  
	  <div class="wrapper22">

 
<ul class="tabs clearfix" data-tabgroup="first-tab-group2">
  <li><a href="#tab12" class="active"> Manejar Libros
  </a></li>
  <li><a href="#tab22">Manejar Categorias</a></li>

</ul>
<section id="first-tab-group2" class="tabgroup boxbox" style="margin-top: -10px">
  <div id="tab12">
   
    
    
    	<table class="info-table"  id="librostable"  ></table>


      <script>
      	$('#librostable').bootstrapTable({
    url: 'controller/bibliotecaController.php?libros',    
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
        field: 'titulo',
        title: 'Titulo de Libro'
    }, {
        field: 'autor',
        title: 'Autor'
    },
    {
        field: 'nombrecat',
        title: 'Categoria'
    }, {
    	formatter:'Libros',
        field: 'price',
        title: 'Evento'
    }, ]
});
      </script>
    
    
    
    
    
    
    
  </div>
  <div id="tab22">
  	
  	
  	    
    
    	<table class="info-table"  id="libroscategorias"  ></table>


      <script>
      	$('#libroscategorias').bootstrapTable({
    url: 'controller/bibliotecaController.php?accion',    
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
        field: 'nombre',
        title: 'Nombre de Categoria'
    }, {
        field: 'des',
        title: 'Descripcion'
    },{
    	formatter:'Categorias',
        field: 'accion',
        title: 'Evento'
    }, ]
});
      </script>
    
  	
  </div>

 
</section>
</div>
	
</div>



<div id="agrupos" style="padding: 12px;"><!-- GRUPPPPPPPPPPPP -->
	
	<div id="individual"></div>
	 


	 
  <h2> Grupos Creados </h2>
  
  
  

      <table class="info-table"  id="grupostable"  ></table>


         <script>
             
                            $( document ).ready(function() {
                            	  var pagina = "controller/grupoController.php";
                     
                              
                               
                            });

                               
                            </script>

      <script>
      function PanelGrupo(arg){
      	 $.getJSON("controller/grupoController.php?gi="+arg+"", function(result){
        $.each(result, function(i, r){
            // alert(r.nombrex);
            
              pagina = '<div class="wrapper22">'+
'<ul class="tabs clearfix" data-tabgroup="first-tab-group" id="xd">'+
 ' <li><a href="#tab1" class="active">Datos De Grupo</a></li><li><a href="#tab2">Temas</a></li><li><a href="#tab3">Encuestas</a></li> <li><a href="#tab4">Tareas</a></li>'+
 ' <li><a href="#tab5">Usuarios</a></li>'+
'</ul>'+
'<section id="first-tab-group" class="tabgroup boxbox"  style="margin-top: -10px;">'+
 ' <div id="tab1">'+
 '  <div id="respuestasave"> </div><form>'+
  '<div class="form-group">'+
  '  <label for="exampleInputEmail1">Nombre de Grupo</label>'+
  '  <input type="text" class="form-control" id="nombre"  value="'+r.nombre+'" placeholder="Nombre">'+
    '  <label for="exampleInputEmail1">Descripcion</label>'+
  '  <input type="text" class="form-control" id="descripcion"  value="'+r.des+'" placeholder="Descripcion">'+
    '  <label for="exampleInputEmail1">Limite de Usuarios</label>'+
  '  <input type="number" class="form-control" id="limite"  value="'+r.limite+'"  placeholder="Limite de usuarios en grupo">'+
      '  <label for="exampleInputEmail1">Puntos Para Acreditar Credito Complementario</label>'+
  '  <input type="number" class="form-control" id="puntos"  value="'+r.pts+'"  placeholder="Limite de usuarios en grupo">'+
    ' '+
  '  '+
 ' </div>'+
 
 ' <button type="submit" class="btn btn-default" id="salvargrupo">Guardar Datos</button>'+
'</form>'+
 ' </div>'+
 ' <div id="tab2">'+
 ' 	<iframe src="grupostemas.php?id='+arg+'"></iframe>'+
 '   </div>'+
 ' <div id="tab3">'+
 '<iframe src="gruposencuesta.php?id='+arg+'"></iframe>'+
 ' </div>'+
 ' <div id="tab4">'+
 '   <iframe src="grupostareas.php?id='+arg+'"></iframe>'+
 '    </div>'+
 ' <div id="tab5">'+
 '   <iframe src="gruposusuarios.php?id='+arg+'"></iframe>'+
'  </div>'+
'</section></div>';
   $( "#xd" ).addClass( "tabs clearfix" );
   $( "#first-tab-group" ).addClass( "tabgroup" );

      	$("#individual").html(pagina+arg);
      	
      	
      	       	 $( "#salvargrupo" ).click(function() {
                                     var pagina = "controller/grupoController.php";
                                     
                                     
                                       $.ajax({ 
                                       	 url:pagina,method:"post", 	cache: false,
                                       	 // idgrupo pts nombre d limite  , savegrupo
                        	              		   data: { idgrupo:arg, nombre: $("#nombre").val() ,pts: $("#puntos").val(), d: $("#descripcion").val() ,limite: $("#limite").val(), savegrupo: "registro" },
                        	                    success:function(data){
                        	                             alert(data+"Datos Guardados Correctamente!");
                        	                             $("#respuestasave").html(data);
                        	        	        }
                        	            });                          // fin ajax temas  ajax
                                     
                                     
                                     
                                     
                                  });// fin de onclick
      	
      	$('.tabgroup > div').hide();
$('.tabgroup > div:first-of-type').show();
$('.tabs a').click(function(e){
  e.preventDefault();
    var $this = $(this),
        tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
        others = $this.closest('li').siblings().children('a'),
        target = $this.attr('href');
    others.removeClass('active');
    $this.addClass('active');
    $(tabgroup).children('div').hide();
    $(target).show();
  
})

           $('#tituloup').html('<img src="img/book.png" width="25" height="25"> - Administras el Grupo:('+r.nombre+') Libro Actual ('+r.libro+')');
        });
    });
      	
    
    
      	   
         //  $("#cargagg").load('view/grupostemas.php?id='+arg);      
      }
      

      
      	$('#grupostable').bootstrapTable({
    url: 'controller/grupoController.php?allgrupos',    
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
        field: 'nombre',
        title: 'Nombre Grupo'
    }, {
        field: 'libro',
        title: 'Libro'
    },{
        field: 'creado',
        title: 'Creado'
    },
    
     {
    	formatter:'BotonesGrupos',
        field: 'price',
        title: 'Evento'
    }, ]
});




function BotonesGrupos(value, row, index) {
	   var sc = $( window ).width();
	   	var name = JSON.stringify(row);
    	var a= $.parseJSON(name);
if(sc<=1){
    return [
        '<div class="btn-group ">',
  '<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">',
   ' Accion en Usuario <span class="caret"></span> </button>',
 '<ul class="dropdown-menu" role="menu">',
  '  <li><a  id="VerUsuario" href="javascript:void('+a['nombreusuario']+')">Administrar Grupo</a></li>',
  '  <li><a id="EditaUsuario" href="javascript:void(0)">+ Agregar Tarea</a></li>',
   ' <li><a  id="Calificar"  href="javascript:void(0)">+ Agregar Tema</a></li>',
     ' <li><a  id="Mensaje"  href="javascript:void(0)">+ Agregar Encuesta</a></li>',
'    <li class="divider"></li>',
'    <li><a id="BorraUsuario" href="javascript:void(0)"+ Agregar Noticia</a></li> </ul></div>'

    ].join(''); // PanelGrupo('+a['id']+');
}else{
    return [
        ' <a id="myLink" href="#"  class=" btn btn-info btn-xs s" onclick="PanelGrupo('+a['id']+');">Administrar Grupo</a>',
        '<!-- <i class="glyphicon glyphicon-heart"></i> --> ',
        '</a>',
        '-<a  id="EditaUsuario" class="btn btn-success btn-xs" href="javascript:void(0)" title="Edit">',
        '+ Agregar Tarea',
        '</a>',
         '-<a  id="Calificar" class="btn btn-success btn-xs" href="javascript:void(0)" title="Remove">',
        '+ Agregar Tema',
        '</a>',
        '-<a  id="Mensaje" class="btn btn-success btn-xs" href="javascript:void(0)" title="Remove">',
        '+ Agregar Encuesta ',
        '</a>',
              '-<a  id="BorraUsuario" class="btn btn-default btn-xs" href="javascript:void(0)" title="Remove">',
        '+ Noticia',
        '</a>'
    ].join('');
   }
}

$( "#agregalib" ).click(function() {
  alert( "Handler for .click() called." );
});
      </script>
	
	
	
	
	
	
	
</div><!-- FIN DE GRUPOS  -->

<div id="principal"> <!-- fin de todo el contenido -->
<div style="padding: 12px;">
<br>
	<div  class="" style="font-size: 13px;">
	
	    <button type="button" class="btn  btn-warning btn-sm " data-toggle="modal" data-target=".bs-example-modal-lg">  <span class="glyphicon glyphicon-plus"></span> Agregar Usuario</button>
 	    <button type="button" class="btn  btn-warning btn-sm " data-toggle="modal" data-target=".agregarGrupo">  <span class="glyphicon glyphicon-plus"></span> Agregar Grupo</button>
 	    <button type="button" class="btn  btn-warning btn-sm " data-toggle="modal" data-target=".agregarCategoria">  <span class="glyphicon glyphicon-plus"></span> Agregar Categoria</button>
      <button type="button" class="btn  btn-warning btn-sm " id="agregalib" data-toggle="modal" data-target=".agregarLibroo">  <span class="glyphicon glyphicon-plus"></span> Agregar Libro</button>
<!-- <button type="button" class="btn btn-info btn-sm " data-toggle="modal" data-target=".bs-example-modal-lg">  <span class="glyphicon glyphicon-search"></span> Busqueda Especifica</button> -->

</div>
<br>
<br>
<table   class="info-table" id="eventsTable"
       data-toggle="table"
       data-height="400"
 
       data-url="controller/usuarioController.php?accion=buscar"
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
		<div id="cambiaBotones"> 
    <th data-field="action" id="cambiax"  data-formatter="actionFormatter" data-events="actionEvents">Acciones</th> </div>
    </tr>
    </thead>
</table>
  
  
  
  </div> <!-- fin de todo el contenido -->
</div>
          
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
function Hacer(art){
	alert(art);
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
        '<!-- </i> --> Modificar',
        '</a>',
        '-<a  id="EditaUsuario" class="btn btn-danger btn-xs" href="javascript:void(0)" title="Edit">',
        ' <i class="fa fa-times "></i>Elminar ',
        '</a>',
      
    ].join('');
   }
}

/**    '-<a  id="Calificar" class="btn btn-warning btn-xs" href="javascript:void(0)" title="Remove">',
        '<i class="glyphicon glyphicon-user">Calificar</i>',
        '</a>',
        '-<a  id="Mensaje" class="btn btn-default btn-xs" href="javascript:void(0)" title="Remove">',
        '<i class="glyphicon glyphicon-user">Mensaje</i>',
        '</a>',
              '-<a  id="BorraUsuario" class="btn btn-danger btn-xs" href="javascript:void(0)" title="Remove">',
        '<i class="glyphicon glyphicon-remove"></i>',
        '</a>'**/


function Botones(value, row, index) {
	   var sc = $( window ).width();
	   	var name = JSON.stringify(row);
    	var a= $.parseJSON(name);
if(sc<=1){
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






function Categorias(value, row, index) {
	   var sc = $( window ).width();
	   	var name = JSON.stringify(row);
    	var a= $.parseJSON(name);

    return [
        ' <a id="myLink" href="#"  class=" btn btn-info btn-xs s" onclick="Hacer('+a['id']+');">Modificar</a>',
        '<!-- <i class="glyphicon glyphicon-heart"></i> --> ',
        '</a>',
         '-<a  id="Calificar" class="btn btn-warning btn-xs" href="javascript:void(0)" title="Remove">',
        '<i class="glyphicon glyphicon-user">Eliminar</i>',
        '</a>'
    ].join('');

}

function Libros(value, row, index) {
	   var sc = $( window ).width();
	   	var name = JSON.stringify(row);
    	var a= $.parseJSON(name);

    return [
        ' <a id="myLink" href="#"  class=" btn btn-info btn-xs s" onclick="Hacer('+a['id']+');">Modificar</a>',
        '<!-- <i class="glyphicon glyphicon-heart"></i> --> ',
        '</a>',
         '-<a  id="Calificar" class="btn btn-warning btn-xs" href="javascript:void(0)" title="Remove">',
        '<i class="glyphicon glyphicon-user">Eliminar</i>',
        '</a>'
    ].join('');

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
$('.tabgroup > div').hide();
$('.tabgroup > div:first-of-type').show();
$('.tabs a').click(function (e) {
    e.preventDefault();
    var $this = $(this), tabgroup = '#' + $this.parents('.tabs').data('tabgroup'), others = $this.closest('li').siblings().children('a'), target = $this.attr('href');
    others.removeClass('active');
    $this.addClass('active');
    $(tabgroup).children('div').hide();
    $(target).show();
});
//@ sourceURL=pen.js
</script>
<script>


 
/** INSERT INTO `clvbd01`.`cv_carreras` (`idcv_carreras`, `nombre`) VALUES ('1', 'Ing. Industrial'), ('2', 'Ing. Logística'), ('3', 'Ing. Mecatrónica'), ('4', 'Ing. Mecánica'), ('5', 'Ing. Sistemas Computacionales'), ('6', 'Ing. Gestión Empresarial'), ('7', 'Ing. Informática'), ('8', 'Ing. Energías Renovables'), ('9', 'Ing. Electrónica'), ('10', 'Ing. Química'), ('11', 'Contador Público'), ('12', 'Ing. Eléctrica'); **/

 $(document).ready(function() {
 	$("#cargadorrr").load('view/agregaLibro.html');
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
                          $( "#registerButton" ).click(function() {
                         
                          	 $.jStorage.set('nombre', $("#fnombre").val());
                          	 $.jStorage.set('descripcion', $("#fnombre").val());
                          	 $.jStorage.set('limite', $("#llimite").val()); 
                          	 $.jStorage.set('libro', $("#asignalibro").val()); 
                          	
                         // 	$.jStorage.set('libro', titulo);     
                            // var  value = $.jStorage.get("nombre");
                      
                            });
                     });
                 
                 	</script>
             <!--   <h3>Account Registration</h3> -->
                 <div id="content">
           <!--  <h1>Fancy Sliding Form with jQuery</h1> -->
       <div id="slieform">     <div id="wrapper" >
                <div id="steps">
                    <form id="formElem" name="formElem" >
                        <fieldset class="step">
                            <legend>Datos de Grupo</legend>
                            
                               <div class="row">
                                <div class="form-left">Nombre de Grupo:</div>
                                <div class="form-right"><input value="" class="form-control" type="text" id="fnombre" name="fnombre" /></div>
                                <div class="form-error"></div>
                            </div>
                            
						
                            <div class="row">
                                <div class="form-left">Descripcion:</div>
                                <div class="form-right"><input value="" type="text" id="ldesc" name="ldesc" class="form-control" /></div>
                                <div class="form-error"></div>
                            </div>
                            
                             <div class="row">
                                <div class="form-left">Limite de Usuarios:</div>
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
                            
                            
                        </fieldset>
                        <fieldset class="step">
                            <legend>Seleccionar Libro</legend>
                            <input type="hidden" id="nombrb" name="nombrb" class="form-control" value="" />
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
  		$("#nombrb").val(titulo);  // nombrb
  	$( "#libroagregado" ).removeClass( "step-error" );

  	$( "#libroagregado" ).addClass( "successlibro" ); //step-error
  	//$("#respuesta").html(arg+" Seleccionaste el libro "+titulo +" <img src='up/"+img+"'>");
  }
  
   </script>


</body>

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
                        	
                            <div class="row">
                                
                                <div class="form-right"><br><br><input type="hidden" id="asignalibro" name="libroseleccionado" class="form-control" /></div>
                                <div class="form-error"></div>
                            </div>
                       
                    
                           
                        </fieldset>
                        <fieldset class="step"> <!-- step de temas -->
                            <legend>Agregar Temas</legend>
                         
                              <div class="fijaa" style="margin-top: 0px;">
                       
                                    <!--<div id="addtema"></div> -->
                                     <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target=".addtemaa">  <span class="glyphicon glyphicon-plus"></span> Agregar Tema Nuevo</button>
                         
                                      <div id="listertemas"> 
                                      	<div class="alert alert-warning" role="alert">

* Nota: Posteriormente puede agregar mas temas en | Panel de administracion > Manejo de Grupos 
              
</div>
                                      	
                                      </div><!-- listertarea -->
                                    
                             <!--  <a type="button" class="btn btn-default btn-sm " id="addtt">  <span class="glyphicon glyphicon-plus"></span> Agregar Tema</a>
  -->          
                         </div>   
                            
                            <script> 
                  
                
                          $( "#addtt" ).click(function() {
                          	//alert("q");
                          	 tema=tema+1;
 $("#addtema").append('<div class="row" id="tema'+tema+'" > <div class="form-left">2Tema '+tema+'</div> <div class="form-right"><input type="text" id="tema'+tema+'" name="tema'+tema+'" class="form-control" /></div>  <div class="form-error"></div>  </div>');
                         
                          //	 $.jStorage.set('nombre', $("#fnombre").val());
//value = $.jStorage.get('libro');
//alert("test"+value);
                             
                            // var  value = $.jStorage.get("nombre");
                             //  alert(value);
                            });
                 
                 
                 	</script>
                           
                        </fieldset>  <!-- step de temas -->
                        <fieldset class="step"> <!-- step cneusta -->
                            <legend>Encuestas</legend>
                                      	 <div class="fijaa" style="margin-top: 30px">
                            <div class="row">
                                <div class="form-left">Nombre de encuesta</div>
                                <div class="form-right"><input type="text" id="encuestaid" name="encuestaid" class="form-control" /></div>
                                <div class="form-error"></div>
                            </div>
                                             <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target=".encuesta">  <span class="glyphicon glyphicon-plus"></span> Agregar Pregunta</button> (Usted puede dejar esto en blanco y crear encuestas posteriormente)
                            <div id="listerencuesta"></div><!-- listertarea -->
            
    
                         <!--   <a href="#" id="agregarpregunta" onclick="addlister();">Agregar Pregunta</a> -->
                        </div>
                                    <script>
                       var xp = 0;
                        var nup = 0;
                             var numta= 0 ;
                             
                           
                        </script>
                        </fieldset> <!-- step encuestas -->
						<fieldset class="step"> <!-- step tareas-->
                            <legend>Tareas</legend>
                            <div class="fijaa" style="margin-top: 0px">
                            
                          
                                <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target=".addtareaa">  <span class="glyphicon glyphicon-plus"></span> Agregar Nueva Tarea</button> (Usted puede continuar y agregas tareas posteriormente)
                                    <div id="listertarea"></div><!-- listertarea -->
                         <!--   <a href="#" id="agregarpregunta" onclick="addlister();">Agregar Pregunta</a> -->
                        </div>
							
                       </fieldset> <!-- step tareas -->
                        
                        	<fieldset class="step">
                            <legend>Final</legend>
							 <div id="respuestastap2"></div>
                            	 <div id="respuestastap"></div>
                        
                            
                            <div id="respuestastap2"></div>
                            <p class="submit">
                                <button id="registerButton" type="submit">Comprobar Datos</button>
                            </p>
                        </fieldset>
                    </form>
                </div>
                <div id="navigation" style="display:none;">
                    <ul>
                        <li class="selected">
                            <a href="#">Datos</a>
                        </li>
                        <li>
                            <a href="#">Seleccionar Libro</a>
                        </li>
                        <li>
                            <a href="#">Temas</a>
                        </li>
                        <li>
                            <a href="#">Encuesta</a>
                        </li>
						<li>
                            <a href="#">Tarea</a>
                        </li>
                        
                        <li>
                            <a href="#">Confirmar</a>
                        </li>
                    </ul>
                </div>
            </div>
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
    url: 'controller/usuarioController.php?accion=buscar',    
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
                          
                            	$("#listertemas").append('<div id="stema'+ntema+'">Tema'+ntema+':('+$("#temaaa").val()+') | <a href="#" onclick="borrarTema('+ntema+');" >Borrar</a> <hr>   </div>');
                                         var key1 =  'tema'+ntema;
                                           	 $.jStorage.set(key1, $("#temaaa").val());
                                        
                                          	 
                                });
                            });

            function borrarTema(ntema){
            	alert("Borrando Tema "+ ntema);
            	$("#stema"+ntema).html("");
            	var key1 =  'tema'+ntema;
                $.jStorage.set(key1,"temaborrado");

            }
                            	
                               
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
       <div id="cargadorrr"></div>
 
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
  
<script>






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
