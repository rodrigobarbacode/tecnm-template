<?php
  include('validar.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="author" content="Francisco Ruiz">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SDQ </title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">

<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-datepicker3.css">
</head>
<body>

    <div class="container-fluid">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-lg-12 text-center">
                      <div class="row">
                        <div class="col-lg-8 ">
                          <h2 class="text-lg-right text-sm-center">Administrar <b> Quejas, Sugerencias y Felicitaciones</b></h2>
                        </div>
                         <div class="col-lg-4 ">
                          <h2 class="text-lg-right  text-sm-center "><a href = "salir.php" style="color: red;">Cerrar Sesion</a></h2>
                        </div>
                      </div>
						
            
					</div>
					<!--<div class="col-sm-6">
						<a href="#addProductModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar nuevo producto</span></a>
					</div>-->
                </div>
            </div>

			<div class='col-sm-12 col-md-8 pull-lefth'> 

  <div class="form-row">

    <div class="form-group col-md-3  col-sm-2">
     <select id="ttipo" class="form-control" onmouseup ="load(1);">
        <option selected value="">TIPO:...</option>
        <option value="QUEJA">QUEJA</option>
        <option value="SUGERENCIA">SUGERENCIA</option>
        <option value="FELICITACION">FELICITACION</option>
      </select>

    </div>
    <div class="form-group col-md-3  col-sm-2" >
      <select id="stats" class="form-control" onmouseup ="load(1);">
        <option selected value="">ESTATUS:...</option>
        <option value="ABIERTO">ABIERTO</option>
        <option value="PENDIENTE">PENDIENTE</option>
        <option value="ATENDIDO">ATENDIDO</option>
      </select>
    </div>
    <div class="form-group col-md-4 col-sm-6">
      <div id="custom-search-input">
                           <div class="input-group col-md-8"> 
                         	 <input class="form-control" id="date" autocomplete="off" name="date" placeholder="MM/DD/AAAA" type="text" onchange ="load(1);"/>        
                           </div>
                </div>
    </div>
  </div>

			
			</div>

			<div class='col-sm-6 col-md-4 pull-right'>
				
				<div id="custom-search-input">

                            <div class="input-group col-md-12">

                                <input type="text" class="form-control" placeholder="FOLIO"  id="q" onkeyup="load(1);" />
                                <span class="input-group-btn">
                                    <button class="btn btn-info" type="button" onclick="load(1);">
                                      <span class="material-icons" style="font-size: 12px;">&#xe8b6;</span>          
                                    </button>
                                </span>
                            </div>
                </div>
			</div>
			<div class='clearfix'></div>
			<hr>
			<!-- <div id="loader"></div>Carga de datos ajax aqui -->
			<div id="resultados"></div><!-- Carga de datos ajax aqui -->
			<div class='outer_div'></div><!-- Carga de datos ajax aqui -->
            
			
        </div>
    </div>

   
	
	<?php include("html/modal_revision.php");?>
	<!-- Delete Modal HTML -->
<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

  <script src="js/script.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>


<!-- Include Date Range Picker -->
<script>
  $(document).ready(function(){
    var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
      format: 'mm/dd/yyyy',
      container: container,
      todayHighlight: true,
      autoclose: true,
    })
  });

</script>






</body>
</html>                                		                            