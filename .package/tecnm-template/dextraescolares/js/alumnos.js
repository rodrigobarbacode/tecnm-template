$(document).ready(function(){
    $('#agregar').click(function(){

       vacios= validarFormVacio('frmArticulos');

        if(vacios >0 )
        {
            alertify.alert("Debes de llenar todos los campos");
            return false;
        }

        //datos = $('#frmArticulos').serialize();
        var formData = new FormData(document.getElementById("frmArticulos"));

				$.ajax({
					url: "../procesos/registro/agregarRegistro.php",
					type: "post",
					dataType: "html",
					data: formData,
					cache: false,
					contentType: false,
					processData: false,

                    success:function(data)
                    {
                        if(data == 1)
                        {
                          $('#frmArticulos')[0].reset();
                          alertify.success("Registro Correcto");
                          setTimeout(function() {
                            location.href ="../vistas/actual.php";
                          }, 3000);
                        }
                        else
                        {
                            $('#frmArticulos')[0].reset();
							              alertify.error("Error en Registro Grupo Lleno");
						            }
					}
				});
    });
});


$(document).ready(function(){
  $('#registrar').click(function(){

     vacios= validarFormVacio('frmAlumno');

      if(vacios >0 )
      {
          alertify.alert("Debes de llenar todos los campos");
          return false;
      }

      //datos = $('#frmArticulos').serialize();
      var formData = new FormData(document.getElementById("frmAlumno"));

      $.ajax({
        url: "../procesos/alumnos/agregarAlumnos.php",
        type: "post",
        dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,

                  success:function(data)
                  {
                      if(data == 1)
                      {
                        $('#frmAlumno')[0].reset();
                        alertify.success("Registro Correcto");
                        setTimeout(function() {
                          //location.href ="../vistas/actual.php";
                          location.reload();
                        }, 2000);
                      }
                      else
                      {
                          $('#frmAlumno')[0].reset();
                          alertify.error("Error en Registro");
                      }
        }
      });
  });
});

function agregarDato(idCurso)
    {
        $('#noControlU').val(idCurso);
}

$(document).ready(function(){
  $('#btnActualizar').click(function(){

      datos=$('#frmAlumnosU').serialize();
      $.ajax({
          type:"POST",
          data: datos,
          url:"../procesos/alumnos/actualizarAlumno.php",
          success:function(r)
          {
              if(r==1)
              {
                  alertify.success("Se han guardado los cambios");
                  setTimeout(function() {
                    //location.href ="../vistas/actual.php";
                    location.reload();
                  }, 3000);
              }
              else
              {
                  alertify.error("Error al Calificar");
              }
          }
      });
  });
});

