<?php
error_reporting(0);
include('validar.php');
include "phpqrcode/qrlib.php";  
 
if(!isset($_SESSION['login_user'])){
      header("location:index.php");
      die();
   }

$ncontrol= $_SESSION['login_user'];//numero control
$claveconcep= $_SESSION['nclave'];
$nombre= $_SESSION['nombre'];
$monto= $_SESSION['monto'];
$nconcepto= $_SESSION['concepto'];
  
  
// Datos Fijas
$clavebanco=$claveconcep;
$fecha_vencimiento="2022-12-30";
$arrayValidador2 = array("7", "3", "1"); //obtener digito verificador de importe. arreglo 7,3,1

//validador fijo central
$var_centro="0";
//sacar primer validador
$anio_base="2014";
$mul_year="372";
$mul_mes="31";
$res_mes="1";
$res_dia="1";
//sacar segundo validador
$division=10; //division base 10
//sacar tercer validador
$C=3;
$M=4;
$arrayValidador3 = array("11", "13", "17", "19", "23"); 
$division2=97;
$sumv3=1;
// Datos Variables
//$num_control='M15490914';
$num_control=$ncontrol;
$importe=$monto; //puede ser variable 
$multiplicar=100;// valor para recorrer los 00
//Formula para sacar primer validador
//anio
$tyear=strtotime($fecha_vencimiento);// formateo a fecha valido
$year=date('Y',$tyear);//obtiene el anio de la fecha
$restayear=$year-$anio_base; //resta el anio base
$finalyear=$restayear*$mul_year; //multiplica anio por 372 valor final
//echo "$finalyear";
//mes
$tmes=strtotime($fecha_vencimiento);// formateo a fecha valido
$mes=date('m',$tmes);//obtiene el anio de la fecha
$restames=$mes-$res_mes;
$finalmes=$restames*$mul_mes;
//echo "$finalmes";
//dia
$tdia=strtotime($fecha_vencimiento);// formateo a fecha valido
$dia=date('d',$tdia);
$finaldia=$dia-$res_dia;
//echo "$finaldia";
$finalvalidador1=$finalyear+$finalmes+$finaldia;
//echo"$finalvalidador1";


//Formula para sacar segundo validador

$totalpago=$importe*$multiplicar;
$totalpago=strrev($totalpago);
$totalpago = str_split($totalpago);
//echo "$totalpago";

//$count = count($totalpago);
$count = count((array) $totalpago);
//print_r($count);
$resultado = array();
$j=0;
for($i=0; $i<$count; $i++) {
    
    if ($j==2) {
      $resultado[] = $totalpago[$i] * $arrayValidador2[$j]; 
      $j=0;
    }else {
      $resultado[] = $totalpago[$i] * $arrayValidador2[$j]; 
      $j++;
    }
}
$resultadofinal=array_sum($resultado);

$finalvalidador2 = fmod($resultadofinal, $division);

//print_r($finalvalidador2);



////////////// formula para sacar dígitos verificadores de la referencia validador 3/////////
$cadenaref = $num_control.$clavebanco.$finalvalidador1.$finalvalidador2.$var_centro;
if(strncasecmp($cadenaref, "M", 1) === 0 or strncasecmp($cadenaref, "C", 1) === 0 ){
    
          //echo "si hay";
          if (strncasecmp($cadenaref, "M", 1) === 0) {
           $cadenaref = str_replace("M", $M, $cadenaref);
           $cadenaref = str_replace("m", $M, $cadenaref);
           //echo "$cadenaref";
          }else
          if (strncasecmp($cadenaref, "C", 1) === 0) {
           $cadenaref = str_replace("C", $C, $cadenaref);
           $cadenaref = str_replace("c", $C, $cadenaref);
            // echo "$cadenaref";
          }
  }else {}
      
      $cadenabandera=strrev($cadenaref);
      $cadenabandera = str_split($cadenabandera);

//$count = count($totalpago);
$count = count((array) $cadenabandera);
//print_r($count);
$resultado2 = array();
$j=0;
for($i=0; $i<$count; $i++) {
         if ($j==4) {
      $resultado2[] = $cadenabandera[$i] * $arrayValidador3[$j]; 
      $j=0;
    }else{
    $resultado2[] = $cadenabandera[$i] * $arrayValidador3[$j]; 
      $j++;}
}
//print_r($resultado2);
$resultadofinal2=array_sum($resultado2);
//print_r($resultadofinal2);
$finalvalidador3 = (fmod($resultadofinal2, $division2))+$sumv3;

