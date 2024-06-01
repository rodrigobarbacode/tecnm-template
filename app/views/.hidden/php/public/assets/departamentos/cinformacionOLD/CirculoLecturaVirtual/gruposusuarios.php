<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Biblioteca Virtual</title>

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
 <script type='text/javascript' src="js/moment-with-locales.js"></script>
 <script type='text/javascript' src="js/bootstrap-datetimepicker.js">
 </script><link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css">
		 <!-- datepicker fin -->
<!-- extras -->
		<link rel="stylesheet" type="text/css" href="css/menuVertical.css">
    <link href="css/admin.css" rel="stylesheet">
    <script src="js/scripts.js"></script>
    <link href="css/stylses.css" rel="stylesheet"><!-- theme -->
    <link rel="stylesheet" href="css/e/bootstrap-theme.min.css">
    <link href="css/e/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/result-light.css">
    <link rel="stylesheet" type="text/css" href="css/e/bootstrap-table.css">
    <script type='text/javascript' src="js/bootstrap-table.js"></script>
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


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="margin:0;min-height: 500px;">
	<table class="info-table"  id="grupostemas"  ></table>
<script>
var pag = "controller/grupoController.php?grupoid=<?php echo $_GET['id'];?>";
         	$('#grupostemas').bootstrapTable({
    url: pag,    
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
        field: 'nom',
        title: 'Nombre'
    },
    
    {
        field: 'ap',
        title: 'Apellido'
    },
     {
    	formatter:'BotonesTemas',
        field: 'price',
        title: 'Evento'
    }, ]
});





function BotonesTemas(value, row, index) {
	   var sc = $( window ).width();
	   	var name = JSON.stringify(row);
    	var a= $.parseJSON(name);
if(sc){
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
        ' <a id="myLink" href="#"  class=" btn btn-info btn-xs s" onclick="PanelGrupo('+a['id']+');">Modificar</a>',
        '<!-- <i class="glyphicon glyphicon-heart"></i> --> ',
        '</a>',
        '-<a  id="EditaUsuario" class="btn btn-warning btn-xs" href="javascript:void(0)" title="Edit">',
        '+ Editar',
        '</a>',
         '-<a  id="Calificar" class="btn btn-danger btn-xs" href="javascript:void(0)" title="Remove">',
        '+ Eliminar',
        '</a>'

    ].join('');
   }
}
</script>
.
</body>

</html>
