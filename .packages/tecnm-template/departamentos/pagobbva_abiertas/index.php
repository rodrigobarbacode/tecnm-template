  <html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="cco">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reinscripcion </title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker3.css">
  </head>
  <body>

    <div class="container-fluid">
      <div class="table-wrapper">
        <div class=" table-title " style="background: #fff; padding: 5px">
          <div class="row">
            <div class="col-lg-12 text-center">
              
             <div class="col-sm-12 col-lg-12 "> 
               <div class="row">
                <div class="col-lg-12 ">
                    <!--<h2 class="text-lg-right text-sm-center align-content-center  " >Buzón  de Quejas, Sugerencias y Felicitaciones del ITM</h2>--> <a href="http://www.itmexicali.edu.mx/"><img src="img/bbva.png" class="img-responsive"></a>  
                </div>

              </div>
            </div>


          </div>
  			 <!--<div class="col-sm-6">
  					<a href="#addProductModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar nuevo producto</span></a>--> 

  				</div>     
        </div>
      </div>
      <!--<div id="resultados"></div>
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>¡Bienvenido!</h2>
          <p>En este espacio El TecNM campus Mexicali se complace en conocer sus pensamientos sobre la calidad de la institución; asi como el trato a la comunidad dentro del campus.</p>
        </div>
        <div  class=" col-md-offset-4 col-lg-4 center">
          <form name="tipo_user" id="tipo_user">
            <div class="modal-header">            
              <h4 class="modal-title text-center">Registro de Quejas, Sugerencias y Felicitaciones</h4>
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
            </div>
            <div class="modal-footer ">
              <div class="row">

                <div class="col-12 text-center">

                  <a href="#"  data-target="#altaregistroModal" class="btn btn-success" data-toggle="modal" id="Ir" style="display:none;"><span>Ir a cuestionario</span></a>


                </div>
              </div>

            </div>
          </form>
        </div>--> 

        <!-- Generar Ficha-->

        <div  class=" col-md-offset-4 col-lg-4 center">


          <form action="validar.php" method="POST">
               <div class="modal-header">            
            <h4 class="modal-title text-center">Descarga tu línea de pago de reinscripción BBVA</h4>
            <h5 class="modal-title text-center">Solamente requieres tu número de control para descargar tu recibo bancario</h5>
          </div>
          <div class="modal-body">          
            <div class="form-group text-center">
              <label>Ingrese el No. de Control</label>
              <input type="text" name="Ncontrol" id="Ncontrol" class="form-control " placeholder="No. Control" required minlength="4" maxlength="9">
			    <label>Ingrese el Monto</label>
			  <input type="text" name="monto" id="monto" class="form-control " placeholder="monto" required minlength="1" maxlength="9">
            </div>

            <!-- <div class="form-group text-center">
              <label>Numero Folio</label>
              <input type="text" name="Nfolio" id="Nfolio" class="form-control" placeholder="Folio">
            </div>  -->   
          </div>
          <div class="modal-footer ">
            <div class="row">

              <div class="col-12 text-center">

                <input type="submit" class="btn btn-success" value="Generar">
                
              </div>
            </div>
          </div>
        </form>
      </div>

   <!--   <div>
     <div id="bootstrap-modal" class="modal fade">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <form name="consulta_usuario" id="consulta_usuario">
                <div class="modal-header">            
                  <h4 class="modal-title">Consulta de Registro</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">          
                  <div id="conte-modal"></div>                      
                </div>
                <div class="modal-footer">
                  <input type="button" class="btn btn-default" data-dismiss="modal" value="Cerrar" id="limpiarcon">
                  <input type="submit" class="btn btn-info" value="Guardar Cambios" >
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>-->


    </div>

 

<!-- Delete Modal HTML -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<script src="js/bootstrap-datepicker.min.js"></script>


</body>
</html>                                		                            