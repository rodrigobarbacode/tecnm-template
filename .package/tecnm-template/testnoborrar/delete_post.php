<?php

session_start(); //@ previene warning contra sesiones automáticas (no recomendado)
if(! isset($_SESSION["usuario"])){ 
   header('Location: index.php');
 exit;
}

try{

require_once ('conexion.php');


$conn=dbConnect();
$sql='delete from post where id_post='.$_POST['id'];
$stmt=$conn->query($sql);
$conn=null;
echo json_encode(array('status'=>true));
  
}catch( PDOException $Exception ) {
    // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
    // String. 
    throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );
	
}



?>
