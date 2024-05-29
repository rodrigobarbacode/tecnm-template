<?php
	if (empty($_POST['ttipo'])){
		$errors[] = "Ingresa el tipo de Registro.";
	} elseif (!empty($_POST['ttipo'])){
	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $ttipo = mysqli_real_escape_string($con,(strip_tags($_POST["ttipo"],ENT_QUOTES)));
	$reporte = mysqli_real_escape_string($con,(strip_tags($_POST["reporte"],ENT_QUOTES)));
	//$prod_ctry = mysqli_real_escape_string($con,(strip_tags($_POST["category"],ENT_QUOTES)));
	$usuario = mysqli_real_escape_string($con,(strip_tags($_POST["nomuser"],ENT_QUOTES)));

	//$price = floatval($_POST["price"]);
	$datetime  = date('m/d/Y h:i A');
	// REGISTER data into database
	
    $sql = "INSERT INTO quejas(id,folio,usuario, tipo, fecha_hora_queja, reporte, estatus, respuesta_revisor, fecha_hora_atendida, revisor) VALUES (null,' ','$usuario','$ttipo','$datetime','$reporte','ABIERTO',' ',' ',' ')";
    	if ($con->query($sql) === TRUE) {
		$last_id = $con->insert_id;
		$folio=date("Y")."-".$last_id;
		$fol = "UPDATE quejas SET folio='".$folio."' WHERE id='".$last_id."' ";
		if ($con->query($fol) === TRUE) {
		$messages[] = "El Registro ha sido guardado con éxito. Tu Folio es:  ".$folio;
		}else{}
	}else {$errors[] = "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.";}	
} else 
	{
		$errors[] = "desconocido.";
	}
if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				
				<?php
				echo "<script> alert('"."Tu Folio para consultar estado del registro:  ".$folio."'); </script>";
			}
?>			