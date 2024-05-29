<?php
   include("conexion.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['usrlogin']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
      
      //$sql = "SELECT id FROM quejas WHERE usuario = '$myusername' and clave = '$mypassword'";

      $sql = "SELECT id FROM quejas WHERE usuario = '$myusername' and clave = '$mypassword'";
	  $result = $con->query($sql);

//$nombre=$_POST["txtuser"];
 //$password=$_POST["txtpass"];

 //Consulta del usuario y el password
 $consulta="SELECT id FROM login WHERE usuario = '$myusername' and clave = '$mypassword'";
 if($query= $con->query($consulta)){
 $row=$query->fetch_array(); 
 $nr =$query->num_rows; 
 //Si existe el usuario lo va a redireccionar a la pagina de Bienvenida.
 if($nr == 1){ 
   header ("Location:Menu.php"); 
   $_SESSION['login_user']=$myusername;
 }
 //Si no existe lo va a enviar al login otra vez.
 else if($nr <= 0) { 
  header("Location:login.php"); 
 }  
 }
 else{
 header("Location:login.php"); 
 }
  }

 

?>

