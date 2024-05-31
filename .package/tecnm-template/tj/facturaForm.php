
<?php

$servername = "localhost";
$username = "referenciaspagos";
$password = "referenciaspagos";
$dbname = "pagosbanco_new";
$rfc = $_POST["txtrfc"];

 $form = "
<label >*Linea de Pago:</label>
 
                        <input type='text' class='form-control' name='txtLineaPago' placeholder='Línea de pago' required value='".$_POST["lineaphp"]."' readonly='readonly'>
						<label >*Metodo de Pago:</label>
                        <select name='metodo_pago'>
                        <option value='01'>EFECTIVO</option>
                        <option value='02'>CHEQUE NOMINATIVO</option>
                        <option value='03'>TRANSFERENCIA ELECTRÓNICA</option>
                        <option value='04'>TARJETA DE CRÉDITO</option>
                        <option value='05'>MONEDERO ELECTRÓNICO</option>
                        <option value='06'>DINERO ELECTRÓNICO</option>
                        <option value='08'>VALES DE DESPENSA</option>
                        <option value='28'>TARJETA DE DÉBITO</option>
                        <option value='29'>TARJETA DE SERVICIO</option>
                        <option value='99'>OTROS</option>
                        </select>
                    
                    <label >*Razón Social:</label>
                    
                        <input type='text' class='form-control' name='txtRazonSocial' placeholder='Razón Social' required>
                  
                
                    <label >*Codigo Postal:</label>
                    
                      <input type='text' class='form-control' name='txtCP' placeholder='Codigo Postal' required>
                     <!-- <label >*País:</label>
                    
                        <input type='text' class='form-control' name='txtPais' placeholder='País' required=''>-->
                    <label >*Estado:</label>
                    
                        <input type='text' class='form-control' name='txtEstado' placeholder='Estado' required>
                    <label >*Delegación / Municipio:</label>
                    
                        <input type='text' class='form-control' name='txtMunicipio' placeholder='Delegación / Municipio' required>
                 <label >*Ciudad:</label>
                    
                        <input type='text' class='form-control' name='txtCiudad' placeholder='Ciudad' required>
                    
                
                    <label >*Calle:</label>
                    
                        <input type='text' class='form-control' name='txtCalle' placeholder='Calle/Avenida' required>
                
                    <label >*No. Externo:</label>
                    
                        <input type='text' class='form-control' name='txtNoExterno' placeholder='No. Externo' required>
                
                    <label >*No. Interno:</label>
                    
                        <input type='text' class='form-control' name='txtNoInterno' placeholder='No. Interno'  >
                <label >*Colonia:</label>
                    
                        <input type='text' class='form-control' name='txtColonia' placeholder='Colonia/Fracc.' required>
                   
                
                    <label >*Correo:</label>
                     <input type='email' id='cmbEmail' class='form-control' name='txtEmail' placeholder='Correo Electrónico 1'>
                     
                    <label >*Correo2:</label>
                     <input type='email' id='cmbEmail_dos' class='form-control' name='txtEmail_dos' placeholder='Correo Electrónico 2'>
                     
                                 <label >*Telefono:</label>
                     <input type='tel' id='tel' class='form-control' name='txtTel' placeholder='Teléfono'>
                     
               <button class='btn btn-lg btn-primary btn-block' type='submit' name='submit'>Enviar</button>";  
			 
try {
	 
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   
   $sql= "SELECT * FROM solicitud_factura WHERE rfc ='".$rfc."'";
 
$stmt = $conn->query($sql); 
$row = $stmt->fetchObject();
 
//echo $row->filmDescription;

 $form = "
<label >*Linea de Pago:</label>
 
        
                <input type='text' class='form-control' name='txtLineaPago' placeholder='Línea de pago' required value='".$_POST["lineaphp"]."'  readonly='readonly'>
						<label >*Metodo de Pago:</label>
                        <select name='metodo_pago'>
                        <option value='01'>EFECTIVO</option>
                        <option value='02'>CHEQUE NOMINATIVO</option>
                        <option value='03'>TRANSFERENCIA ELECTRÓNICA</option>
                        <option value='04'>TARJETA DE CRÉDITO</option>
                        <option value='05'>MONEDERO ELECTRÓNICO</option>
                        <option value='06'>DINERO ELECTRÓNICO</option>
                        <option value='08'>VALES DE DESPENSA</option>
                        <option value='28'>TARJETA DE DÉBITO</option>
                        <option value='29'>TARJETA DE SERVICIO</option>
                        <option value='99'>OTROS</option>
                        </select>
                    
                    <label >*Razón Social:</label>
                    
                        <input type='text' class='form-control' name='txtRazonSocial' placeholder='Razón Social' required required value='".$row->razon_social."'>
                  
                
                    <label >*Codigo Postal:</label>
                    
                      <input type='text' class='form-control' name='txtCP' placeholder='Codigo Postal' required value='".$row->codigo_postal."'>
                     <!-- <label >*País:</label>
                    
                        <input type='text' class='form-control' name='txtPais' placeholder='País' required=''>-->
                    <label >*Estado:</label>
                    
                        <input type='text' class='form-control' name='txtEstado' placeholder='Estado' required value='".$row->estado."'>
                    <label >*Delegación / Municipio:</label>
                    
                        <input type='text' class='form-control' name='txtMunicipio' placeholder='Delegación / Municipio' required value='".$row->dele_mun."'>
                 <label >*Ciudad:</label>
                    
                        <input type='text' class='form-control' name='txtCiudad' placeholder='Ciudad' required value='".$row->ciudad."'>
                    
                
                    <label >*Calle:</label>
                    
                        <input type='text' class='form-control' name='txtCalle' placeholder='Calle/Avenida' required value='".$row->calle."'>
                
                    <label >*No. Externo:</label>
                    
                        <input type='text' class='form-control' name='txtNoExterno' placeholder='No. Externo' required value='".$row->no_externo."'>
                
                    <label >*No. Interno:</label>
                    
                        <input type='text' class='form-control' name='txtNoInterno' placeholder='No. Interno'  value='".$row->no_interno."'>
                <label >*Colonia:</label>
                    
                        <input type='text' class='form-control' name='txtColonia' placeholder='Colonia/Fracc.' required value='".$row->colonia."'>
                   
                
                    <label >*Correo:</label>
                     <input type='email' id='cmbEmail' class='form-control' name='txtEmail' placeholder='Correo Electrónico 1' value='".$row->email."'>
                     
                    <label >*Correo2:</label>
                     <input type='email' id='cmbEmail_dos' class='form-control' name='txtEmail_dos' placeholder='Correo Electrónico 2' value='".$row->email_dos."'>
                     
                                 <label >*Telefono:</label>
                     <input type='tel' id='tel' class='form-control' name='txtTel' placeholder='Teléfono' value='".$row->tel."'>
                     
               <button class='btn btn-lg btn-primary btn-block' type='submit' name='submit'>Enviar</button>";  
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


echo $form;
?>