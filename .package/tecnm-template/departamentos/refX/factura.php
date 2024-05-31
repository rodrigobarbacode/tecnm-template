 
 
    <script type="text/javascript">
    $(document).ready(function(){
        
        
 $('.form-control').blur(function()
    {
        $(this).val($(this).val().toUpperCase());
    });
$('#txtrfc').keyup(function(){
	         	 
	        	var myVar1;
	        	window.clearTimeout(myVar1);
	        	myVar1 = setTimeout(validarRfc(), 2000);
		    })	
			$('#txtrfc').blur(function(){
	         	 
	        	var myVar1;
	        	window.clearTimeout(myVar1);
	        	myVar1 = setTimeout(validarRfc(), 2000);
				 
		    })		
    });
	function validarRfc()
		{
			 
			var rfc = $("#txtrfc").val();
				var n = rfc.search(/[A-ZÑ&]{3,4}\d{6}[A-V1-9][A-Z1-9][0-9A]/);
	 if(n == 0){
   $.post( "facturaForm.php", {'txtrfc':''+rfc+'','lineaphp':''+document.getElementById('lineaPHP').innerHTML+''},function( result ) { 
						document.getElementById('facturaForm').innerHTML = result;
				})}
				else
			{
				document.getElementById('facturaForm').innerHTML = "";
				}
			}
			
</script>
 
<form class="form-signin" role="form" action="php/guardar_factura.php" method="POST">
               <h3 class="form-signin-heading">L&iacute;neas de aportaciones Santander <br/>No. de convenio 2092</h3>
                <h4 class="form-signin-heading">Solicitd de Facturas</h4>
                <label >Si requieres FACTURA por el servicio que se está pagando en necesario que acuda  al Departamento de Recursos Financieros en el área de ventanilla el MISMO DÍA en el que se está llevando a cabo el pago presentando: -Ficha de depósito banco, RFC y/o Cédula de identificación fiscal (SAT-Hacienda), Correo electrónico para su envío, No de Cuenta Banco, en caso de ser por medio de cheque y/o transferencia electrónica</label> 

                    <div id="facturaForm">&nbsp;</div>     
            </form>
 