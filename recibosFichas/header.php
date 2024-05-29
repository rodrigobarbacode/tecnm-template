    <?php 
        $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
        $raiz="http://localhost:82:82/referencias_pagos/new_lineapago.php";
        $usuarios="http://localhost:82:82/referencias_pagos/alta/altaUsuarios.php";
        $conceptos="http://localhost:82:82/referencias_pagos/alta/altaConceptos.php";
        $arbol="new_lineapago.php";
        $carpeta="alta";
    ?>
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
                    if(base64_decode($_SESSION["usuario_valido"])=='A-NI' ){
                ?>
                <ul class="nav navbar-nav">
                    <li>
                        
                    </li>
                    <li>
                        <a href="
                        <?php 
                            if ( strpos( $url, $arbol  ) ) {
                            echo '../referencias_pagos/new_lineapago.php';
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
                            echo '../referencias_pagos/index.php';
                            }else if (strpos($url, $carpeta)) {
                                echo '../index.php';
                            }
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