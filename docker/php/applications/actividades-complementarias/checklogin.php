<?php
 include("conexion_pdo.php");
 
 
$tbl_name="personal"; // Table name 
 
// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 
  
 try {
 $stmt = $conn->prepare("SELECT * FROM personal WHERE usuario='$myusername'  and password='$mypassword'");
$stmt->execute();
if($stmt->rowCount() === 1) $count = 1;
 
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
} 
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
	echo "en cnstruccion";
session_destroy();
 session_start();
// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['myusername']=  $myusername ;
$_SESSION['mypassword']= $mypassword;
$_SESSION['nivel']= 1;
header("Location:login_success.php");

}
else {

 
try{
 $stmt= $conn->prepare("SELECT * FROM alumnos WHERE no_de_control='?' and nip ='?'");
$stmt->execute();
if($stmt->rowCount() === 0) $count =1;
  
 }
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
session_destroy();
 session_start();
// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['myusername']=  $myusername;
$_SESSION['mypassword']= $mypassword;
$_SESSION['nivel']= 2;
echo "en cnstruccion";
header("Location:login_success.php");

}
else {
header("Location:index.php?error_log=1");
}




}
$conn = null;
?> 