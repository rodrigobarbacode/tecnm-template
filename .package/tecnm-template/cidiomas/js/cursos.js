function agregarDatoCurso(idCurso)
    {
        $.ajax({
                type:"POST",
                data: "idCurso=" + idCurso ,
                url:"../procesos/cursos/obtenerDato.php",
                success: function(r)
                { 
                    dato = JSON.parse(r);
                    $('#idCurso').val(dato['idCurso']);
                    $('#noControlU').val(dato['noControl']);
                    $('#grupoU').val(dato['idGrupo']);
                    $('#EstatusU').val(dato['Estatus']);
                }
            });
}

function agregarDato(idCurso)
    {
        $('#noControlU').val(idCurso);
}

$(document).ready(function(){
    $('#btnRegistrar').click(function(){

       vacios= validarFormVacio('frmReingresoU');

        if(vacios >0 )
        {
            alertify.alert("Debes de llenar todos los campos");
            return false;
        }

        //datos = $('#frmArticulos').serialize();
        var formData = new FormData(document.getElementById("frmReingresoU"));

				$.ajax({
					url: "../procesos/reingreso/agregarRegistro.php",
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
                          $('#frmReingresoU')[0].reset();
                          alertify.success("Registro Correcto");
                          setTimeout(function() {
                          }, 1000);
                        }
                        else
                        {
                           alertify.error("Error en Registro Grupo Lleno");
						}
					}
				});
    });
});

$(document).ready(function(){
    $('#btnActualizar').click(function(){
  
        datos=$('#frmCalifU').serialize();
        $.ajax({
            type:"POST",
            data: datos,
            url:"../procesos/cursos/actualizarCalif.php",
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

