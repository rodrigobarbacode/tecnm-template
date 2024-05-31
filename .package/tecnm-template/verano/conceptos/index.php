  <?php 
include 'conexion.php';
 ?>
  <html lang="es">
  <head>
     <meta charset="utf-8">
    <meta name="author" content="cco">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conceptos</title>
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <link rel="icon" href="img/ico.png">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            padding-top: 70px;
            /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }
    </style>
	<link rel="icon" href="img/ico.png">
  </head>
  <body>
  <div class="container">
 <img src="img/bbva.png" class="img-rounded" alt="Cinque Terre" /> 
 <!--img src="img/danyLogoItm.png" class="img-rounded" alt="Cinque Terre" /--> 
</div>

    <div class="container-fluid">
   
<div>
  <select>  
    <option value="0">Seleccione:</option>
<?php 

$sql = "SELECT * FROM conceptos_verano";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<option value='". $row["conc_cve"]."'>". $row["conc_cve"]   .$row["conc_nombre"]."</option>";
  }
} else {
  echo "0 results";
}
$con->close();
 ?>

  </select>

</div>
       
 <div class="container">


<form class="form-signin" action="insertar.php" method="post">
   <div class="modal-header">            
            <h2 class="modal-title text-center">Líneas de aportaciones BBVA</h2>
			 <h3 class="modal-title text-center">Alta de Conceptos de Pago</h3>
          </div>



  <div class="form-group text-center">
                  <input type="text" name="conc_cve" id="conc_cve" class="form-control " placeholder="Concepto clave" required minlength="1" maxlength="9" required autofocus>
                           <br>
      </div>

 <div class="form-group text-center">
                   <input type="text" name="conc_nombre" id="conc_nombre" class="form-control " placeholder="Nombre del concepto" required minlength="3" maxlength="100" required autofocus>
                     <br>
      </div>
 <div class="form-group text-center">
                  <input type="text" name="monto" id="monto" class="form-control " placeholder="Monto" required minlength="3" maxlength="9" required autofocus>
                   <br>
      </div>
     <!-- <div class="form-group text-center">
                  <input type="text" name="conc_cve" id="conc_cve" class="form-control " placeholder="Concepto clave" required minlength="1" maxlength="9" required autofocus>
                           <br>
      </div>
       <div class="form-group text-center">
                  <input type="text" name="conc_cve" id="conc_cve" class="form-control " placeholder="Concepto clave" required minlength="1" maxlength="9" required autofocus>
                           <br>
      </div>-->


          <div class="modal-footer ">
            <div class="row">

              <div class="col-12 text-center">

                <input type="submit" class="btn btn-lg btn-primary btn-block" value="Agregar Concepto">
                
              </div>
            </div>
          </div>
         </form>
    		 </div> <!-- /container -->

    </div>



 

<!-- Delete Modal HTML -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<script src="js/bootstrap-datepicker.min.js"></script>


</body>
</html>                                		                            