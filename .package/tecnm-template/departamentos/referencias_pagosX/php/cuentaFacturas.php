<?php 
	include("conexion.php");

	$lineas = "";
	$tabla = "";
	$consulta = "";
	
 try{
$sql="SELECT count(id_solicitud) as id FROM solicitud_factura WHERE status = 0";
 
 $stmt = $conn->query($sql);
 
while ($row = $stmt->fetch( PDO::FETCH_ASSOC )) {
 
		$lineas.="
					 <option value='".$row['CONC_CVE']."'>".$row['conceptos']."</option>
					  ";
	 
	}
	}

catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

	
		print $lineas; 

 ?>