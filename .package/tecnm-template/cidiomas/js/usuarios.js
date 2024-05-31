$(document).ready(function(){
    $('#actualizar').click(function(){
  
        datos=$('#frmAdmin').serialize();
        $.ajax({
            type:"POST",
            data: datos,
            url:"../procesos/usuarios/actualizarUsuario.php",
            success:function(r)
            {
                console.log(r);
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
                    alertify.error("Error al Actualizar");
                }
            }
        });
    });
  });