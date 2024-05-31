
<?php
if ($curp != null) {
    ?>
<!DOCTYPE html>
<html>
<head>
<title>Programa C-Búfalo</title>
    <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style type="text/css">
    .datos{
        font-size: 15px;
    }
</style>
</head>
<body>

<div class=" container-fluid " >
    <div class="container-fluid pl-5" id="PrintArea">
        <img class="w-100" src="img/conveniotec.png">
<div class="datos ">
  <?php
    echo "Concepto: CONVENIO SANTANDER 2092</b><br>";
	echo "<br> Nombre del Aspirante: <b>$nombre $ap_paterno $ap_materno</b><br>";
    echo "Concepto: <b>Ingreso Curso C-Búfalo</b><br>";
    echo "Monto: <b>$$monto.00</b> <br>";
	echo "Vigencia: <b>2 AL 20 AGOSTO 2021</b> <br>";
    echo "<h3><b>$linea</b></h3>";
    ?>
</div>
 <img style="width:350px"  alt="No se pudo generar codigo" src="code/barcode1.php?text=<?php echo $linea; ?>&size=40&print=true"/>
 <br><br>

 <h4><strong>Linea Referenciada Codigo Barra, puedes pagar en bancos y cajeros automáticos SANTANDER  </strong></h4>
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
            Si requieren FACTURA por el servicio que se está pagando en necesario que envies datos fiscales y comprobante de pago al correo: tesoreria@itmexicali.edu.mx 
            
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
<div class="container text-center p-3">
            <button href="javascript:void(0)" id="imprime" class="btn btn-lg btn-danger">
                Imprimir
            </button>
            <br>
    </div>
   </div>




<script src="<?php echo $base ?>js/popper.min.js"></script>
  <script src="<?php echo $base ?>js/jquery.min.js"></script>
  <script src="<?php echo $base ?>js/bootstrap.min.js"></script>
   <script src="js/jquery-2.1.0.js"></script>
  <script src="js/jquery.PrintArea.js"></script>
  <script type="text/javascript">
$("#imprime").click(function (){
$("div#PrintArea").printArea();
})
</script>
</body>
</html>



 <?php
} else {
    header("Location:index.php");
}
?>

