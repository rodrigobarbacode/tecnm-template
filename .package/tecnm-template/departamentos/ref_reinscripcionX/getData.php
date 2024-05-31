<?php
include'php/conexion.php';
 
?>
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
            }</script>
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

   
<?php 
 // echo $nc.$conc.$factura.$monto;
	  $nc=$_POST["nocontrol"]; 
	 $factura=$_POST["factura"]; 
	 
	include("inc/mod22.php");
 try{
	$sql =  "SELECT * from reingreso WHERE ALU_CTR_BUSCA = '$nc'" ;
	  $stmt = $conn->query($sql);	 
$res = $stmt->fetch(PDO::FETCH_ASSOC); 
	
   }
 

catch(PDOException $e){
     echo "No pudo ejecutarse satisfactoriamente la consulta ($sql) " .
         "en la BD: " . $e->getMessage();;
    exit;  
}  

		switch($res['STATUS'])
   {
	case 'A':
		?>
        <div class="container">
                <div class="container">
        <?php
		
           echo "<br /> GOBIERNO DE MEXICO / SECRETARIA DE EDUCACION PUBLICA<b>";	
		   echo "<br /> TECNOLOGICO NACIONAL DE MEXICO UNIDAD MEXICALI<b>";	
			echo "<br>BANCO SANTANDER</br>" ;
			echo "<br></br>" ;		   
		   echo "<br /> CONVENIO SANTANDER 2092<b>";		
		    echo "<br /> N&uacute;mero de control: <b>" .  $res['ALU_CTR_BUSCA'] . "</b>" ;
            echo "<br /> Nombre del estudiante: <b>" .  $res['ALU_NOM'] . "</b>";
            echo "<br /> Concepto: <b>" . $res['ALU_CONCEPTO'] . "</b>";
            echo "<br /> Monto: <b> $" . $res['ALU_MONTO'] . ".00</b>";
			echo "<br /> Vigencia: <b> " . $res['ALU_PERIODO'] . "</b>";
            $condensacioncita=$factura.$res['CLAVE_PAGO'];
			//$condensacioncita=$factura.$conc;
            $linea = mod22($res['ALU_CTR_MODULO'],$condensacioncita,$res['ALU_MONTO']);
            echo "  <br /><font size=\"5\"><b>Linea referenciada:<div  id='lineaPHP'>".$linea . "</div></b></font> ";
			
			echo "<br /> <font size=\"3\"><b>¿Cómo y dónde puedo pagar? "."</b></font>";	
			echo "<br /> <font size=\"3\"><b>"."</b></font>";	
			echo "<br /> <font size=\"3\"><b>1. Pago en cajeros automáticos SANTANDER, capturar la línea de tu referencia "."</b></font>";	
			echo "<br /> <font size=\"3\"><b>"."</b></font>";	
			echo "<br /> <font size=\"3\"><b>2. Pago en ventanilla de cualquier sucursal bancaria SANTANDER con tu referencia bancaria. "."</b></font>";	
			echo "<br /> <font size=\"3\"><b>"."</b></font>";	
			echo "<br /> <font  size=\"3\"><b>3. Pago por transferencia del mismo banco SANTANDER, a través de internet o aplicación móvil a la cuenta:  65507089334 "."</b></font>";	
			echo "<br /> <font size=\"3\"><b>----SECCION CONCEPTO: capturar dígitos de la línea de referencia. . "."</b></font>";	
			echo "<br /> <font size=\"3\"><b>"."</b></font>";	
			echo "<br /> <font size=\"3\"><b>4. Pago por transferencia de otros bancos SPEI a través de internet o aplicación móvil a la clabe interbancaria SANTANDER: 014020655070893341, "."</b></font>";	
			echo "<br /> <font size=\"3\"><b>----SECCION CONCEPTO: capturar los dígitos de la línea de referencia. "."</b></font>";	
			echo "<br /> <font size=\"3\"><b>-------------------------------------------------------------- "."</b></font>";	
			echo "<br /> <font size=\"5\"><b>Nota: En caso de no capturar los dígitos de tu referencia en la sección de CONCEPTO del banco al pagar con transferencia bancaria, su pago no podrá ser identificado y no podrás reinscribirte"."</b></font>";	


			?>
     </h4>
	 	 <br></br>
		   <h3><strong>Linea Referenciada Codigo Barra </strong></h3>
        <img style="max-width:350px" alt="The Real David Tufts" src="code/barcode.php?text=<?php echo $linea;?>&size=40" />
    
        </div>
        
        <h2 class="container text-center"><strong>AVISO</strong></h2>
      </div>
      <div class="container text-center">
        <h3><strong>NO PAGES EN OXXO!!</strong></h3>
<div class="text-left">
<h4> </h4>

<h4> 
</h4>
</div>

<h3 class="text-center"><strong>
* *  IMPORTANTE  * *</strong></h3>

<h3 class="text-center"><strong>
* *   * *</strong></h3>
<div class="text-left">
<h4>
**Alumnos que requieren FACTURA del servicio(R.F.C.), envia comprobante del deposito o transferencia al correo: tesoreria@itmexicali.edu.mx con todos los datos fiscales .</h4>
<h4>

</h4>
 
<h4>
**Si haces caso omiso a las instrucciones y pagas la reinscripción, será tu responsabilidad, por lo que el Instituto Tecnológico de Mexicali no se hace responsable de hacer válida tu inscripción, ni de la devolución del dinero.
</h4>
</div>
<h3>
<strong>
Atentamente: Recursos Financieros. 
<div class="container text-center">
                        <button id="imprimir" class="btn btn-lg btn-default" onclick="javascript: imprime_hoja();">
                <span class="glyphicon glyphicon glyphicon-print pull-left"></span>  
            </button> 
            </div>
</strong>
</h3>
</div>
        
        <?php
	break;
	
      default:  
	  echo "<br /> <font size=\"4\"><b>Tu número de control es incorrecto, si tuviste cambio de carrera agrega la letra C a tu número de control, o no puedes descargar el recibo por estatus académico, verificalo en tu cuenta de Mindbox"."</b></font>";	
	  echo "<br /> <font size=\"4\"><b>-Si no estuviste inscrito el semestre pasado, tu proceso de reingreso será en casos especiales"."</b></font>";	
	  echo "<br /> <font size=\"4\"><b>-Si presentas algun adeudo, asegurate de cubrirlo previamente"."</b></font>";	
	  

	  
	  
	}	
 
?>
