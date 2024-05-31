<?php include("../funciones/login.php");  
session_start(); 
$arg = "";
if(isset($_GET['g'])){
  $arg = $_GET['g'];



$url = '';
$row ='http://localhost/CirculoLecturaVirtual/controller/grupoController.php?g='.$arg.''; // $row[0]->img    GRUPO JSON
$tarea  = 'http://localhost/CirculoLecturaVirtual/controller/grupoController.php?tareas='.$arg.''; // $row[0]->img    GRUPO JSON
$tema = 'http://localhost/CirculoLecturaVirtual/controller/grupoController.php?temas='.$arg.''; // $row[0]->img    GRUPO JSON
$encuesta = 'http://localhost/CirculoLecturaVirtual/controller/grupoController.php?encuesta='.$arg.''; // $row[0]->img    GRUPO JSON



if(isset($_SESSION['k_se'])){  
  $sessionk   = $_SESSION['k_se'];
$us = 'http://localhost/CirculoLecturaVirtual/controller/usuarioController.php?usuario='.$sessionk.''; // $row[0]->img
//$validar = usuarioInGrupo($us[0]->id,$_GET['g']);
    }else{
	$validar = 3;
     }


$lmiteUsuarios = $row[0]->limite;
echo '<script> alert('.$lmiteUsuarios.') </script>';	
if(($row[0]->img)==''){
	$imagen="img/cover.png";
}else{
	$imagen = "up/".$row[0]->img;	
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
    <meta charset="utf-8">
 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/font/css/font-awesome.css" rel="stylesheet" media="screen">  
    <link href="css/g//bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
       <link href="css/grupo.css" rel="stylesheet" id="bootstrap-css">
   <script src="js/g/jquery.min.js"></script>
    <script src="js/g.js"></script>
      <script src="css/e/jquery.form.js"></script>
  <!-- toogle -->
   <script src="js/toggle.js"></script>
    <link href="css/toggle.css" rel="stylesheet">
  <!-- toogle  -->
    <style type="text/css">
  
    </style>
    <script src="/js/g/jquery-1.10.2.min.js"></script>
    <script src="js/g/bootstrap.min.js"></script>
    <script type="text/javascript">
$(document).ready(function() {
	var change= false;
$(window).scroll(function(){
    window_y = $(window).scrollTop(); // VALOR QUE SE HA MOVIDO DEL SCROLL
    scroll_critical = parseInt(0); // VALOR DE TU DIV
    if (window_y > scroll_critical) { // SI EL SCROLL HA SUPERADO EL ALTO DE TU DIV
       // ACA MUESTRAS EL OTRO DIV Y EL OCULTAS EL DIV QUE QUIERES
     //  alert(1);
    } else {
       // ACA HACES TODO LO CONTRARIO
      // alert(2);
    }
});
	
	
	
    var $btnSets = $('#responsive'),
    $btnLinks = $btnSets.find('a');
 
    $btnLinks.click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.user-menu>div.user-menu-content").removeClass("active");
        $("div.user-menu>div.user-menu-content").eq(index).addClass("active");
    });
});

$( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.view').hover(
        function(){
            $(this).find('.caption').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.caption').slideUp(250); //.fadeOut(205)
        }
    ); 
});
    </script>

<title>
    

        Circulo de Lectura Virtual
    </title>
</head>
<body>
	<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->

