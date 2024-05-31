<?php
include("php/conexion.php");

$tbl_name="usuarios"; // Table name 
// username and password sent from form 
//$inputUsuario=$_POST['inputUsuario']; 
$inputUsuario= $_POST['inputUsuario'];  
	//$inputPassword=$_POST['inputPassword']; 
	$inputPassword= $_POST['inputPassword'] ; 
// To protect MySQL injection (more detail about MySQL injection)
$inputUsuario = stripslashes($inputUsuario);
$inputPassword = stripslashes($inputPassword); 
//$salt = substr ($inputUsuario, 0, 2); 

try{
$sql="SELECT * FROM usuarios WHERE usuario='$inputUsuario' and password='$inputPassword'";
 
$count = 0;
 $stmt = $conn->query($sql);
 
while ($row = $stmt->fetch( PDO::FETCH_ASSOC )) {
session_start();
		$count = $count + 1;
 
		 //$_SESSION['nivel']=  $row["nivel"];
		$_SESSION['usuario_valido']= $row["usuario"];
		//echo $_SESSION['usuario_valido'];
		$_SESSION['cve_usuario']= $row["cve_usuario"];
		 // echo $_SESSION['cve_usuario'];
}
 
 
	// If result matched $inputUsuario and $inputPassword, table row must be 1 row
	//if($count==1){
	if(intval($count) == 1){
	// Register $inputUsuario, $inputPassword and redirect to file "login_success.php"
	
		     header("location:menu.php");
	} 
	else {
		//print $inputUsuario.$inputPassword;
	     header("location:index.php?error=1");
	}
	
	}

catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>