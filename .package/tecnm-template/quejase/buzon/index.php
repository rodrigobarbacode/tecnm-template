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
            <div class=" table-title " style="background: #6200ff;">
                <div class="row">
                    <div class="col-lg-12 text-center">
                      <div class="col-sm-12 col-lg-1">
                           <img src="img/logo.png" width="46" class="m-0" >
                      </div>
                      <div class="col-sm-12 col-lg-10 "> 
                       <div class="row">
                        <div class="col-lg-10 ">
                          <h2 class="text-lg-right text-sm-center" >Buzon de Quejas, Sugerencias y Felicitaciones del ITM</h2>
                        </div>
                         <div class="col-lg-2 ">
                          <h4 class="text-lg-right  text-sm-center "><a href = "login.php" style="color: white;">Iniciar Sesion</a></h4>
                        </div>
                      </div>
                      </div>
                    
						
					</div>
					<!--<div class="col-sm-6">
						<a href="#addProductModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar nuevo producto</span></a>

					</div>-->      
</div>
</div>
              
<div id="resultados"></div><!-- Carga de datos ajax aqui -->
        <div class="row">
            <div class="col-lg-12 text-center">
            <h2>!Bienvenido!</h2>
            <p>En este espacio El TecNM campus Mexicali se complace en conocer sus pensamientos sobre la calidad de la institucion asi como el trato a la comunidad dentro del campus.</p>
          </div>
          <div  class=" col-md-offset-4 col-lg-4 center">
          <form name="tipo_user" id="tipo_user">
          <div class="modal-header">            
            <h4 class="modal-title text-center">Quejas, Sugerencias y Felicitaciones</h4>
          </div>
          <div class="modal-body">          
            <div class="form-group text-center">
              <label>Ingrese el tipo de Usuario al que pertenece</label>
              <select id="usuario" name="usuario" class="form-control"  onchange="usuarioOnChange(this)" required>
                <option selected value="">TIPO:...</option>
                <option value="alumno">Alumno</option>
                <option value="interno">Personal del ITM</option>
                <option value="externo">Externo</option>
              </select>
            </div>

          <div class="form-group text-center" id="interno" style="display:none;">
              <label>Numero Control / Numero Empleado</label>
              <input type="text" name="ctrol" id="ctrol" class="form-control" onkeyup ="dataonchange(this)">
            </div>
              <div class="form-group text-center" id="externo" style="display:none;">
              <label> Nombre Completo </label>
              <input type="text" name="name" id="name" class="form-control" required onkeyup ="dataonchange(this)">
            </div>
            <!--  <div class="form-group">
              <label>Stock</label>
              <input type="number" name="stock" id="stock" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Precio</label>
              <input type="text" name="price" id="price" class="form-control" required>
            </div> -->         
          </div>
          <div class="modal-footer ">
            <div class="row">
              
              <div class="col-12 text-center">

                  <a href="#"  data-target="#altaregistroModal" class="btn btn-success" data-toggle="modal" id="Ir" style="display:none;"><span>Ir a cuestionario</span></a>


                      </div>
            </div>
            
          </div>
        </form>
        </div>

            </div>
        </div>
    </div>
	
	<?php include("html/modal_alta.php");?>
	<!-- Delete Modal HTML -->
<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

  <script src="js/script.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript">
    function usuarioOnChange(sel) {
      if (sel.value==""){
           $("#interno").hide();
           $("#externo").hide();
          $("#ctrol").val("");
          $("#name").val("");
          $("#Ir").hide();

      }else if (sel.value=="externo"){

           $("#externo").show();
           $("#interno").hide();
          $("#ctrol").val("");
          $("#name").val("");
          $("#Ir").hide();
      }else{

         $("#interno").show();
           $("#externo").hide();
           $("#ctrol").val("");
          $("#name").val("");
          $("#Ir").hide();

      }
}
    

  function dataonchange(x){
      if (x.value=="") {
  $("#Ir").hide();
}
else{
  $("#Ir").show();
}
    }

$(document).ready(function () {
        $("#ctrol").keyup(function () {
            var value = $(this).val();

            if (value=="") {

            }else{
             $("#nomuser").val(value); 
            }
            
        });
});
$(document).ready(function () {
        $("#name").keyup(function () {
            var value = $(this).val();

            if (value=="") {

            }else{
             $("#nomuser").val(value); 
            }
            
        });
});
/*
    if ("#name").val()=="" {
$("#ctrol").keyup(function () {
      var value = $(this).val();
      $("#nomuser").text(value);
    }).keyup();
}else{
  $("#name").keyup(function () {
      var value = $(this).val();
      $("#nomuser").text(value);
    }).keyup();
}
*/

  </script>

</body>
</html>                                		                            