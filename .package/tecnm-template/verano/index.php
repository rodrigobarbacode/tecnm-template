  <html lang="es">
  <head>
  <?php
  $mysqli = new mysqli('localhost', 'root', 'Tzuput4r0', 'bbva');
?>
    <meta charset="utf-8">
    <meta name="yerman" content="cco">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PAGOS</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
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
   

       
 <div class="container">

          <form  class="form-signin" action="validar.php" method="POST">
               <div class="modal-header">            
            <h2 class="modal-title text-center">Líneas de aportaciones BBVA</h2>
            <h3 class="modal-title text-center">No. de convenio 1923161</h3>
          </div>
                
            
           <div class="form-group text-center">
			
              <input type="text" name="Ncontrol" id="Ncontrol" class="form-control " placeholder="No. Control" required minlength="8" maxlength="9" required autofocus>
			    
			    
            <br>
			</div>
			
<div class="form-group text-center">
				<select class="form-select" name="tramite" aria-label="Default select example">
				 <option selected>Selecciona una opcion</option>
	 <?php
          $query = $mysqli -> query ("SELECT * FROM conceptos_verano");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores[conc_cve].'">'.$valores[conc_nombre].'</option>';
          }
        ?>
				</select>
				
				 </div>
			    
        
          <div class="modal-footer ">
            <div class="row">

              <div class="col-12 text-center">

                <input type="submit" class="btn btn-lg btn-primary btn-block" value="Generar recibo de pago">
                
              </div>
            </div>
          </div>
        </form>
		 </div> <!-- /container -->
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

  <p>2022 Copyright:Yerman Avila </p>
</footer> 

<!-- Delete Modal HTML -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<script src="js/bootstrap-datepicker.min.js"></script>


</body>
</html>                                		                            