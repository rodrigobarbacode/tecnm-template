<?php
if(isset($_GET['ref'])){
	
	
	
}else{header('Location: /index.php');}




include ("mostrar_post.php");


	foreach($rows as $row){
		
			$titulo=$row['titulo'];
			$sub=$row['subtitulo'];
			$contenido=$row['contenido'];
			$pie=$row['pie_de_pagina'];
			$imagen=$row['imagen'];
			
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Sylvia Melendrez"/>
    <meta name="author" content="Sylvia Melendrez"/>
 
    
    <meta property="og:url"                content="http://zilefalreves.com/hola/index.php?ref=<?php echo $_GET['ref']?>" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?php echo $titulo?>" />
<meta property="og:description"        content="<?php echo $sub ?>" />
<meta property="og:image:url"              content="http://zilefalreves.com/<?php echo $imagen; ?>" />
<meta property="og:image:width" content="400" />
<meta property="og:image:height" content="300" />
<meta property="fb:page_id" content="1954614984763177" />

 
    <title><?php echo $titulo?></title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/agency.css" rel="stylesheet">
 

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        
    <![endif]-->
    
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<?php
require_once ('../consulta_post.php');
?>
</head>

<body id="page-top" class="index">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"> Sylvia Melendrez</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="../index.php#portfolio">¡HOLA!</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="../index.php#team">¿Qui&Eacute;n soy?</a>
                    </li>
                    
                   <!-- <li>
                        <a class="page-scroll" href="../index.php#contact">Contactame</a>
                    </li>-->
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

 
 

    <!-- Slider -->
    <section id="portfolio" class="bg-light-gray">
       		<div class="row text-center">
            
            
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body" id="contenedorPost">
                            <!-- Project Details Go Here -->
                            		<?php 
									require_once ("../consulta_post.php");
                                    $posts=select();
									$postAMostrar=$_GET['ref'];
									foreach($posts as $post){
										if($post['id_post']==$postAMostrar){
											echo "<h2>".$post['titulo']."</h2>";
											/*echo '<div class="imgPost"style="background-image: url(../'.$post['imagen'].');">
											</div>';*/
											echo '<img class="img-responsive img-centered" src="http://zilefalreves.com/'.$post['imagen'].'" alt="">';
											echo "<p>".$post['contenido']."</p>";
											echo '<ul class="list-inline"><li>'.$post['pie_de_pagina'].'</li></ul>';
											}
									}

                                    ?>     
                        </div>
                      

	<!-- Your share button code -->
	<div class="fb-share-button" 
		data-href="http://zilefalreves.com/hola/index.php?ref=<?php echo $_GET['ref']?>" 
		data-layout="button_count">
	</div>
                    </div>
                </div><!--row-->
            </div><!--container-->
        
        </div>
            
            
            <div class="row">
            
            <div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li> 
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox" id="blogContainer">
		<?php
				$posts=select();

						$cont=0;
						echo '<div class="item active">';	
						foreach($posts as $post){
							
							if($cont==3){
								
								echo '</div>';
								echo '<div class="item">';
								$cont=0;
							}
							
							?>
							
							 <div class="col-md-4 col-sm-6 portfolio-item">
								<a href="index.php?ref=<?php echo $post['id_post']?>" class="portfolio-link" >
									<div class="portfolio-hover">
										<div class="portfolio-hover-content">
											<i class="fa fa-plus fa-3x"></i>
										</div>
									</div>
									<div class="imgPostSlyder" style="background-image: url(<?php echo '../'.$post['imagen']?>);"></div>
								</a>
								<div class="portfolio-caption">
									<h4><?php echo $post['titulo']?></h4>
									<p class="text-muted"><?php echo $post['subtitulo']?></p>
								</div>
							</div>
							
							<?php
							$cont++;
						}
						echo '</div>';


		?>
	

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
                
                
                 
                
            </div>
            
            
        </div>
    </section>

   

    <!-- Team Section -->
 
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; TI@</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        
                        <li><a href="https://www.facebook.com/zilefalreves"><i class="fa fa-facebook"></i></a>
                        </li>
                        
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Politica de Privacidad</a>
                        </li>
                        <li><a href="#">Terminos de Uso</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

	
	 
	
    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Modal View Post -->

	
	
	
	

    

    

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../js/classie.js"></script>
    <script src="../js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <!--<script src="js/jqBootstrapValidation.js"></script>-->
    <!--<script src="js/contact_me.js"></script>-->
	<script src="events.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/agency.js"></script>

</body>

</html>
