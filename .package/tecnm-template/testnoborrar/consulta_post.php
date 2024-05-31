<?php
require_once ('conexion.php');

function select(){
	try{
		
		
		
	$conn=dbConnect();
	$sql="select * from post";
	
	
	
 	$stmt = $conn->query($sql);
    // Extract the values from $stmt
    $rows = $stmt->rowCount();
    if ($rows==0) {
   		$rows=null;
    }else{
		$rows=$stmt->fetchAll();
		
	}

	$conn=null;
	
 }catch( PDOException $Exception ) {
    // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
    // String. 
    throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );
	
}

return $rows;

}



?>