<div class="container">
	<div class="row user-menu-container square">
        <div class="col-md-7 user-details">
            <div class="row coralbg white">
                <div class="col-md-6 no-pad">
                    <div class="user-pad">
                        
                         <h4 class="white"><i class="fa fa-check-circle-o"></i> <?php echo ($row[0]->nombre);?></h4>
                        <h4 class="white"><i class="fa fa-check-circle-o"></i> Libro: <?php echo ($row[0]->libro);?></h4>
                        <h4 class="white"><i class="fa fa-check-circle-o"></i> Autor:</h4>
                      <div id="suscrito"> 
                      
                     <?php if($validar==1){ 

                      ?>
                       <button type="button" class="btn btn-labeled btn-info" id="suscribe" href="#">  <span class="btn-label"><i class="fa fa-pencil"></i></span>Unirme a este grupo</button>
                           
                         <?php 
                           }
					 if($validar==0){
                         ?>
                         <button type="button" class="btn btn-labeled btn-success" id="quitarsus" href="#">  
                         	<span class="btn-label"><i class="fa fa-pencil"></i></span> Estas en este grupo</button>
                         <?php }
                          if($validar==3){
                         ?>
                         <button type="button" class="btn btn-labeled btn-warning" id="quitarsus" href="#">  
                         	<span class="btn-label"><i class="fa fa-pencil"></i></span> Registrate para unirte</button>
                         <?php } ?>
                         </div> 
                           <script>
                          
              	//	var carrera = 1;

      					$( "#suscribe" ).click(function() {
      					$("#suscrito").html("<center><img src='img/loading2.gif' width='50' heigth='50'></center>");
                 		var  pagina ="controller/grupoController.php";
      						 $.ajax({
                        	url:pagina,
                        	method:"post",
                        	data: { iduser: <?php  echo $us[0]->id; ?>, idgrupo: <?php echo $_GET['g']?> , suscribe:"registro"},
                        	cache: false,
                        	success:function(data){

                        		alert("Te haz suscrito!");
                        	$("#suscrito").html(data+'<button type="button" class="btn btn-labeled btn-success" id="quitarsus"'+
                        	'href="#">  <span class="btn-label"><i class="fa fa-pencil"></i></span> '+
                        	 'Estas en este grupo</button>');
                        		
                        	},
                        	error: function(){
                                    alert('ERROR');
                                        }
                              });
						  
						});
                       
                           </script>
                    </div>
                </div>
                <div class="col-md-6 no-pad">
                    <div class="user-image">
                        <img src="<?php echo ($imagen); ?>" class="img-responsive thumbnail">
                    </div>
                </div>
            </div>
            <div class="row overview">
                <div class="col-md-2 user-pad text-center">
                    <h3>Temas</h3>
                    <h4><?php echo count($tema);?></h4>
                </div>
                <div class="col-md-3 user-pad text-center">
                    <h3>Encuestas</h3>
                    <h4>1</h4>
                </div>
                <div class="col-md-2 user-pad text-center">
                    <h3>Tareas</h3>
                    <h4><?php echo count($tarea);?></h4>
                </div>
                
                <div class="col-md-4 user-pad text-center">
                    <h3 style="">Objetivo (<?php echo $row[0]->pts;?>pts)</h3>
                    <h4><?php echo $row[0]->pts;?>pts</h4>
                </div>
                
            </div>
        </div>
        <div class="col-md-1 user-menu-btns">
            <div class="btn-group-vertical square" id="responsive">
                <a href="#" class="btn btn-block btn-default active">
                  <i class="fa fa-comments fa-3x"></i>
                </a>
                <a href="#" class="btn btn-default">
                  <i class="fa fa-tasks fa-3x"></i>
                </a>
                <a href="#" class="btn btn-default">
                  <i class="fa fa-newspaper-o fa-3x"></i>
                </a>
                <a href="#" class="btn btn-default">
                  <i class="fa  fa-question fa-3x"></i>
                </a>
            </div>
        </div>
        <div class="col-md-4 user-menu user-pad">
            <div class="user-menu-content active">
                <h3>
                    Ultimos Comentarios.
                </h3>
                <ul class="user-menu-list">
                    <li>
                        <h4><i class="fa fa-user coral"></i> Usuario comento x tema.</h4>
                    </li>
                     <li>
                        <h4><i class="fa fa-user coral"></i> Usuario comento x tema.</h4>
                    </li>
                     <li>
                        <h4><i class="fa fa-user coral"></i> Usuario comento x tema.</h4>
                    </li>
                  
                    <li>
                        <button type="button" class="btn btn-labeled btn-success" href="#">
                            <span class="btn-label"><i class="fa fa-bell-o"></i></span>Ver mas actividad</button>
                    </li>
                </ul>
            </div>
            <div class="user-menu-content">
                <h3>
                    Ultimas Tareas
                </h3>
                <ul class="user-menu-list">
                    <li>
                        <h4>Tarea <small class="coral"><strong>Nueva</strong> <i class="fa fa-clock-o"></i> 7:42 A.M.</small></h4>
                    </li>
                   
                   
                      <li>
                        <h4>Tarea <small class="coral"><strong>Nueva</strong> <i class="fa fa-clock-o"></i> 7:42 A.M.</small></h4>
                    </li>
                   
                        <button type="button" class="btn btn-labeled btn-danger" href="#">
                            <span class="btn-label"><i class="fa fa-envelope-o"></i></span>Ver Todas las tareas</button>
                    </li>
                </ul>
            </div>
            <div class="user-menu-content">
                <h3>
                   Novedades
                </h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="view">
                            <div class="caption">
                                <p>Libro X</p>
                                 <!--<a href="" rel="tooltip" title="Appreciate"><span class="fa fa-heart-o fa-2x"></span></a> -->
                                <a href="" rel="tooltip" title="Ver Contenido"><span class="fa fa-search fa-2x"></span></a>
                            </div>
                            <img src="img/book.png" class="img-responsive" style="max-height: 120px;">
                        </div>
                        <div class="info">
                            <p class="small" style="text-overflow: ellipsis">Autor</p>
                            <p class="small coral text-right"><i class="fa fa-clock-o"></i> Realizado | 10:42 A.M.</small>
                        </div>
                        <div class="stats turqbg">
                            <span class="fa fa-heart-2o"> <strong></strong></span>
                            <span class="fa fa-eye pull-right"> <strong></strong></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="view">
                            <div class="caption">
                                <p>Libro X</p>
                                <!--<a href="" rel="tooltip" title="Appreciate"><span class="fa fa-heart-o fa-2x"></span></a> -->
                                <a href="" rel="tooltip" title="Ver Contenido"><span class="fa fa-search fa-2x"></span></a>
                            </div>
                            <img src="img/book.png" class="img-responsive" style="max-height: 120px;">
                        </div>
                        <div class="info">
                            <p class="small" style="text-overflow: ellipsis">Autor</p>
                            <p class="small coral text-right"><i class="fa fa-clock-o"></i> Realizado | 10:42 A.M.</small>
                        </div>
                        <div class="stats turqbg">
                            <span class="fa fa-heart-2o"> <strong></strong></span>
                            <span class="fa fa-eye pull-right"> <strong></strong></span>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            <div class="user-menu-content">
                <h2 class="text-center">
                    Ultimas Encuestas
                </h2>
                <center><i class="fa fa-cloud-upload fa-4x"></i></center>
                <div class="share-links">
                    <center><button type="button" class="btn btn-lg btn-labeled btn-success" href="#" style="margin-bottom: 15px;">
                            <span class="btn-label"><i class="fa fa-bell-o"></i></span>A FINISHED PROJECT
                    </button></center>
                    <center><button type="button" class="btn btn-lg btn-labeled btn-warning" href="#">
                            <span class="btn-label"><i class="fa fa-bell-o"></i></span>A WORK IN PROGRESS
                    </button></center>
                </div>
            </div>
        </div>
    </div>
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="<?php echo ($imagen); ?>" class="img-responsive" alt="" style="max-width: 300px;">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Ver en linea: <?php echo ($row[0]->libro); ?>
					</div>
					<div class="profile-usertitle-job">
						
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<!-- <button type="button" class="btn btn-success btn-sm">Follow</button> -->
					<button type="button" class="btn btn-danger btn-sm">Ver libro en linea.</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			  
			  
			  <!-- contenido --->
			       <div class="board">
                    <!-- <h2>W<sup></sup></h2>-->
                    <div class="board-inner">
                    <ul class="nav nav-tabs" id="myTab">
                    <div class="liner"></div>
                     <li class="active">
                     <a href="#home" data-toggle="tab" title="welcome">
                      <span class="round-tabs one">
                              <i class="fa fa-home fa-2x"></i>
                      </span> 
                  </a></li>

                  <li><a href="#profile" data-toggle="tab" title="profile">
                     <span class="round-tabs two">
                         <i class="fa fa-comments fa-2x"></i>
                     </span> 
           </a>
                 </li>
                 <li><a href="#messages" data-toggle="tab" title="bootsnipp goodies">
                     <span class="round-tabs three">
                          <i class="fa fa-tasks fa-1x"></i>
                     </span> </a>
                     </li>

                     <li><a href="#settings" data-toggle="tab" title="blah blah">
                         <span class="round-tabs four">
                              <i class="fa fa-newspaper-o fa-1x"></i>
                         </span> 
                     </a></li>

                     <li><a href="#doner" data-toggle="tab" title="completed" >
                         <span class="round-tabs five">
                              <i class="fa  fa-question fa-1x"></i>
                         </span> </a>
                     </li>
                     
                     </ul></div>

                     <div class="tab-content">
                      <div class="tab-pane fade in active" id="home">

                         <!-- tablas -->
                         
                         <script>
                              function getComentarios(arg,is) {
                              	
                          
                          	var url = "http://localhost/CirculoLecturaVirtual/controller/grupoController.php?comentarios="+arg;
$.getJSON(url, function (data) {
    var tr; // var ii = 1; // data[i].nom
    for (var i = 0; i < data.length; i++) {
        tr = '   <div class="message-item" id="post"><div class="message-inner"><div class="message-head clearfix"><div class="panel panel-info"> <div class="panel-heading">'+
   ' <h3 class="panel-title"><div class="avatar pull-left"><a href="./index.php?qa=user&qa_1=Oleg+Kolesnichenko"><img src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png"></a></div>'+
		'<div class="user-detail"><h5 class="handle">'+data[i].autor+'</h5><div class="post-meta">	<div class="asker-meta"><span class="qa-message-what"></span>'+
				'	<span class="qa-message-when"><span class="qa-message-when-data">'+data[i].fecha+'</span>'+
				'	</span><span class="qa-message-who"><span class="qa-message-who-pad">Autor: </span>'+
				'<span class="qa-message-who-data"><a href="./index.php?qa=user&qa_1=Oleg+Kolesnichenko">'+data[i].autor+'</a></span>'+
	'</span>	</div></div></div></div>  </h3></div> <div class="panel-body" style="width: 100%;"> '+data[i].comentario+'</div></div></div></div>';
      
        
          $('#listerComentarios'+is).append(tr);
       
       
    }
});
     
     
                     }// fin de funcion
                         
                         
                          function grupoJson() {
                          	var limite = <?php  echo $row[0]->limite; ?>;
                          	var url = "http://localhost/CirculoLecturaVirtual/controller/grupoController.php?grupoid=<?php echo $_GET['g']; ?>";
$.getJSON(url,
function (data) {
    var tr; var ii = 1;
    for (var i = 0; i < data.length; i++) {
        tr = $('<tr/>');
        tr.append("<td>" + ii + "</td>");
        tr.append("<td>" + data[i].nom+' '+data[i].ap + "</td>");
        tr.append("<td>" + data[i].img + "</td>");
          $('#megatable2').append(tr);
        ii++;
        if(i==limite){
        	alert("Tope"); // borrar boton suscribe
        }
    }
});
     
     
                     }// fin de funcion
    	$( document ).ready(function() {
    grupoJson();
});
   
                          </script>
                        <center style="font-size: 20px;">Limite de usuarios: <?php  echo $row[0]->limite; ?></center>
