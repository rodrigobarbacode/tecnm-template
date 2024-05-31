
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="Geany 0.20" />
  <link rel="stylesheet" type="text/css" href="css/signin.css">
   <title>SECRETARIA DE EDUCACION PUBLICA, LINEAS REFERENCIADAS DE DEPOSITO</title>
 <link rel="icon" href="img/ico.png">
 
    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>
<script src="js/jquery.PrintArea.js" type="text/JavaScript" language="javascript"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
<script>
 
    $("div.print_button").click(function(){
 
    $("div.PrintArea").printArea({mode: "popup", popClose: false});
 
});
 
</script>

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
	@media print {
  * { margin: 0 !important; padding: 0 !important; }
  #controls, .footer, .footerarea{ display: none; }
  html, body, h3,h2,h1 {
    /*changing width to 100% causes huge overflow and wrap*/
    height:100%; 
    overflow: hidden;
    background: #FFF; 
    font-size: 9.5pt;
	padding-bottom: 15 !important;
  }

  .template { width: auto; left:0; top:0; }
  img { width:50%; padding-bottom:50px !important }
  #encabezado {width:100%;}	
  li { margin: 0 0 10px 20px !important;}
  #imprimir	{ display: none; }
}
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
    $(window).load(function(){
        
        
<?php

 if(isset($_POST['enviar']))
        		{
				if($_POST['factura'] == "1")
				{
					?>
				// alert('entra');
       $('#myModalDatos').modal('show');
        
					<?php
				}	
				}
?>
       
    });
</script>
<script type="text/javascript">

      function imprime_hoja()
            {
            for (i = 0; i < document.all.length; i++) 
                {
                    if (document.all[i].id.substring(8,0)=="imprimir" )
                    {
                        document.all[i].style.visibility='hidden';
                    }
                }

                self.print();
                setTimeout("muestra()", 7000);
            }
          
      function muestra()
            {
                
                for (i = 0; i < document.all.length; i++) 
                {
                    if (document.all[i].id.substring(8,0)=="imprimir" )
                    {
                        document.all[i].style.visibility='visible';
                    }
                }
                
            }
      window.onload=function(){
                // Una vez cargada la página, el formulario se enviara automáticamente.
                <?php 
                  $cve_usuario=$_SESSION['cve_usuario']; 
                ?>  
        //alert("<?php echo $cve_usuario ?>");
        
        $.post( "php/checkP.php", {'x':'<?php echo $cve_usuario ?>'},function( result ) {
          //document.getElementById('lPUsuario').innerHTML = result;
          //document.getElementById('selectContent').innerHTML = result;
          //document.getElementById('selectContent').innerHTML = "<option value='vaz bn'>vaz bn</option>";
          //document.getElementById('selectContent').innerHTML =;
          document.getElementById('selectContent').innerHTML = "<option value='vaz bn'>-- Seleccionar --</option>"+result;
       })
       // alert(result);
        
      }
</script>
</head>

<body >

 <!-- Modal datos -->
            <div id="myModalDatos" class="modal fade" role="dialog"> 
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Datos Facturacion</h4>
      </div>
      <div class="modal-body">
        <?php 
  
		include("factura.php");
		
		
		?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

      <?PHP 
         /*
         if (isset($_SESSION["usuario_valido"]))
         {
          */
       ?>
                        
                   <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content alert alert-danger" style="background-color:#F2DEDE"  >
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title"><strong>AVISO</strong></h2>
                  </div>
                  <div class="modal-body text-center">
                    <h3><strong>No. DE CONVENIO 2092</strong></h3>
                    <h3> <strong>BANCO SANTANDER</strong></h3>
            <div class="text-left">
            <h4>**Vigencia: 8 y 9 Enero 2020.</h4>

            <h4>
            </h4>
            </div>

            <h3><strong>
            * *  IMPORTANTE  * *</strong></h3>
            <div class="text-left">
            <h4>
            **Alumnos que requieren FACTURA del servicio(R.F.C.).</h4>
            <h4>
            **Pagarán en el banco y deberán presentar en un lapso de 24 hrs hábiles en el departamento de Recursos Financieros la ficha de depósito azul, junto con la cedula de identificación fiscal y un Correo Electrónico para su envio..
            </h4>
             
            <h4>
            **Si haces caso omiso a las instrucciones y pagas la reinscripción, será tu responsabilidad, por lo que el Instituto Tecnológico de Mexicali no se hace responsable de hacer válida tu inscripción, ni de la devolución del dinero.
            </h4>
            </div>
            <h3>
            <strong>
            Atentamente: Recursos Financieros. 
            </strong>
            </h3>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">CERRAR</button>
                  </div>
                </div>

              </div>
            </div>
        <?php
        	   $op = "1";
         require_once ('header.php');
        ?>
        <?php
        		//CHANGED if($_POST['enviar'])
            if(isset($_POST['enviar']))
        		{
        			include("getData.php");
        			?>
                        <div id="printArea">

  			<?php
  			
  			getData($_POST['nocontrol'], 0, $_POST['factura']);
  			
  			?>
                        </div>
                        <div class="container text-center">
                        <button id="imprimir" class="btn btn-lg btn-default" onclick="javascript: imprime_hoja();">
                <span class="glyphicon glyphicon glyphicon-print pull-left"></span>  
            </button> 
            </div>

      <?php
  		}
  		else {
  		?>
             
              <!-- Page Content -->
              <div class="container">

                <form class="form-signin" action="<?php $PHP_SELF; ?>" method="post">
                        <h2 class="form-signin-heading">Pagos Reingreso<br/></h2>
                       
                        <label for="nocontrol" class="sr-only">No. de control</label>
                            <input type="text" id="nocontrol" name="nocontrol" class="form-control" placeholder="No. de Control" required autofocus>
                      <!--   <select class="form-control" name="concepto" required id="selectContent">
                			      
                         </select> -->
                        
                   <input type="radio"  value="1" id="factura01" name="factura" />
                   <label for="factura01"><span ></span >SI <small>requiere factura</small> </label>
                   <input type="radio" value="0" id="factura02" name="factura" checked />
                   <label for="factura02"><span></span>NO <small>requiere factura</small></label>
                        <input class="btn btn-lg btn-primary btn-block" type="submit" name="enviar" value="Generar recibo de pago" />
                      
                  <h5>
                     
                  </h5>
                </form>

              </div> <!-- /container -->
           


     <?php
    		}
    		//sleep(15000);

        //comente estas dos lineas
    		//session_unset();
    		//session_destroy();
        /*
    	 header('location:index.php?error=Iniciar session');
       }
       else{
       header('location:index.php?error=Iniciar session');
       }*/
      ?>
</body>

</html>
