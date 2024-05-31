
<?php

require_once("../conexion.php");	

    $conn=dbConnect();
	$id=$_GET['ref'];
	$sql = "select * from post where id_post='".$id."'";
    $stmt = $conn->query($sql);
    $count = $stmt->rowCount();
	
	
  $rows = $stmt->fetchAll();

	

		
			
		
	
	



?>