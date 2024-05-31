<?php 
	include("conexion.php");

	$usuario = $_POST['usuario'];

	mysql_query("DELETE FROM conceptosusuarios WHERE cve_usuarios='$usuario' ",$conexion) or die ("Error delete");
	
	if (isset($_POST['opcion'])) {
		#llenado de privilegios
		foreach ($_POST['opcion'] as $checkbox){ 
		#echo $checkbox."<br>"; 
		mysql_query("INSERT INTO conceptosusuarios (cve_usuarios, cve_conceptos) VALUES ('$usuario','$checkbox')",$conexion) or die ("Error consulta");
		} 
	}
	header('location: ../alta/altaUsuarios.php');

?>
