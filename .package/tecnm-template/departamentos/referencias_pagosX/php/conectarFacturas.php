<?php 
	include("conexion.php");

	$lineas = "";
	$tabla = "";
	$consulta = "";
	
	$consulta = mysql_query("SELECT *  FROM solicitud_factura");
	$lineas.="<thead><tr><td>No# </td><td>No de Control</td><td>RFC</td><td>Razon Social</td><td>Codigo Compaq</td><td>Estatus</td></tr></thead><tbody>";
		//$lineas.="<tbody>";
	//0= cve_conceptos,2= CONC_NOM, 3= CONC_MONTO,4= CONC_CVE

	while($registro = mysql_fetch_row($consulta)){
		 $numeroComa=number_format($registro[2],2);
		$lineas.="<tr> <td id='$registro[0]' title='$registro[0]'>$registro[0]</td> 
			<td title='$registro[1]'>
				<form action='../php/updatePrivileges.php' method='post'>
					<button type='button' class='btn btn-link' style='text-decoration:none; color:black;' id='$registro[0]' onClick='reply_click(this.id)' data-toggle='modal' data-target='#modalUpdateFactura'>$registro[1]</button> 
				</form>
			</td>
		<td>$registro[3] </td>
		<td>$registro[4] </td>
		<td> $registro[19]</td>";
		if($registro[18] == "1")
			{
			$lineas .= "<td  class='text-center'><span class='glyphicon glyphicon-ok success' aria-hidden='true' style='color:green'></span></td>";
			}
			else {
	$lineas .= "<td  class='text-center'><span class='glyphicon glyphicon-minus ' aria-hidden='true' style='color:#606060'></span></td>";
}
	$lineas.="</tr>";
		
	}	
		//$lineas.="</tbody>";
	$tabla.="<table id='datatableConceptos' class='table'> $lineas <tbody></table>";
	print  $tabla;

 ?>