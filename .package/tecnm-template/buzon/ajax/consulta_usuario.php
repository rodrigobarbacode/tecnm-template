<?php

require_once ("../conexion.php");
//date_default_timezone_set('America/Tijuana');
	error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
	$Nuser = mysqli_real_escape_string($con,(strip_tags($_REQUEST['Nuser'], ENT_QUOTES)));
	$Nfolio = mysqli_real_escape_string($con,(strip_tags($_REQUEST['Nfolio'], ENT_QUOTES)));
	$sql = "SELECT * FROM quejas where usuario='".$Nuser."' AND folio='".$Nfolio."'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each rows
	while($row = $result->fetch_assoc()) {
		$q_id=$row['id'];
		$q_user=$row['usuario'];	
		$q_folio=$row['folio'];
		$q_tipo=$row['tipo'];
		$q_horac=$row['fecha_hora_queja'];
		$q_reporte=$row['reporte'];
		$q_status=$row['estatus'];	
		$q_horaa=$row['fecha_hora_atendida'];
		$q_resprevisor=$row['respuesta_revisor'];		
		$q_revisor=$row['revisor'];						

		$usuaridatos="FOLIO: ".$q_folio." TIPO: ".$q_tipo."\nFECHA: ".$q_horac."\nNARRACION: ".$q_reporte;
		$revisordatos="RESPUESTA: ".$q_resprevisor."\nESTATUS: ".$q_status."\nFECHA DE ATENCION: ".$q_horaa;

		?>
		<div class="form-group text-center">
			<label>Datos del Registro</label>
			<textarea type="text" name="datos_registro"  id="datos_registro" class="form-control" placeholder="<?php echo $usuaridatos; ?> "  cols="40" rows="5" readonly></textarea>

		</div>
		<div class="form-group text-center">
			<label>Respuesta del revisor</label>
			<textarea type="text" name="resp_revisor"  id="resp_revisor" class="form-control"  placeholder="<?php echo $revisordatos; ?> "  cols="40" rows="5" readonly></textarea>
			<!--<input type="text" name="edit_name" id="edit_name" class="form-control" required>-->
		</div>

		<?php  		
	}
} else {
	echo "Registro con la información proporcionada no es valido o no existe";
}
$con->close();

?>    
