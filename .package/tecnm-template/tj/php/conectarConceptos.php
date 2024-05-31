<?php 
	include("conexion.php");

	$lineas = "";
	$tabla = "";
	$consulta = "";
	
	$consulta = mysql_query("SELECT cve_conceptos, ALU_NOM, ALU_MONTO, ALU_CVE FROM conceptos");
	$lineas.="<thead><tr><td>Clave </td><td>Concepto </td><td>Monto </td></tr></thead><tbody>";
		//$lineas.="<tbody>";
	//0= cve_conceptos,2= ALU_NOM, 3= ALU_MONTO,4= ALU_CVE

	while($registro = mysql_fetch_row($consulta)){
		 $numeroComa=number_format($registro[2],2);
		$lineas.="<tr> <td id='$registro[3]' title='$registro[3]'>$registro[3]</td> 
			<td title='$registro[1]'>
				<form action='../php/updatePrivileges.php' method='post'>
					<button type='button' class='btn btn-link' style='text-decoration:none; color:black;' id='$registro[0]' onClick='reply_click(this.id)' data-toggle='modal' data-target='#updatePrivileges'>$registro[1]</button> 
				</form>
			</td>
		<td>  $numeroComa</td></tr>";
		
	}	
		//$lineas.="</tbody>";
	$tabla.="<table id='datatableConceptos' class='table'> $lineas <tbody></table>";
	print  $tabla;

 ?>