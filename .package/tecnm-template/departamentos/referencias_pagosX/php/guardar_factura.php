<?php 
	include("conexion.php");

	 
 $linea_pago= $_POST['txtLineaPago']; 
 $metodo_pago= $_POST['metodo_pago'];
 $rfc= $_POST['txtRFC'];
 $razon_social= $_POST['txtRazonSocial'];
 $codigo_postal= $_POST['txtCP'];
 $estado= $_POST['txtEstado'];
 $dele_mun= $_POST['txtMunicipio'];
 $colonia= $_POST['txtColonia'];
 $calle= $_POST['txtCalle'];
 $no_externo= $_POST['txtNoExterno'];
 $no_interno= $_POST['txtNoInterno'];
 $ciudad= $_POST['txtCiudad'];
 $email= $_POST['txtEmail'];
 $email_dos= $_POST['txtEmail_dos'];
 $tel= $_POST['txtTel'];
 $fecha= date();
  
 

	 
		mysql_query("INSERT INTO solicitud_factura( linea_pago, metodo_pago, rfc, razon_social, codigo_postal, estado, dele_mun, colonia, calle, no_externo, no_interno, ciudad, email, email_dos, tel, status) VALUES ('$linea_pago','$metodo_pago','$rfc','$razon_social','$codigo_postal','$estado','$dele_mun','$colonia','$calle','$no_externo','$no_interno','$ciudad','$email','$email_dos','$tel','$status')",$conexion);
		
		 echo "INSERT INTO solicitud_factura( linea_pago, metodo_pago, rfc, razon_social, codigo_postal, estado, dele_mun, colonia, calle, no_externo, no_interno, ciudad, email, email_dos, tel, status) VALUES ('".$linea_pago."','".$metodo_pago."','".$rfc."','".$razon_social."','".$codigo_postal."','".$estado."','".$dele_mun."','".$colonia."','".$calle."','".$no_externo."','".$no_interno."','".$ciudad."','".$email."','".$email_dos."','".$tel."','0')";
		 
		 
	header('location: ../new_lineapago.php?ok=1');

 ?>