if ($finalvalidador3<=9) {
$finalvalidador3="0".$finalvalidador3;
}

    
//for
$cadenafinalfinal = $num_control.$clavebanco.$finalvalidador1.$finalvalidador2.$var_centro.$finalvalidador3;
$digverificador=$finalvalidador1.$finalvalidador2.$var_centro.$finalvalidador3;

//echo "$digverificador"."\n";
//echo "$cadenafinalfinal"."\n";
//echo "$resultadofinal2"."\n";
//print_r($digverificador); 
//print_r($test); 



    
    //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;  
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);


    $filename = $PNG_TEMP_DIR.'test.png';
    $errorCorrectionLevel = 'M';
    $matrixPointSize = 8;
    $be=$cadenafinalfinal;
    // user data
        $filename = $PNG_TEMP_DIR.'test'.md5($be.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
        QRcode::png($be, $filename, $errorCorrectionLevel, $matrixPointSize, 2); 


?>

 <html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Francisco Ruiz">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LINEA PAGO </title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
   
    
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


  </head>
  <body>

    <div class="container-fluid" id="PrintArea">
      <div class="table-wrapper">
        <div class=" table-title " style="background: #fff; padding: 5px">
          <div class="row">
            <div class="col-lg-12 text-center">
                <img src="img/bbva.png" class="img-responsive"></a> 
            </div>
            </div>
          </div>
          </div>     
        </div>
      </div>
      </div>
     
       <div class=" container-fluid " id="PrintArea">


    <div class="container-fluid pl-5">
        
<div class="datos ">
  <?php
    echo "<h2 class='text-center'>CONVENIO BBVA 1923161</b><h2>";
  echo "<br> Nombre del Aspirante: <b>$nombre </b><br>";
    echo "Concepto: <b>Aportaciones escolares</b><br>";
    echo "Monto: <b>$$monto</b> <br>";
     echo "<h3>Referencia: <b>$cadenafinalfinal</b></h3>";
    ?>
</div>



 <br><br>

 <h4><strong> PUEDES PAGAR EN:</strong></h4>
 <h4><strong> </strong></h4>
 <h4><strong>•Ventanilla, BBVA.mx, BBVANETCASH.mx, APP Multipagos BBVA: convenio: 001923161 y tu referencia de la ficha de pago </strong></h4>
 <h4><strong>•Cajeros automáticos BBVA: Opción Servicios -> Convenio: 001923161 -> y tu referencia de pago</strong></h4>
 <h4><strong>•Transferencia entre BBVA: 001923161 y tu referencia de pago </strong></h4>
 <h4><strong>•Transferencia SPEI desde cualquier banco a la CLABE INTERBANCARIA: 012914002019231612, tu referencia colocarla en el CONCEPTO </strong></h4>
 <h4><strong>IMPORTANTE: </strong></h4>
 <h4><strong>Si el pago es con transferencia SPEI, deberás poner en el concepto de pago de tu aplicación tu REFERENCIA DE PAGO: 18 dígitos, para poder identificarte de lo contrario, no será posible registrarte </strong></h4>
 <h4><strong> </strong></h4>
 <h4><strong> </strong></h4>
  
  
  <h3><strong>NO PAGES EN OXXO!!!</strong></h3>
   <h4 class="text-center"><strong>
    * *  IMPORTANTE  * *</strong></h4>
     <h3 class="text-center"><strong>
    * *</strong></h3>


    <div class="text-center">
        <h4 class="container text-center"><strong>AVISO</strong></h4>
   
    </div>

    <div class="text-left">
        <h4>
        **Alumnos que requieren FACTURA del servicio(R.F.C.).</h4>
        <h4>
            Si requieren FACTURA por el servicio que se está pagando en necesario que envies datos fiscales y comprobante de pago al correo: tesoreria@itmexicali.edu.mx el mismo día del pago.
        </h4>

        <h4>
            **Si haces caso omiso a las instrucciones y pagas la inscripción, será tu responsabilidad, por lo que el Instituto Tecnológico de Mexicali no se hace responsable de hacer válida tu inscripción, ni de la devolución del dinero.
        </h4>
    </div>
    <h3 class="text-center">
        <strong>
            Atentamente: Recursos Financieros.
        </strong>
    </h3>
</div>

   </div>
<div class="container text-center p-3">
            <button href="javascript:void(0)" id="imprime" class="btn btn-lg btn-danger">
                Imprimir
            </button>
            <br>
  </div>


<script src="js/popper.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-2.1.0.js"></script>
  <script src="js/jquery.PrintArea.js"></script>
  <script type="text/javascript">
$("#imprime").click(function (){
$("div#PrintArea").printArea();
})
</script>

 

    

 
<!--<?php //include("html/modal_alta.php");?>-->
<!-- Delete Modal HTML -->



</body>
</html>  