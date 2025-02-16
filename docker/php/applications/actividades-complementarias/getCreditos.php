<?php 
 $db = new PDO('mysql:host=mariadb-php;dbname=actividades_complementarias;charset=utf8', 'actividades_comp', 'actComp.23'); 
  
 $id = $_GET["uname"];
  
 
   $stmt = $db->query('SELECT * FROM actividades WHERE cve_actividad ='.$id); 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	echo $row["creditos"];
}
 
  

$db = null;
 
 
 
?>