<?php 
	include("conexion.php");

	$x=$_POST['x'];
	

	$lineas = "";
	$tabla = "";
	$consulta = "";
	#$consulta = mysql_query("SELECT * FROM conceptosusuarios WHERE cve_usuarios='$x'");
	#$consulta = mysql_query("SELECT a.ALU_NOM, b.cve_conceptos FROM conceptos a, conceptosusuarios b WHERE a.cve_conceptos=b.cve_conceptos AND b.cve_usuarios='$x' order by a.ALU_NOM");
	$consulta = mysql_query("SELECT cve_conceptos, ALU_NOM FROM conceptos ORDER BY ALU_NOM");
	$count = 0;
	$lineas.="<table class='table'>";
	while($registro = mysql_fetch_row($consulta)){
		if ($count%2==0 && $count>0) {
			#$lineas.="<br>";
			$lineas.="<tr>";
		}


		
		//0= cve_conceptos,2= ALU_NOM
		if (mysql_fetch_row(mysql_query("SELECT * FROM conceptosusuarios WHERE cve_conceptos='$registro[0]' AND cve_usuarios='$x'"))>0) {
		$lineas.="
				 <td style='padding-right: 2em; padding-bottom: 1em;' ><label class='checkbox-inline'><input type='checkbox' name='opcion[]' value='$registro[0]' checked>$registro[1]</label><td>
				  
				  ";
		}
		else{
		$lineas.="
				 <td style='padding-right: 2em; padding-bottom: 1em;' cellspacing='2' cellpadding='2'><label class='checkbox-inline'><input type='checkbox' name='opcion[]' value='$registro[0]' >$registro[1]</label><td>
				  
				  ";
		}		


		if ($count%2!=0 && $count>1) {
			$lineas.="</tr>";
		}
		
		$count++;
		
	}	
	$lineas.="</table>";
	#$lineas .= "</table>";
	
	print $lineas;

?>
