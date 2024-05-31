<?php 
	//session_start();
	//if (isset($_SESSION["usuario_valido"])){
		include("conexion.php");

		$x=$_POST['x'];
		

		$lineas = "";
		$tabla = "";
		$consulta = "";
		 
		$count = 0;
 
		
	try{
$sql="SELECT CONC_CVE,concat(CONC_CVE,' - ',CONC_NOM) as CONC_NOM FROM conceptos c INNER JOIN conceptosusuarios cu on cu.cve_conceptos = c.cve_conceptos WHERE cu.cve_usuarios = '$x' AND DATE_FORMAT(now(),'%Y/%m/%d') BETWEEN fechaInicio and fechaFin ORDER BY CONC_NOM";
 
 $stmt = $conn->query($sql);
 
while ($row = $stmt->fetch( PDO::FETCH_ASSOC )) {
 
		$lineas.="<option value='".$row["CONC_CVE"]."'>".$row["CONC_NOM"]."</option>  ";
	 
	}
	}

catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

	
		print $lineas; 
?>
