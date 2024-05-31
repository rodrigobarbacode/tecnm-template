<?php
include("../funciones/login.php");  
$arg = '';
$arg = $_GET['id'];
$libro = GetJson('http://localhost/CirculoLecturaVirtual/controller/bibliotecaController.php?book=',$arg,""); // $row[0]->img    GRUPO JSON

if(isset($libro[0]->catalogo)){
$categoria =  $libro[0]->catalogo;
}else{
	$categoria = 'Sin libros aun';
}

if($libro[0]->img!=""){
$img =  'up/'.$libro[0]->img;
}else{
	$img= 'img/libro.png';
}

if($libro[0]->titulo!=""){
$titulo =  ''.$libro[0]->titulo;
}else{
	$img= 'Error';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $titulo; ?> | blioteca Virtual Instituto Tecnologico de Mexicali </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/font/css/font-awesome.css" rel="stylesheet" media="screen">  
    <link href="css/g/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/g/bootswatch.min.css" rel="stylesheet">
     <link href="css/biblioteca.css" rel="stylesheet">
    
<script>
$('.show-list').click(function(){
	$('.wrapper').addClass('list-mode');
});

$('.hide-list').click(function(){
	$('.wrapper').removeClass('list-mode');
});
</script>
 <!-- ANGULAR JS -->

<script src='css/e/angular.min.js'></script>
  <!-- ANGULAR JS -->
   <!-- Jqury Version -->
   <script src="css/e/jquery.min.js"></script>
   <!-- fin jquery verision -->


		 <style>
	
		 </style>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default " role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Título: <?php echo $titulo;?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <div style="margin-top: 25px;"></div>
      <!--  <header class="fondod2">
            <p class="glow" style="font-size: 20px; text-align: left;"> Categoria: <?php echo $categoria;?></p>
          
         
      </header>-->

        <hr>






  <div class="row">
    <div class="row">
  <div class="col-md-3">
  	<img  width="260" src="<?php echo $img; ?>"   >
  	
  </div>
  <div class="col-md-8">
  	
  	<div class="alert alert-success" role="alert" style="text-align: left;">
  		Titulo: <?php echo $libro[0]->titulo; ?><br>
  		Autor: <?php echo $libro[0]->autor; ?><br>
  		Edicion: <?php echo $libro[0]->edicion; ?><br>
  		Creado:<?php echo $libro[0]->creado; ?><br>
  		Sobre:<?php echo $libro[0]->d; ?><br>
  		
  	</div>
  	<button type="button" class="btn btn-info" aria-label="Left Align">
  <span  aria-hidden="true"> Ver Libro en linea.</span>
</button>
  	
  </div>
</div>

</div>



<script src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script>
$('.show-list').click(function () {
    $('.wrapper').addClass('list-mode');
});
$('.hide-list').click(function () {
    $('.wrapper').removeClass('list-mode');
});
//@ sourceURL=pen.js
</script>
        <!-- Title -->
        
            <div class="col-lg-12">
                <h3 class="">Categorias</h3>
            </div>
       
   <script>
        $(document).ready(function(){/* activate scrollspy menu */
            mostrarCat("allgrupos","#listercat");
});
    
    
     function mostrarCat(tipo,on) {
 	 
 	
     	var jsondatos = "http://localhost/CirculoLecturaVirtual/controller/bibliotecaController.php?accion"; // allgrupos
        $.getJSON(jsondatos, function(data) {
        	
          var libro ="";
           
            $.each(data, function(i, r) {
            	var img;
           if(r.img=="null"){
           	   img = "img/libro3.png";
           }else{
           	img = "up/"+r.img;
           }
               //  libro = 'catetoria: '+r.nombre;
                 
               libro  = '<div class="col-md-3 col-sm-6 hero-feature"><div class="thumbnail">'+
               '<img src="'+img+'" alt="Click para abrir" height="100" >'+
                   ' <div class="caption">'+
                       ' <h3> '+r.nombre +'</h3>'+
                       ' <p>'+r.des +'</p>'+
                        '<p>'+
                          '  <a href="categoria?id='+r.id +'" class="btn btn-primary">Ver Libros</a>'+
                       ' </p>'+
                   ' </div>'+
                '</div>'+
            '</div>';
                      	
                      	//alert("");
            	       $(on).append(libro);
                
            });
      
        });
    }

      </script>
      

        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">



 <div id="listercat"> </div>
            

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">

                    <p>CLV Biblioteca Virtual</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
<!-- 	<script src="js/bootstrap.min.js"></script> -->
	  <script type="text/javascript" src="css/g/bootstrap.min.js"></script>
	    <script type="text/javascript" src="css/g/bootswatch.js"></script>
		 <!-- fin bootstrap fin -->

</body>

</html>
