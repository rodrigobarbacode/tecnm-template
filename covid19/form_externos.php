<?php
session_start();
if(isset($_SESSION['cve_usuario'])){
	?>
	
<!DOCTYPE html>
<html>
<head>
  <title>Cuestionario Covid19</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/estilos.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>
 <style>
.switch {
  font-size: 1rem;
  position: relative;
}
.switch input {
  position: absolute;
  height: 1px;
  width: 1px;
  background: none;
  border: 0;
  clip: rect(0 0 0 0);
  clip-path: inset(50%);
  overflow: hidden;
  padding: 0;
}
.switch input + label {
  position: relative;
  min-width: calc(calc(2.375rem * .8) * 2);
  border-radius: calc(2.375rem * .8);
  height: calc(2.375rem * .8);
  line-height: calc(2.375rem * .8);
  display: inline-block;
  cursor: pointer;
  outline: none;
  user-select: none;
  vertical-align: middle;
  text-indent: calc(calc(calc(2.375rem * .8) * 2) + .5rem);
}
.switch input + label::before,
.switch input + label::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: calc(calc(2.375rem * .8) * 2);
  bottom: 0;
  display: block;
}
.switch input + label::before {
  right: 0;
  background-color: #dee2e6;
  border-radius: calc(2.375rem * .8);
  transition: 0.2s all;
}
.switch input + label::after {
  top: 2px;
  left: 2px;
  width: calc(calc(2.375rem * .8) - calc(2px * 2));
  height: calc(calc(2.375rem * .8) - calc(2px * 2));
  border-radius: 50%;
  background-color: white;
  transition: 0.2s all;
}
.switch input:checked + label::before {
  background-color: #08d;
}
.switch input:checked + label::after {
  margin-left: calc(2.375rem * .8);
}
.switch input:focus + label::before {
  outline: none;
  box-shadow: 0 0 0 0.2rem rgba(0, 136, 221, 0.25);
}
.switch input:disabled + label {
  color: #868e96;
  cursor: not-allowed;
}
.switch input:disabled + label::before {
  background-color: #e9ecef;
}
.switch.switch-sm {
  font-size: 0.875rem;
}
.switch.switch-sm input + label {
  min-width: calc(calc(1.9375rem * .8) * 2);
  height: calc(1.9375rem * .8);
  line-height: calc(1.9375rem * .8);
  text-indent: calc(calc(calc(1.9375rem * .8) * 2) + .5rem);
}
.switch.switch-sm input + label::before {
  width: calc(calc(1.9375rem * .8) * 2);
}
.switch.switch-sm input + label::after {
  width: calc(calc(1.9375rem * .8) - calc(2px * 2));
  height: calc(calc(1.9375rem * .8) - calc(2px * 2));
}
.switch.switch-sm input:checked + label::after {
  margin-left: calc(1.9375rem * .8);
}
.switch.switch-lg {
  font-size: 1.25rem;
}
.switch.switch-lg input + label {
  min-width: calc(calc(3rem * .8) * 2);
  height: calc(3rem * .8);
  line-height: calc(3rem * .8);
  text-indent: calc(calc(calc(3rem * .8) * 2) + .5rem);
}
.switch.switch-lg input + label::before {
  width: calc(calc(3rem * .8) * 2);
}
.switch.switch-lg input + label::after {
  width: calc(calc(3rem * .8) - calc(2px * 2));
  height: calc(calc(3rem * .8) - calc(2px * 2));
}
.switch.switch-lg input:checked + label::after {
  margin-left: calc(3rem * .8);
}
.switch + .switch {
  margin-left: 1rem;
}

body {
  padding: 1rem;
}

.dropdown-menu {
  margin-top: .75rem;
}
</style>
  
  <script>
  $( document ).ready(function() {
	  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
  
			
	$("#dischargeform").validate({
  rules: {
    usr: "required",
  },
  messages: {
    usr: "Introducir Nombre.", 
  },
  submitHandler: function(form) {
    $("#myModal").modal('show');
    $('#SubForm').click(function() {
      form.submit();
    });
  }
});

});
  
   
	 
		
</script>

</head>
<body>

<div class="container " >
  <h2 class="text-center">CUESTIONARIO DE DETECCI&Oacute;N DE SIGNOS Y S&Iacute;NTOMAS</h2>
  <h3 class="text-warning">EXTERNOS</h3>
                                        
  <form style="font-weight:bold; font-size:14pt;" method="post" id="dischargeform" action="save_form_externos.php">
  
  <input type="text" class="form-control" id="usr" placeholder="Nombre " name="usr"/>
  <div id="existe" class="text-danger">&nbsp;</div>
  <div id="formulario">
  <p>1:- En los &uacute;ltimos 7 dias ha tenido alguno de los siguientes sintomas:</p>
   
   
   <div class="row ">
<div class="col-sm-6 col-md-6">
     Tos, estornudos 
	</div>
	<div class="col-sm-6 col-md-6 text-right">
     <div class="form-group">
	 <span class="switch switch-lg">
      <input type="checkbox" class="switch" id="switch2" name="switch2">
	   <label class="switch switch-lg" for="switch2"></label>
	   </span>
    </div>
	</div>
</div>
<div class="row ">
<div class="col-sm-6 col-md-6">
     Mal estar general
	</div>
	<div class="col-sm-6 col-md-6  text-right">
     <div class="form-group">
	 <span class="switch switch-lg">
      <input type="checkbox" class="switch" id="switch3" name="switch3">
	   <label class="switch switch-lg" for="switch3"></label>
	   </span>
    </div>
	</div>
</div>
 <div class="row ">
<div class="col-sm-6 col-md-6">
     Dolor de cabeza 
	</div>
	<div class="col-sm-6 col-md-6  text-right">
    <div class="form-group">
	 <span class="switch switch-lg">
      <input type="checkbox" class="switch" id="switch4" name="switch4">
	   <label class="switch switch-lg" for="switch4"></label>
	   </span>
    </div>
	</div>
</div>
   <div class="row ">
<div class="col-sm-6 col-md-6">
     Dificultad para respirar 
	</div>
	<div class="col-sm-6 col-md-6  text-right">
     <div class="form-group">
	 <span class="switch switch-lg">
      <input type="checkbox" class="switch" id="switch5" name="switch5">
	   <label class="switch switch-lg" for="switch5"></label>
	   </span>
    </div>
	</div>
    </div>
	<div class="row">
<div class="col-sm-6 col-md-6">
     Dificultad para respirar 
	</div>
	<div class="col-sm-6 col-md-6  text-right">
     <div class="form-group">
	 <span class="switch switch-lg">
      <input type="checkbox" class="switch" id="switch1" name="switch1">
	   <label class="switch switch-lg" for="switch1"></label>
	   </span>
    </div>
	</div>
    </div>
	<div class="row">
<div class="col-sm-12 col-md-12">
<br>
   <input class="btn btn-primary btn-block btn-lg" type="submit" value="Guardar">
	</div>
	</div>
	</div>
  </form>
</div>

<!-- modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"> 
                 <h3 id="myModalLabel3">Confirmar</h3>

            </div>
            <div class="modal-body">
                <p>Desea guardar este registro?</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">No</button>
                <button class="btn-primary btn" id="SubForm" style="width:120px">SI</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->

</body>
</html>
 <?php
  
}
else
	header("Location:index.php");

?>
