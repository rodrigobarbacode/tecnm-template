<?php 
	include("conexion.php");

	$lineas = "";
	$tabla = "";
	$consulta = "";
	

	$sql =  "SELECT cve_conceptos, CONC_NOM, CONC_MONTO, CONC_CVE FROM conceptos";
	try{
$stmt = $conn->prepare($sql);
$stmt->execute();

	$lineas.="<thead><tr><td>Clave </td><td>Concepto </td><td>Monto </td></tr></thead><tbody>";
		//$lineas.="<tbody>";
	//0= cve_conceptos,2= CONC_NOM, 3= CONC_MONTO,4= CONC_CVE

	while ($registro = $stmt->fetch()) {
		 $numeroComa=number_format($registro[2],2);
		$lineas.="<tr> <td id='$registro[3]' title='$registro[3]'>$registro[3]</td> 
			<td title='$registro[1]'>
				<form action='../php/updatePrivileges.php' method='post'>
					<button type='button' class='btn btn-link' style='text-decoration:none; color:black;' id='$registro[0]' onClick='reply_click(this.id)' data-toggle='modal' data-target='#updatePrivileges'>$registro[1]</button> 
				</form>
			</td>
		<td>  $numeroComa</td></tr>";
		
	}
	}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;	
		//$lineas.="</tbody>";
	$tabla.="<table id='datatableConceptos' class='table'> $lineas <tbody></table>";
	print  $tabla;

 ?>