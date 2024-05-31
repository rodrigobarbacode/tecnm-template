$(document).ready(function(){
    $('#entrar').click(function(){

        vacios= validarFormVacio('frmLogin');

        if(vacios >0 )
        {
            alert("Debes de llenar todos los campos");
            return false;
        }

        datos = $('#frmLogin').serialize();
        $.ajax({
            type:"POST",
            data: datos,
            url:"procesos/login.php",
            success: function(r)
            { 
                if(r==1)
                {
                    window.location = "vistas/inicio.php";
                }
                else
                {
                    alert("Error en Inicio de Sesion");
                }
            }
        });
    });
});

$(document).ready(function(){
    $('#ingresar').click(function(){

        vacios= validarFormVacio('frmLogin');

        if(vacios >0 )
        {
            alert("Debes de llenar todos los campos");
            return false;
        }

        datos = $('#frmLogin').serialize();
        $.ajax({
            type:"POST",
            data: datos,
            url:"procesos/loginAdmin.php",
            success: function(r)
            { 
                if(r==1)
                {
                    window.location = "vistas/inicio.php";
                }
                else
                {
                    alert("Error en Inicio de Sesion");
                }
            }
        });
    });
});