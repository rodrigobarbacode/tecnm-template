<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Panel de Administracion</title>
  
  
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">

 
   <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
   <!-- fin jquery verision -->
   <script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
        <!-- bootstrap -->
		<!--<link href="css/bootstrap.min.css" rel="stylesheet"> -->
		  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		  
	<!-- 	<script src="js/bootstrap.min.js"></script> -->
	  <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		 <!-- fin bootstrap fin -->
		 
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
			<link href="css/triangulos.css" rel="stylesheet">
			<!-- extras fin -->






  
  <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="/css/result-light.css">
  
    
      <link rel="stylesheet" type="text/css" href="https://rawgit.com/wenzhixin/bootstrap-table/master/src/bootstrap-table.css">
    
  
    
      <script type='text/javascript' src="js/bootstrap-table.js"></script>
    
  
  <style type='text/css'>
    
  </style>
  
</head>
<body>
	assa
	
	
<div id="render_me">
<div id="table">
<table id="StudentInfoListTable">
                <thead>
                    <tr>    
                        <th>Mario Alonso Hernandez</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>Dani</td>
                        </tr>               
                </tbody>
            </table>
  </div>
  <a href="#">Download Test PDF</a>
        
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

	<h2 id="sec0" class="masthead" style="padding: 15px;" >...</h2>
         
 <!-- <div class="alert alert-success" id="eventsResult">
    Here is the result of event.
</div> -->
<div style="padding: 40px;">
	 Aqui podra administrar a los usuarios
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
        <th data-field="nombre">Nombre</th>
        <th data-field="apellido">Apellido</th>
        <th data-field="apellido2">Ap. Materno</th>
        <th data-field="numcontrol">N.Control</th>
		 <th data-field="action" data-formatter="actionFormatter" data-events="actionEvents">Acciones</th>
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
	
	

<script type='text/javascript'>//<![CDATA[ 
/** <button  type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star
</button> **/
function actionFormatter(value, row, index) {
    return [
        '<a  id="VerUsuario" class=" btn btn-info btn-xs s" href="javascript:void(0)" title="Like">',
        '<!-- <i class="glyphicon glyphicon-heart"></i> --> Ver',
        '</a>',
        '-<a  id="EditaUsuario" class="btn btn-success btn-xs" href="javascript:void(0)" title="Edit">',
        'Editar',
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

window.actionEvents = {
    'click #VerUsuario': function (e, value, row, index) {
        alert('You click like icon, row: ' + JSON.stringify(row));
       // console.log(value, row, index);
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
        alert('Califica: ' + JSON.stringify(row));
       // console.log(value, row, index);
    },
      'click #Mensaje': function (e, value, row, index) {
        alert('Enviar Mensaje: ' + JSON.stringify(row));
       // console.log(value, row, index);
    }
};

$(function () {






    var $result = $('#eventsResult');

    $('#eventsTable').on('all.bs.table', function (e, name, args) {
        console.log('Event:', name, ', data:', args);
    })
    .on('click-row.bs.table', function (e, row, $element) {
        $result.text('Event: click-row.bs.table');
    })
    .on('dbl-click-row.bs.table', function (e, row, $element) {
        $result.text('Event: dbl-click-row.bs.table');
    })
    .on('sort.bs.table', function (e, name, order) {
        $result.text('Event: sort.bs.table');
    })
    .on('check.bs.table', function (e, row) {
        $result.text('Event: check.bs.table');
    })
    .on('uncheck.bs.table', function (e, row) {
        $result.text('Event: uncheck.bs.table');
    })
    .on('check-all.bs.table', function (e) {
        $result.text('Event: check-all.bs.table');
    })
    .on('uncheck-all.bs.table', function (e) {
        $result.text('Event: uncheck-all.bs.table');
    })
    .on('load-success.bs.table', function (e, data) {
        $result.text('Event: load-success.bs.table');
    })
    .on('load-error.bs.table', function (e, status) {
        $result.text('Event: load-error.bs.table');
    })
    .on('column-switch.bs.table', function (e, field, checked) {
        $result.text('Event: column-switch.bs.table');
    })
    .on('page-change.bs.table', function (e, size, number) {
        $result.text('Event: page-change.bs.table');
    })
    .on('search.bs.table', function (e, text) {
        $result.text('Event: search.bs.table');
    });
});
//]]>  

</script>

<script src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script><script src='http://parall.ax/parallax/js/jspdf.js'></script>

<script>
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};
doc.fromHTML($('#render_me').get(0), 15, 15, {
    'width': 170,
    'elementHandlers': specialElementHandlers
});
$('a').click(function () {
    doc.save('TestHTMLDoc.pdf');
});
//@ sourceURL=pen.js
</script>
<script src='http://codepen.io/assets/editor/live/css_live_reload_init.js'></script>
</body></html>

</body>


</html>
