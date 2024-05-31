<?php 
	include("conexion.php");
	$x=$_POST['x'];
	
	//0=cve_conceptos ,4=CONC_CVE , 2=CONC_NOM, 3=CONC_MONTO
	$sql = "SELECT cve_conceptos,CONC_CVE,CONC_NOM,CONC_MONTO,fechaInicio,fechaFin FROM conceptos WHERE cve_conceptos='$x'" ;
try{
$stmt = $conn->prepare($sql);
$stmt->execute();
	while ($registro = $stmt->fetch()) {
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
		
		print "<h3><small>Inicio.</small></h3>";
                                 print " <input type='date' required  id='dateInicio' name='fechaInicio' value='$registro[4]' />";
                                  print "<h3><small>Fin.</small></h3>";
                                 print " <input type='date' required  id='dateFin' name='fechaFin' value='$registro[5]' />";
	}
	
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}$conn = null;
?>