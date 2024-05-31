<?php 
	include("conexion.php");
	$x=$_POST['x'];
	
	//0=cve_conceptos ,4=ALU_CVE , 2=ALU_NOM, 3=ALU_MONTO
	$consulta = mysql_query("SELECT cve_conceptos,ALU_CVE,ALU_NOM,ALU_MONTO FROM conceptos WHERE cve_conceptos='$x'") or die ("Error consulta");

	while($registro = mysql_fetch_row($consulta)){
		print " <input id='idValidarConceptoUpdate' type='text'  name='cve' value='$registro[0]' hidden> ";
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
	}
	

?>