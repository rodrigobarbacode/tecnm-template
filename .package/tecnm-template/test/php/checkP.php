<?php 
	//session_start();
	//if (isset($_SESSION["usuario_valido"])){
		include("conexion.php");

		$x=$_POST['x'];
		

		$lineas = "";
		$tabla = "";
		$consulta = "";
		#$consulta = mysql_query("SELECT * FROM conceptosusuarios WHERE cve_usuarios='$x'");
		#$consulta = mysql_query("SELECT a.ALU_NOM, b.cve_conceptos FROM conceptos a, conceptosusuarios b WHERE a.cve_conceptos=b.cve_conceptos AND b.cve_usuarios='$x' order by a.ALU_NOM");
		$consulta = mysql_query("SELECT ALU_CVE,ALU_NOM FROM conceptos c INNER JOIN conceptosusuarios cu on cu.cve_conceptos = c.cve_conceptos WHERE cu.cve_usuarios = '$x' ORDER BY ALU_NOM");
		$count = 0;
		while($registro = mysql_fetch_row($consulta)){
			$lineas.="
					 <option value='$registro[0]'>$registro[1]</option>
					  ";	
		}	
		print $lineas;
		//header("location:../new_lineapago.php");
	//}
?>
