<?php 
	include("conexion.php");

	$x=$_POST['x'];
	

	$lineas = "";
	$tabla = "";
	$consulta = "";
	#$consulta = mysql_query("SELECT * FROM conceptosusuarios WHERE cve_usuarios='$x'");
	#$consulta = mysql_query("SELECT a.CONC_NOM, b.cve_conceptos FROM conceptos a, conceptosusuarios b WHERE a.cve_conceptos=b.cve_conceptos AND b.cve_usuarios='$x' order by a.CONC_NOM");
	try{
	$sql = "SELECT cve_conceptos, CONC_NOM FROM conceptos ORDER BY CONC_NOM";
	$count = 0;
	$lineas.="<table class='table'>";
	 $stmt = $conn->query($sql);
 
while ($registro = $stmt->fetch()) {
		if ($count%2==0 && $count>0) {
			#$lineas.="<br>";
			$lineas.="<tr>";
		}



$stmt2 = $conn->prepare("SELECT * FROM conceptosusuarios WHERE cve_conceptos='$registro[0]' AND cve_usuarios='$x'");
 
$stmt2->execute();
$row = $stmt2->fetch();

if($row)
{
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
	}
	
catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
