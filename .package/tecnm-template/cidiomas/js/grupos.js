$(document).ready(function(){
    $('#agregar').click(function(){

       vacios= validarFormVacio('frmGrupos');

        if(vacios >0 )
        {
            alertify.alert("Debes de llenar todos los campos");
            return false;
        }

        //datos = $('#frmArticulos').serialize();
        var formData = new FormData(document.getElementById("frmGrupos"));

				$.ajax({
					url: "../procesos/grupos/agregarGrupo.php",
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
                          $('#frmGrupos')[0].reset();
                          alertify.success("Registro Correcto");
                          setTimeout(function() {
                            //location.href ="../vistas/actual.php";
                            location.reload();
                          }, 3000);
                        }
                        else
                        {
                            $('#frmGrupos')[0].reset();
							              alertify.error("Error en Registro Grupo Lleno o Grupo Duolicado");
						            }
					}
				});
    });
});

function agregarDatoGrupo(idGrupo)
    {
        $.ajax({
                type:"POST",
                data: "idgrupo=" + idGrupo ,
                url:"../procesos/grupos/obtenerGrupo.php",
                success: function(r)
                { 
                    dato = JSON.parse(r);
                    $('#idgrupo').val(dato['idGrupo']);
                    $('#GrupoU').val(dato['Nombre']);
                    $('#NivelU').val(dato['Nivel']);
                    $('#InicioU').val(dato['Horario']);
                    $('#TerminaU').val(dato['Horario']);
                }
            });
}


$(document).ready(function(){
  $('#btnActualizar').click(function(){

      datos=$('#frmGruposU').serialize();
      $.ajax({
          type:"POST",
          data: datos,
          url:"../procesos/grupos/actualizarGrupo.php",
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
                  alertify.error("Error al Actualizar, Grupo con Alumnos");
              }
          }
      });
  });
});


//Eliminacion
function eliminarDato(idGrupo)
{
    alertify.confirm('Desea eliminar el grupo?', function()
    { 
        //alertify.success('Ok')
        $.ajax({
            type:"POST",
            data: "idGrupo=" + idGrupo,
            url:"../procesos/grupos/eliminarGrupo.php",
            success: function(r)
            { 
                if(r==1)
                {
                    alertify.success("Eliminado con exito");
                    setTimeout(function() {
                      //location.href ="../vistas/actual.php";
                      location.reload();
                    }, 3000);
                }
                else
                {
                    alertify.error("Error al Eliminar");
                }
            }
        }); 
    }, function(){ alertify.error('Cancel')});
}