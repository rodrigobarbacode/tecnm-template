<?php 
	include("conexion.php");

	$usuario = $_POST['usuario'];

	$sql = "DELETE FROM conceptosusuarios WHERE cve_usuarios='$usuario' ";
	
	$stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
	
	if (isset($_POST['opcion'])) {
		#llenado de privilegios
		foreach ($_POST['opcion'] as $checkbox){ 
		#echo $checkbox."<br>"; 
		$sql = "INSERT INTO conceptosusuarios (cve_usuarios, cve_conceptos) VALUES ('$usuario','$checkbox')";
		$stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
		} 
	}
	header('location: ../alta/altaUsuarios.php');

?>