<div id="megatable" class="fija">
	 <table id="megatable2"> <thead> <tr> 
   	<th>N</th><th>Nombre</th><th>Imagen</th>
     </tr> </thead> <tbody> 
    	<div id="kome33">
    	
        </div>
 </tbody></table></div>
                         
                         <!-- fin tablas  -->
                         
                         
                         
                         
                        
                      </div>
                      <div class="tab-pane fade" id="profile">
                      	<div class="container2">
         <!--  <h1 class="heading-primary">CSS Responsive Animated Accordion</h1> -->
          <div class="accordion" style="">
            <dl>
            	    	
            	
             <div  class="glow2" style=" padding: 14px;">
  
  <h1 style="font-size: 29px;" >Temas de Grupo</h1>
  <div style="border: 1px #ffffff dotted; padding: 20px;">
    tu comentario suma +1 punto por tema. 
 Nota: se suma +1 punto por comentar 1 tema del foro mas no se suma por cada comentario sobre 1 solo tema. 
 </div>
</div>
            	<?php 
                      
                      for ($x = 0;$x<count($tema);$x++){
                      	  ?>
                      	<script>
                      	$( document ).ready(function() {
                      		
                      	var iter = <?php echo $x; ?>;
                      	var tema = <?php echo $tema[$x]->id; ?>;
                      		 getComentarios(tema,iter);
   
                        });


                      	</script>
                  
                      	<?php
                      	
                   $aux = "'" .$x. "','mensaje".$x."','".$tema[$x]->id."'";
						  echo ' <dt>
                <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">
                '.$tema[$x]->nom.'</a>
              </dt>
              <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
              
			  <div class="container" style="width:100%;margin-left: -0%;">
    <div class="row">
		
            <div class="panel panel-default">
                <div class="panel-body" >        
                <div id="aviso'.$x.'"></div>        
                    <form  accept-charset="UTF-8"  method="POST" style="width:100%;margin-right: -8%;">
                        <textarea class="form-control counted" id="mensaje'.$x.'"  name="mensaje'.$x.'" placeholder="Escribe un mensaje" rows="5" style="margin-bottom:10px;" required></textarea>
                        <h6 class="pull-right" id="counter">0 characters remaining</h6>
                        <button  onclick="comentaren('.$aux.'); return false;"  class="btn btn-info" type="submit" >Enviar mi opinion</button>
                    </form>
                
            </div>
        </div>
	</div>
</div>
              <div id="listerComentarios'.$x.'"></div>
          
               
			     </dd>
              <dt>
              
              '; } ?>
       <script>   
     function comentaren(arg0,arg1,idtema){
     	var ide = "#"+arg1;
     	var msj = "#aviso"+arg0;
   var mensaje = $(ide).val();
     	//alert(mensaje);
     	if($(ide).val()==''){
       $(msj).html("<h1>Error no hay ningun comentario</h1>");
      }else{
      	if($(ide).val().length<300){
      		 $(msj).html("El comentario debe contener al menos 300 caracteres");
      		 alert("El comentario debe contener al menos 300 caracteres");
      	}else{
      		// Todo bien
      		var pagina = "http://localhost/CirculoLecturaVirtual/controller/grupoController.php";
      		$(msj).html("<center><img src='img/loading2.gif' width='50' heigth='50'></center>");
      		   $.ajax({
                        	url:pagina,
                        	method:"post",
                        	data: { idgrupo: "<?php echo $_GET['g'];?>", idtema: idtema ,contenido:mensaje, comentartema: "registrar" , idusuario:<?php echo $us[0]->id; ?> },
                        	cache: false,
                        	success:function(data){
                        		if(data==1){
                        			$(msj).html("Comentario enviado exitosamente!");
                        			$('#listerComentarios'+arg0).html("");
                        			getComentarios(idtema,arg0);
                        			 
                        		}else{	$(msj).html(data);}
                       
                        	},
                        	error: function(){
                        alert('ERROR');
                    }
                        });
      		
      //	alert("ok"+idtema);
      	}
      }
     
     }
       </script>
             <!-- contenedor de mensajes -->
                  
               <div class="container" style="width: 100%;" id="post">
    <div class="qa-message-list" id="wallmessages">
    	
    	   	<!-- inicio mensaje 
   <div class="message-item" id="m1"><div class="message-inner"><div class="message-head clearfix"><div class="panel panel-info"> <div class="panel-heading">
    <h3 class="panel-title"><div class="avatar pull-left"><a href="./index.php?qa=user&qa_1=Oleg+Kolesnichenko"><img src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png"></a></div>
		<div class="user-detail"><h5 class="handle">Tipo</h5><div class="post-meta">	<div class="asker-meta"><span class="qa-message-what"></span>
					<span class="qa-message-when"><span class="qa-message-when-data">Fecha</span>
					</span><span class="qa-message-who"><span class="qa-message-who-pad">by </span>
				<span class="qa-message-who-data"><a href="./index.php?qa=user&qa_1=Oleg+Kolesnichenko">Tipo</a></span>
	</span>	</div></div></div></div>  </h3></div> <div class="panel-body"> Mensaje</div></div></div></div>
	 final  -->
								
    	
    	
	</div>
</div><!-- conetenedor mensajes -->
               
              
            </dl>
          </div>
        </div>
                      
                          
                          
                      </div>
                      <div class="tab-pane fade fondito" id="messages"> <!-- tab tareas -->
                        <!--  Tareas <h3 class="head text-center">Bootsnipp goodies</h3> -->
                        <main contenteditable='false' id='notebook'>
  <h1>Tareas</h1>
  <p>Estas son algunas tareas que puedes realizar.</p>
                
  <ul>
          <?php
                        
                        for($e=0;$e<count($tarea);$e++){
                        	//
                           echo '<li>'.$tarea[$e]->nom.'</li>';
						  
                        }
                        
                        ?>
  </ul>
    <button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target=".agregartt">  <span class="glyphicon glyphicon-plus"></span> Subir Tarea</button>
 	  
</main>
                        
                        
                        	<!-- Agregar  libro -------------------------------------- -->
		
		<div class="modal fade agregartt" id="#calificaModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

     <div class="panel panel-default" >
         <div class="negroFondo " style="padding: 10px;color:#fff;">Agrega Un nuevo libro a la biblioteca</div>
            <div class="panel-body">
       
  <div id="messageLibro">

</div>
            <div class="panel panel-default">
 

                <div class="panel-body form-horizontal ">
                	<form id="addTareass" action="controller/bibliotecaController.php"  method="post" enctype="multipart/form-data" >
                    
                    
                    
                      <div class="form-group">
                        <label for="concept" class="col-sm-3 control-label"> <div id="libroT">  Subir Tarea </div></label>
                        <div class="col-sm-9">
                          <div id="libroC">  <input type="file" class="form-control" name="librofile" id="librofile" > 
                          	<input type="hidden" size="60" name="SubeTarea" id="archivoLibro">
                          	<input type="hidden" id="idtarea" size="60" name="idtarea" >
                          	  </div>
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
                        	
               <span class='glyphicon glyphicon-plus'></span> <input type="submit"   class="btn btn-default preview-add-button" value="  Agregar Nuevo Libro"><br>
                           
                        </div>
                    </div>
                    
                    
                       <center><div id="imagenLibro"></div>
 
 <div id="progress">
       
</div>
    </center>        
         
<script>
$(document).ready(function()
{
	 


	var options = { 
    beforeSend: function() 
    {
    	$("#progress").show();
    	//clear everything
    	$("#bar").width('0%');
    	$("#messageLibro").html("");
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
    	$("#imagenClibro").val("");
    	$("#imgInpLibro").val("");

    },
	complete: function(response) 
	{
		$("#messageLibro").html("<font color='green'>"+response.responseText+"</font>");
		$("#progress").html('');
		$("#imagenLibro").html('');
		$("#imgInpLibro").val("");
	},
	error: function()
	{
		$("#messageLibro").html("<font color='red'> ERROR: unable to upload files</font>");
		$("#progress").html(''); $("#imgInpLibro").val("");
		$("#imagenLibro").html('');

	}
     
}; 

     $("#addTareass").ajaxForm(options);

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
		
		<!-- Fin add libro-->
		
		
                        
                      </div><!-- fin tab tareas -->
                      
                      
                      
                      <div class="tab-pane fade" id="settings">
                         
                          
<section class="container-fluid" id="section4"> 
	<h3 class="text-center" style="color:#000000;">Ultimas Noticias.</h3>
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

                      </div>
                      <div class="tab-pane fade" id="doner">
                      	

<section class="module">
  
  <h1 class="module__heading module__heading--d ">Encuestas Disponibles</h1>

  <ol class="custom-bullet custom-bullet--d" >
   
   <?php
                            
                             for ($x = 0;$x<count($encuesta);$x++){
                             	echo '<li style="font-size: 20px;"> <a  style="font-size: 20px;" target="_blank" href="encuesta?id='.$encuesta[$x]->id.'">'.$encuesta[$x]->nom.'</a></li>';
                             }
                      	  ?>
   
  </ol>
  
</section>
<center>Nota: cada encuesta tiene el valor de +4 puntos.</center>
                      	
                      	
                      	
                            
                   

                          </div>
<div class="clearfix"></div>
</div>

</div>

			  
			  <!--- contneido -->
			  
			  
			  
			  
			  
            </div>
		</div>
	</div>
</div>
<center>

</center>
<br>
<br>
	<script type="text/javascript">
	
	</script>
	<script>
	$( document ).ready(function() {
  

});
function json(arg){
	//alert("as");
	 $.getJSON( "http://localhost/CirculoLecturaVirtual/controller/grupoController.php?g="+arg, function( data ) {

  $.each( data, function( key, r ) {
     alert(r.nombre);
  });
}
	</script>
	   <title><?php echo $row[0]->nombre; ?></title>
	   
	   
	   <script>
(function () {
    var d = document, accordionToggles = d.querySelectorAll('.js-accordionTrigger'), setAria, setAccordionAria, switchAccordion, touchSupported = 'ontouchstart' in window, pointerSupported = 'pointerdown' in window;
    skipClickDelay = function (e) {
        e.preventDefault();
        e.target.click();
    };
    setAriaAttr = function (el, ariaType, newProperty) {
        el.setAttribute(ariaType, newProperty);
    };
    setAccordionAria = function (el1, el2, expanded) {
        switch (expanded) {
        case 'true':
            setAriaAttr(el1, 'aria-expanded', 'true');
            setAriaAttr(el2, 'aria-hidden', 'false');
            break;
        case 'false':
            setAriaAttr(el1, 'aria-expanded', 'false');
            setAriaAttr(el2, 'aria-hidden', 'true');
            break;
        default:
            break;
        }
    };
    switchAccordion = function (e) {
        e.preventDefault();
        var thisAnswer = e.target.parentNode.nextElementSibling;
        var thisQuestion = e.target;
        if (thisAnswer.classList.contains('is-collapsed')) {
            setAccordionAria(thisQuestion, thisAnswer, 'true');
        } else {
            setAccordionAria(thisQuestion, thisAnswer, 'false');
        }
        thisQuestion.classList.toggle('is-collapsed');
        thisQuestion.classList.toggle('is-expanded');
        thisAnswer.classList.toggle('is-collapsed');
        thisAnswer.classList.toggle('is-expanded');
        thisAnswer.classList.toggle('animateIn');
    };
    for (var i = 0, len = accordionToggles.length; i < len; i++) {
        if (touchSupported) {
            accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
        }
        if (pointerSupported) {
            accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
        }
        accordionToggles[i].addEventListener('click', switchAccordion, false);
    }
}());
//@ sourceURL=pen.js
</script>
</body>
</html>


