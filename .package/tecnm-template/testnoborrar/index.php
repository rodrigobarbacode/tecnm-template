
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Sylvia Melendrez"/>
    <meta name="author" content="Sylvia Melendrez"/>
	
    <meta property="og:url"                content="http://zilefalreves.com" />
	<meta property="og:type"               content="article" />
	<meta property="og:title"              content="Sylvia Melendrez" />
	<meta property="og:description"        content="Bienvenido a este espacio tuyo y m&iacute;o." />
	<meta property="og:image:url"              content="http://zilefalreves.com/img/team/1.jpg" />
	<meta property="og:image:width" content="400" />
	<meta property="og:image:height" content="300" />

    <title>Sylvia Melendrez</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
 

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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

</head>

<body id="page-top" class="index">
<?php
require_once ('consulta_post.php');
?>

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
                        <a class="page-scroll" href="#portfolio">¡HOLA!</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">¿Qui&Eacute;n soy?</a>
                    </li>
                    
                  <!--  <li>
                        <a class="page-scroll" href="#contact">Contactame</a>
                    </li>-->
                    <li>
					<?php
						session_start(); 
						if( isset($_SESSION["usuario"])){ 
						   echo' <a class="page-scroll" href="logout.php">Logout</a> ';
						}else{
							echo'<a class="page-scroll" data-toggle="modal" href="#loginModal">Login</a>';
						}

					?>
                        
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">&nbsp;</div>
                <div class="intro-heading">#zilefalrev&eacute;s <img src="img/about/1.png"/></div>
               <!-- <a href="#team" class="page-scroll btn btn-xl">Mi Historia</a>-->
            </div>
        </div>
    </header>
 

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">¡HOLA!</h2>
                    <h3 class="section-subheading text-muted">Bienvenido a este espacio tuyo y m&iacute;o.</h3>
					
					<?php 
					
					if( isset($_SESSION["usuario"]))echo'<a href="#portfolioModal2" class="btn btn-primary" data-toggle="modal" ><i class="fa fa-upload"></i> Agregar un post nuevo</a>';
					
					?>
					
                </div>
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
				if( isset($_SESSION["usuario"])){
					
					
					
					if($posts==null){
					
						echo 'No hay post para mostrar';
					
					}else{
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
								<a href="#portfolioModal3" class="portfolio-link edit" data-toggle="modal" data="<?php echo $post['id_post']?>">
									<div class="portfolio-hover">
										<div class="portfolio-hover-content">
											<i class="fa fa-pencil-square-o fa-3x"></i>
										</div>
									</div>
									<div class="imgPostSlyder" style="background-image: url(<?php echo $post['imagen']?>);"></div>
								</a>
								<div class="portfolio-caption">
									<h4><?php echo $post['titulo']?></h4>
									<p class="text-muted"><?php echo $post['subtitulo']?></p>
								</div>
							<?php 
							
							if( isset($_SESSION["usuario"]))echo'<a style="margin-left:30%;margin-top:5px;" id="vistaPrevia" href="#portfolioModal1" class="btn btn-primary" data-toggle="modal"  data="'.$post['id_post'].'"><i class="fa fa-eye"></i> Vista Previa</a>';
					
							?>	
							</div>
							
							
							<?php
							$cont++;
						}
						echo '</div>';
						
					}
					
					
				}else{
					
					
					if($posts==null){
					
						echo 'No hay post para mostrar';
					
					}else{
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
						<a href="hola/index.php?ref=<?php echo $post['id_post']?>" class="portfolio-link ">
									<div class="portfolio-hover">
										<div class="portfolio-hover-content">
											<i class="fa fa-plus fa-3x"></i>
										</div>
									</div>
									<div class="imgPostSlyder" style="background-image: url(<?php echo $post['imagen']?>);"></div>
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
					}
					
					
				}

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
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">¿Qui&Eacute;n soy?</h2>
                    <h3 class="section-subheading text-muted">Licenciada en Derecho y Psicología Clínica.   Paciente e impaciente.   Controlada y descontrolada; mal hablada siempre que se puede.   En fin, aprendiendo en este mundo ambivalente...     Gozo la comida,   reírme a carcajadas   y los cielos que me hacen detenerme.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="team-member">
                        <img src="img/team/1.jpg" class="img-responsive img-circle" alt="">
                        <h4>Sylvia Melendrez</h4>
                        <p class="text-muted">&nbsp;</p>
                        <ul class="list-inline social-buttons">
                             
                            <li><a href="https://www.facebook.com/zilefalreves"><i class="fa fa-facebook"></i></a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                 
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">&nbsp;</p>
                </div>
            </div>
        </div>
    </section>
 
    
    <!-- Contact Section -->
    <!--<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contactame</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Tel/Cel *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Mensaje *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Enviar Mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>-->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; TI@</span>
                </div>
                <div class="col-md-4">
                    
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
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body" id="contenedorPost">
                            <!-- Project Details Go Here -->
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
	  <!-- Modal Form -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
					Cancelar
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" >
				<h2>Agregar Nuevo Post</h2>
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body" id="contenedorPost">
                            <!-- Project Details Go Here -->
							<div class="row" style="text-align:left">
								<form id="formPost" action="insert_post.php" method="post" enctype="multipart/form-data">
									<div class="col-lg-12 col-xl-12 col-md-12">
										<div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Campo requerido</strong></div>
										<div class="form-group">
											<label for="InputTitulo">Titulo :</label>
											<div class="input-group">
												<input type="text" class="form-control" name="InputTitulo" id="InputTitulo" placeholder="Ingrese el titutlo" required>
												<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
											</div>
										</div>
									<!--	<div class="form-group">
											<label for="InputSubTitulo">Subtitulo</label>
											<div class="input-group">
												<input type="text" class="form-control" id="InputSubTitulo" name="InputSubTitulo" placeholder="Ingrese el subtitulo" required>
												<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
											</div>
										</div>-->
										<div class="form-group">
											<label for="InputImagen">Imagen : </label>
											<div class="input-group">
												<input type="file" class="form-control" id="InputImagen" name="InputImagen" placeholder="Seleccione una imagen" required>
												<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
											</div>
											
										</div>
										<div class="form-group">
											<label for="InputDescripcion">Descripcion del post : </label>
											<div class="input-group">
												<textarea name="InputDescripcion" id="InputDescripcion" class="form-control" rows="15" required></textarea>
												<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
											</div>
										</div>
										
										  <div class="form-group">
											<label for="InputPie">Pide de pagina : </label>
											<div class="input-group">
												<input type="text" class="form-control" id="InputPie" name="InputPie" placeholder="Ingrese el pie de pagina" required>
												<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
											</div>
										</div>
										
										<input type="submit" id="create" value="Agregar" class="btn btn-primary btn-block">
										
									</div>
								</form>
							  
							</div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
		  <!-- Modal Edit Form -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
					Cancelar
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" >
				<h2 >Editar Post</h2>
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body" id="contenedorPost">
                            <!-- Project Details Go Here -->
							<div class="row" style="text-align:left">
								<form id="formPost" action="edit_post.php" method="post" enctype="multipart/form-data">
								<div id="data"></div>
									<div class="col-lg-12 col-xl-12 col-md-12">
										<div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Campo requerido</strong></div>
										<div class="form-group">
											<label for="InputTitulo2">Titulo :</label>
											<div class="input-group">
												<input type="text" class="form-control" name="InputTitulo2" id="InputTitulo2" placeholder="Ingrese el titutlo" required>
												<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
											</div>
										</div>
									<!--	<div class="form-group">
											<label for="InputSubTitulo2">Subtitulo</label>
											<div class="input-group">
												<input type="text" class="form-control" id="InputSubTitulo2" name="InputSubTitulo2" placeholder="Ingrese el subtitulo" required>
												<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
											</div>
										</div>-->
										<div class="form-group">
											<label for="InputImagen2">Imagen : </label>
											<div class="input-group">
												<input type="file" class="form-control" id="InputImagen2" name="InputImagen2" placeholder="Seleccione una imagen" >
												<span class="input-group-addon"><a style="text-decoration:none; cursor:pointer;"id="previewActual" class="fa fa-file-image-o openView "  >Ver Imagen Actual</a></span>
											</div>
											<div id="previewImage" style ="margin:2%;"></div>
										</div>
										<div class="form-group">
											<label for="InputDescripcion">Descripcion del post : </label>
											<div class="input-group">
												<textarea name="InputDescripcion2" id="InputDescripcion2" class="form-control" rows="15" required></textarea>
												<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
											</div>
										</div>
										
										  <div class="form-group">
											<label for="InputPie">Pide de pagina : </label>
											<div class="input-group">
												<input type="text" class="form-control" id="InputPie2" name="InputPie2" placeholder="Ingrese el pie de pagina" required>
												<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
											</div>
										</div>
										<div id="buttons">
										</div>
									</div>
								</form>
							  
							</div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
    <!--Modal Login-->
    
    <div class="portfolio-modal modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    Cancelar
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                <h2>Login</h2>
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                           <form method="post" action='login.php' name="login_form">
                                  <p><input type="text" class="form-control" name="user" id="user" placeholder="Usuario" required></p>
                                  <p><input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required></p>
                                  <p><button type="button" class="btn btn-primary" name="submit" id="submit">Iniciar Sesion</button></p>
                           </form>
                        </div>
                        <p id="mensaje"style="color:red;"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <!--<script src="js/jqBootstrapValidation.js"></script>-->
    <!--<script src="js/contact_me.js"></script>-->
	<script src="js/events.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
