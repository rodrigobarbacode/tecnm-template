<?php
include("php/conexion.php");

$tbl_name="usuarios"; // Table name 
// username and password sent from form 
//$inputUsuario=$_POST['inputUsuario']; 
$inputUsuario=base64_encode($_POST['inputUsuario']); 

	//$inputPassword=$_POST['inputPassword']; 
	$inputPassword=base64_encode($_POST['inputPassword']); 
// To protect MySQL injection (more detail about MySQL injection)
$inputUsuario = stripslashes($inputUsuario);
$inputPassword = stripslashes($inputPassword);
$inputUsuario = mysql_real_escape_string($inputUsuario);
$inputPassword = mysql_real_escape_string($inputPassword);
//$salt = substr ($inputUsuario, 0, 2);
//$inputPassword = crypt ($inputPassword, $salt);
//CAMBIO $sql="SELECT * FROM usuarios WHERE usuario='$inputUsuario' and clave='$inputPassword'";
// $id="SELECT * FROM usuarios WHERE usuario='$inputUsuario' and password='$inputPassword'";
$sql="SELECT * FROM usuarios WHERE usuario='$inputUsuario' and password='$inputPassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
//$count=mysql_num_rows($result);
$count = 0;
	while ($row = mysql_fetch_array($result)){ 
	 
		session_start();
		$count = $count + 1;

		 //$_SESSION['nivel']=  $row["nivel"];
		$_SESSION['usuario_valido']= $row["usuario"];
		echo $_SESSION['usuario_valido'];
		$_SESSION['cve_usuario']= $row["cve_usuarios"];

	}
	// If result matched $inputUsuario and $inputPassword, table row must be 1 row
	//if($count==1){
	if($count==1){
	// Register $inputUsuario, $inputPassword and redirect to file "login_success.php"
	
		header("location:new_lineapago.php");
	} 
	else {
		//print $inputUsuario.$inputPassword;
		header("location:index.php?error=1");
	}
?>