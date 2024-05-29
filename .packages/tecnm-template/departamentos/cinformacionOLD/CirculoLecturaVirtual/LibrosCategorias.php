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
    Datos Grupos
 <?php
  
     if(isset($_SESSION['k_se'])) {
      echo $user = $_SESSION['k_se'];
    }else {
 header("Location: index.php"); 
 exit; 
} 

 ?></title>

    <link rel='stylesheet' href='css/e/normalize.css'>
    <link rel="stylesheet" type="text/css" href="css/e/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/e/bootstrap-datetimepicker.css">
    <link href="css/registro.css" rel="stylesheet">
    <link href="css/principal.css" rel="stylesheet">
    <link rel="stylesheet" href="css/e/bootstrap-theme.min.css">
    <link href="css/font/css/font-awesome.css" rel="stylesheet" media="screen"> 
    <link href="css/triangulos.css" rel="stylesheet"> 

    <script src="css/e/jquery-ui.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type='text/javascript' src="css/e/bootstrap-datetimepicker.js"></script>
    <script src='css/e/angular.min.js'></script>
    <script src="css/e/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
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
        <li><a href="biblioteca.php#section2">Categorias</a></li>
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


<section class="container-fluid " id="section2">
<center><h2 class="glow">Libros por Categorias</h2></center>
<br>
<br>
<?php 
$identificador = $_GET['libroscategoria'];

$url ='http://www.itmexicali.edu.mx/departamentos/cinformacion/CirculoLecturaVirtual/controller/bibliotecaController.php?libc='.$identificador.''; 

$data = file_get_contents($url);
$decode=json_decode($data, true);

?>

   <script>
        $(document).ready(function(){

            LibrosCategorias("#listercat");
});
    
    
     function LibrosCategorias(on) {
 	 
 	// Url libros categoras de php
     	var jsondatos = '<?php echo $url; ?>'; 
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
           if(r.img==""){
           	   img = "img/book.png";
           }else{
           	img = "up/"+r.img;
           }
               //  libro = 'catetoria: '+r.nombre;

                html= ' <div id="box1" class="box blurred-bg tinted miboxcategoria glow">'+
                '<img src="'+img+'" alt="Click para abrir" height="100" >'+
                 ' <h3> '+r.titulo +'</h3> <br>'+
                        '<p>'+
                          '  <a href="'+r.enlace+'" class="btn btn-warning">Ver Libro</a>'+
                       ' </p>'+
                   ' </div>';
                    $(on).append(html);
            });

      
        });
    }

      </script>
        <div class="row text-center">
        <div id="listercat"> </div>
            

        </div>
      </div>



</section>
</body>
</html>
