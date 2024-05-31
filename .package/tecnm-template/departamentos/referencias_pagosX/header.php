    <?php 
        $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
        $raiz="http://localhost:82:82/departamentos/referencias_pagos/new_lineapago.php";
        $usuarios="http://localhost:82:82/departamentos/referencias_pagos/alta/altaUsuarios.php";
        $conceptos="http://localhost:82:82/departamentos/referencias_pagos/alta/altaConceptos.php";
        $arbol="new_lineapago.php";
        $carpeta="alta";
    ?>
    <script>
	/*function facturas(){
         
        	
        	$.post( "../php/cuentaFacturas.php",{'x':'0'},function( result ) {
        		 
				 // alert(result);
						document.getElementById('facturas').innerHTML = result;
				 
				
			})
        }
		facturas();*/
		</script>
<header> 
 <img src="
    <?php 
        $imgRaiz = 'img/encabezado.png';
        $imgAlta = '../img/encabezado.png';
       // $imgRaiz = 'img/danyLogoItm.png';
       // $imgAlta = '../img/danyLogoItm.png';
/*
        if ($url==$raiz) {
        echo $imgRaiz;
        }else if ($url==$usuarios OR $url==$conceptos) {
            echo $imgAlta;
        }
*/
      if ( strpos($url, $arbol) ) {
        echo $imgRaiz;
      }else if ( strpos($url, $carpeta) ) {
            echo $imgAlta;
      }else{
		  echo $imgRaiz;
		  }
       
    ?>
        " 
 class="img-rounded" id="encabezado"/>
 </header>
  <!--?php
  if($_SESSION["usuario_valido"]=="financieros"){
  ?-->
   <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php   
				 
                    //$financieros= base64_encode('financieros')
                    if(base64_decode($_SESSION["usuario_valido"])=='financieros2019' ){
                ?>
                <ul class="nav navbar-nav">
                    <li>
                        
                    </li>
                    <li>
                        <a href="
                        <?php 
                            if ( strpos( $url, $arbol  ) ) {
                            echo 'new_lineapago.php';
                            }else if ( strpos( $url, $carpeta ) ) {
                                echo '../new_lineapago.php';
                            }
                        ?>
                        "<?php if($op == "1"){echo "class=\"active\"".$op;} ?>>Lineas de Pago</a>
                    </li>
                    <li>
                        <a href="
                        <?php
                           if ( strpos( $url, $arbol  ) ) {
                            echo 'alta/altaConceptos.php';
                            }else if ( strpos( $url, $carpeta ) ) {
                                echo 'altaConceptos.php';
                            }
                        ?>
                        ">Conceptos</a>
                    </li>
                    <li>
                        <a href="
                        <?php
                           if ( strpos( $url, $arbol  ) ) {
                            echo 'alta/altaUsuarios.php';
                            }else if ( strpos( $url, $carpeta ) ) {
                                echo 'altaUsuarios.php';
                            }
                        ?>
                        ">Usuarios</a>
                    </li> 
                    
                    <li>
                        <a href="
                        <?php
                           if ( strpos( $url, $arbol  ) ) {
                            echo 'alta/altaAlu.php';
                            }else if ( strpos( $url, $carpeta ) ) {
                                echo 'altaAlu.php';
                            }
                        ?>
                        ">Alta Alumnos</a>
                    </li>
                    <li>
                        <a href="
                        <?php
                           if ( strpos( $url, $arbol  ) ) {
                            echo 'alta/controlFacturas.php';
                            }else if ( strpos( $url, $carpeta ) ) {
                                echo 'controlFacturas.php';
                            }
                        ?>
                        ">Facturas<span class='badge' style='background:red;margin-left:5px' id="facturas"></span></a>
                    </li>
                </ul>
                <?php } ?>
                 <?php   
                    //$financieros= base64_encode('financieros')
                    if(base64_decode($_SESSION["usuario_valido"])=='FICHA' OR base64_decode($_SESSION["usuario_valido"])=='VIATICOS' OR base64_decode($_SESSION["usuario_valido"])=='CURSO' OR base64_decode($_SESSION["usuario_valido"])=='IDIOMA' OR base64_decode($_SESSION["usuario_valido"])=='ESCOLARES' ){
                ?>
                <ul class="nav navbar-nav">
                	
                    <li>
                        <a href="
                        <?php 
                            if ( strpos( $url, $arbol  ) ) {
                            echo 'new_lineapago.php';
                            }else if ( strpos( $url, $carpeta ) ) {
                                echo '../new_lineapago.php';
                            }
                        ?>
                        "<?php if($op == "1"){echo "class=\"active\"".$op;} ?>>Lineas de Pago</a>
                    </li>
                    
                    <li>
                        <a href="
                        <?php
                           if ( strpos( $url, $arbol  ) ) {
                            echo 'alta/altaAlu.php';
                            }else if ( strpos( $url, $carpeta ) ) {
                                echo 'altaAlu.php';
                            }
                        ?>
                        ">Alta Alumnos</a>
                    </li>
                    
                </ul>
                <?php
					}?>
                
                  <?php   
                    //$financieros= base64_encode('financieros')
                    if(base64_decode($_SESSION["usuario_valido"])=='A-NI' ){
                ?>
                <ul class="nav navbar-nav">
                    <li>
                        
                    </li>
                    <li>
                        <a href="
                        <?php 
                            if ( strpos( $url, $arbol  ) ) {
                            echo 'new_lineapago.php';
                            }else if ( strpos( $url, $carpeta ) ) {
                                echo '../new_lineapago.php';
                            }
                        ?>
                        "<?php if($op == "1"){echo "class=\"active\"".$op;} ?>>Lineas de Pago</a>
                    </li>
                    
                </ul>
                <?php } ?>
                
                <ul class="nav navbar-nav" style="float:right;">
                    <li >
                        <a href="
                        <?php
                           if (strpos($url, $arbol)) {
                            echo 'index.php';
                            }else if (strpos($url, $carpeta)) {
                                echo '../index.php';
                            }else echo 'index.php';
                        ?>
                        "><span class="glyphicon glyphicon-log-out"></span> Cerrar sesión</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--?php
	
}
?-->