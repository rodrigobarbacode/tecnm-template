<?php
	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../conexion.php");
	//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $resp_revisor = mysqli_real_escape_string($con,(strip_tags($_POST["resp_revisor"],ENT_QUOTES)));
	//$prod_name = mysqli_real_escape_string($con,(strip_tags($_POST["edit_name"],ENT_QUOTES)));
	$status = mysqli_real_escape_string($con,(strip_tags($_POST["status"],ENT_QUOTES)));
	//$status = mysqli_real_escape_string($con,(strip_tags($_POST["status"],ENT_QUOTES)));
	$revisor =mysqli_real_escape_string($con,(strip_tags($_POST["revisor"],ENT_QUOTES)));
	//$stock = intval($_POST["edit_stock"]);
	
	$datetime  = date('m/d/Y h:i A');

	$id=intval($_POST['edit_id']);
	// UPDATE data into database
    $sql = "UPDATE quejas SET respuesta_revisor='".$resp_revisor."', estatus='".$status."', fecha_hora_atendida='".$datetime."', revisor='".$revisor."' WHERE id='".$id."' ";
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El Registro ha sido actualizado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la actualización falló. Por favor, regrese y vuelva a intentarlo.";
    }
		
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
			}
?>			