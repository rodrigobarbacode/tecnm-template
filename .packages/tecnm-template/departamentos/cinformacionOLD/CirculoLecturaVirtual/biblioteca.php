<?php 
include("../funciones/login.php");
session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
 <?php
  
     if(isset($_SESSION['k_se'])) {
      echo $user = $_SESSION['k_se'];
    }else {
 header("Location: index.php"); 
 exit; 
} 

 ?>

    Biblioteca Virtual</title>

    <link rel='stylesheet' href='css/e/normalize.css'>
    <link rel="stylesheet" type="text/css" href="css/e/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/e/bootstrap-datetimepicker.css">
    <link href="css/registro.css" rel="stylesheet">
    <link href="css/principal.css" rel="stylesheet">
    <link rel="stylesheet" href="css/e/bootstrap-theme.min.css">
    <link href="css/font/css/font-awesome.css" rel="stylesheet" media="screen"> 
    <link href="css/triangulos.css" rel="stylesheet"> 

    <!-- Biblioteca css,conserva la seccion de
    la caterigioa
    <link href="css/biblioteca.css" rel="stylesheet"> -->
    <script src="css/e/jquery-ui.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type='text/javascript' src="css/e/bootstrap-datetimepicker.js"></script>
    <script src='css/e/angular.min.js'></script>
    <script src="css/e/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
 
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  


<script>

    function extraer(texto){
       var etqini='(';
       var etqfin=')';
       var ind0;
       var ind1;
       var parte ="";

  ind0 = texto.indexOf(etqini);
    
    if (ind0 >=0){

      ind1 = texto.indexOf(etqfin);

    if (ind1>ind0)
      parte = texto.substring(ind0+etqini.length, ind1);
    
    }

      return parte;
   
   }
      $(document).ready(function() {
          
          $("#btn-buscar").click(function(){
          
          var cadena=$("#Buscarlibro").val();
            
              if (cadena=='') {

              $("input#Buscarlibro").focus();
               return false;
  
               }

            var aux= extraer(cadena+'');
             // alert("Buscando Libro!"+aux);
           window.open(aux);
            });
        });

            $(function() {
             $( "#Buscarlibro" ).autocomplete({
                   source: 'search.php'
                });
                });


        $('.show-list').click(function(){
	         $('.wrapper').addClass('list-mode');
          });



          $('.hide-list').click(function(){
	           $('.wrapper').removeClass('list-mode');
              });
</script>



 
		 <style>
	
		 </style>


</head>

<body>

    <!-- Navigation -->
<nav class="navbar navbar-trans navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" class="glow" ><label class="glow">CLV</label></a>
    </div>
    <div class="navbar-collapse collapse" id="navbar-collapsible">
      <ul class="nav navbar-nav navbar-left">
      <li><a href="index.php">Inicio</a></li>
        <li><a href="biblioteca.php">Biblioteca</a></li>
        <li><a href="#section2">Categorias</a></li>
        <?php 

if(isset($_SESSION['k_id'])){
  $id   = $_SESSION['k_id'];
      if ($id == 1) {
       echo '<li><a href="nuevo.php">Panel de Administracion</a></li>';
      }

}


 ?>
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
            </div>
             
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

 </script>
    
          </div>
        </div>
      </form>
    </div>
  </div>
</nav>

<section class="container-fluid " id="section1">

  <center><img src="img/logotec.png" height="160"/></center>
    <h2 class="text-center v-center glow">Biblioteca Virtual</h2>

 <div class="row">
  <div class="col-6 col-sm-4"></div>
  <div class="col-6 col-sm-4">
    <div class="input-group ">
      <input type="text" class="form-control" placeholder="Buscar" id="Buscarlibro">
      <span class="input-group-btn">
        <button class="btn btn-warning" type="button" id="btn-buscar">Buscar Libro</button>
      </span>
    </div>
 

  </div>
  <!-- Optional: clear the XS cols if their content doesn't match in height -->
  <div class="clearfix visible-xs-block"></div>
  <div class="col-6 col-sm-4"></div>
</div>
   
   <div class="container "  style=" border-radius: 40px;">
      
      <div class="row">
          
          <div class="col-sm-12 text-center">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1 text-center cuadrito2 hidden-xs">
            <br>

            <p>Aqui podras encontrar todos los libros disponibles en formato digital en 
                  Intituto Tecnologico de Mexicali</p>
       
      <img src="img/Librito.png" width="90">
              <!--  <i class="fa fa-user fa-5x"></i> -->
                </div>
            </div>
          </div>

</section>
               
<section class="container-fluid " id="section2">
<center>   <div class="row">
            <div class="col-lg-12 glow">
                <h2>Categorias</h2>
                <br>
                           </div>
        </div>
        </center>
 
   <script>
        $(document).ready(function(){/* activate scrollspy menu */
            mostrarCat("allgrupos","#listercat");
});
    
    
     function mostrarCat(tipo,on) {
 	 
 	
     	var jsondatos = "controller/bibliotecaController.php?accion"; // allgrupos
        $.getJSON(jsondatos, function(data) {
        	
          var libro ="";
          var html  ="";
          
         var wi = $( window ).width();
          var max;
              if(wi<=1024){
               max=2;
                }else{ 
                max=4;
              }
           
            $.each(data, function(i, r) {
            	var img;
           if(r.img=="null"){
           	   img = "img/libro3.png";
           }else{
           	img = "up/"+r.img;
           }
               //  libro = 'catetoria: '+r.nombre;

                html= ' <div id="box1" class="box blurred-bg tinted miboxcategoria glow">'+
                '<img src="'+img+'" alt="Click para abrir" height="100" >'+
                 ' <h3> '+r.nombre +'</h3> <br>'+
                        '<p>'+
                          '  <a href="LibrosCategorias.php?libroscategoria='+r.id+'" class="btn btn-warning">Ver Libros</a>'+
                       ' </p>'+
                   ' </div>';
                    $(on).append(html);
            });

      
        });
    }

      </script>
      

        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">
        <div id="listercat"> </div>
            

        </div>
      </div>

</section>

    <!-- /.container -->
<!-- 	<script src="js/bootstrap.min.js"></script> -->
	  <script type="text/javascript" src="css/g/bootstrap.min.js"></script>
	    <script type="text/javascript" src="css/g/bootswatch.js"></script>
		 <!-- fin bootstrap fin -->

</body>

</html>
