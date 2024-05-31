<?php
include'php/conexion.php';
 session_start(); 

   if (!(isset($_SESSION["usuario_valido"])) ){
         header('location:index.php?error=Iniciar session');
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
        	   $op = "1";
         require_once ('header.php');
        ?>
<?php 
 // echo $nc.$conc.$factura.$monto;
	  $nc=$_POST["nocontrol"];
	 $conc=$_POST["concepto"];
	 $factura=$_POST["factura"];
	 $monto=$_POST["monto"]; 
	 
	include("inc/mod22.php");
	try{
	$sql = "SELECT ALU_CTR,ALU_NOM,STATUS FROM daluPagos WHERE ALU_CTR = '".$nc."'";
 
	  $stmt = $conn->query($sql);	 
$row = $stmt->fetch(PDO::FETCH_ASSOC); 
 

	if($monto>0){
	$sql="SELECT ".$monto." as CONC_MONTO, CONC_NOM FROM conceptos WHERE CONC_CVE = '$conc'";
	}
	else
	{
		$sql = "SELECT CONC_MONTO, CONC_NOM FROM conceptos WHERE CONC_CVE = '$conc'";
	
	}
	
	  
  $stmt2 = $conn->query($sql);
  $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
    
		switch($row['STATUS'])
   {
	case 'N':
		?>
        <div class="container">
                <div class="container">
        <?php
		
		echo " <h4>Numero de Control: <b>" .  $row['ALU_CTR'] . "</b></h4>" ;
		echo "  <h4>Nombre del Alumno: <b>" .  $row['ALU_NOM'] . "</b></h4>";
		echo "  <h4>Concepto: <b>" . $row2['CONC_NOM'] . "</b></h4>";
		echo "  <h4>Monto: <b> $" . $row2['CONC_MONTO'] . ".00</b></h4>";
		$condensacioncita=$factura.$conc;
        $linea = mod22($row['ALU_CTR'],$condensacioncita,$row2['CONC_MONTO']);
        
         echo " <h4><font size=\"5\"><b>Linea :<div  id='lineaPHP'>".$linea . "</div></b></font>";
        ?>
     </h4>
        <img style="max-width:350px" alt="The Real David Tufts" src="code/barcode.php?text=<?php echo $linea;?>&size=40" />
    
    
        </div>
        
        <h2 class="container text-center"><strong>CONVENIO 2092 Banco SANTANDER</strong></h2>
		<h2 class="container text-center"><strong>NO PAGAR EN OXXO!!</strong></h2>
      </div>
      <div class="container text-center">
        
       
<div class="text-left">
<h4><li></li></h4>


</div>

<h3 class="text-center"><strong>
 FORMAS DE HACER TU PAGO:  </strong></h3>
<div class="text-left">
<h4>
<li> Pago en cajeros automáticos SANTANDER, capturar la línea de 20 dígitos. </li>

<li> Pago en ventanilla de cualquier sucursal bancaria SANTANDER con tu referencia de 20 dígitos. </li>

<li> Pago por transferencia del mismo banco SANTANDER, a través de internet o aplicación móvil a la cuenta:  65507089334</li>
 <font color="RED"> <br>CONCEPTO: capturar 20 dígitos de la línea de referencia</br></font>
 
<li> Pago por transferencia de otros bancos SPEI a través de internet o aplicación móvil a la clabe interbancaria SANTANDER: 014020655070893341 </li>
 <font color="RED"><br>CONCEPTO: capturar los 20 dígitos de la línea de referencia.</br></font>
<font color="RED"><br> Nota: En caso de no capturar los 20 dígitos de la línea, su pago no podrá ser identificado. </br></font>

</h4>
<h4><li>
<font color="BLUE"><br> Para solicitar factura, enviar correo con todos los datos fiscales (razón social, RFC, domicilio, correo y el uso del CFDI), junto con el comprobante de pago, EL MISMO DÍA DEL DEPÓSITO. Es muy
importante atiendas las indicaciones, cualquier duda, contacta al correo: tesoreria@itmexicali.edu.mx.  </br></font>

</li>
</h4>

<div class="row">
    <div class="col-md-5 col-md-offset-4">
<h4 >
<ul class="list-unstyled ">

</ul>
</h4></div>
</div>
 
<h4>

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
	  echo "<br /> <font size=\"5\"><b>Teclea tu numero de control correctamente"."</b></font>";	
	  echo "<br /> <font size=\"6\"><b>No puedes realizar ningún trámite, favor de pasar a Tesorería para aclaraciones"."</b></font>";	
	}	
		
		
//		$linea = mod22($res['ALU_CTR'],"00000000000000",$res1['CONC_MONTO']);  linea original
		//$lineafinal = substr($linea, 4);
		//$lineafinal = $factura . $conc . $lineafinal;
		//echo "<br/><font size=\"6\"><b>Linea :".$lineafinal . "</b></font>";
}
 

catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}  
                
                ?>
				