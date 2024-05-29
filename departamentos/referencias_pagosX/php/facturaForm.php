<?php 
	include("conexion.php");
	$x=$_POST['x'];
	
	//0=cve_conceptos ,4=CONC_CVE , 2=CONC_NOM, 3=CONC_MONTO
	$consulta = mysql_query("SELECT id_solicitud,rfc,codigo_postal,colonia,calle,no_externo,no_interno,ciudad,dele_mun,estado,tel,email,email_dos,metodo_pago FROM solicitud_factura WHERE id_solicitud='$x'") or die ("Error consulta");
print "<table>";
	while($registro = mysql_fetch_row($consulta)){
		
		print "<tr><td><strong>RFC: </strong></td><td>$registro[1]</td></tr>";
		print "<tr><td><strong>C.P.: </strong></td><td>$registro[2]</td></tr>";
		print "<tr><td><strong>COLONIA: </strong></td><td>$registro[3]</td></tr>";
		print "<tr><td><strong>CALLE: </strong></td><td>$registro[4]</td></tr>";
		print "<tr><td><strong>No. EXTERNO: </strong></td><td>$registro[5]</td></tr>";
		print "<tr><td><strong>No. INTERNO: </strong></td><td>$registro[6]</td></tr>";
		print "<tr><td><strong>CIUDAD: </strong></td><td>$registro[7]</td></tr>";
		print "<tr><td><strong>MUNICIPIO: </strong></td><td>$registro[8]</td></tr>";
		print "<tr><td><strong>ESTADO: </strong></td><td>$registro[9]</td></tr>";
		print "<tr><td><strong>TELEFONO: </strong></td><td>$registro[10]</td></tr>";
		print "<tr><td><strong>EMAIL:</strong></td><td>$registro[11]</td></tr>";
		print "<tr><td><strong>EMAIL ALTERNO: </strong></td><td>$registro[12]</td></tr>";
		print "<tr><td><strong>METODO DE PAGO: </strong></td><td>$registro[13]</td></tr>";
	/*	print " <input id='idValidarConceptoUpdate' type='text'  name='cve' value='$registro[0]' hidden> ";
			print "<h3><small id='existeUpdate'>Clave #</small></h3>";
		print " <input id='validarConceptoUpdate' type='text' class='form-control' onkeyup='validarNombreConceptoUpdate()' maxlength='300' value='$registro[1]' name='clave'
			pattern='[0-9]*'
			required
		> 
		";
			print "<h3><small>Concepto</small></h3>";
		print " <input type='text' class='form-control' maxlength='300' value='$registro[2]' name='concepto'
			pattern='([A-Z]*[a-z]*[0-9]*[']*[ ]*)*'
			required
		> 
		";
			print "<h3><small>Monto $</small></h3>";
		print " <input type='text' class='form-control' maxlength='300' value='$registro[3]' name='monto'
			pattern='([0-9]*[.]?[0-9]*)' 
			required
		> 
		";
		
		print "<h3><small>Inicio.</small></h3>";
                                 print " <input type='date' required  id='dateInicio' name='fechaInicio' value='$registro[4]' />";
                                  print "<h3><small>Fin.</small></h3>";
                                 print " <input type='date' required  id='dateFin' name='fechaFin' value='$registro[5]' />";*/
	}
	
print "</table>";
?>