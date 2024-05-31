<?php
   include("conexion.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['Ncontrol']);
	   $montodinamico = mysqli_real_escape_string($con,$_POST['monto']);
      //$mypassword = mysqli_real_escape_string($con,$_POST['password']); 
      
      //$sql = "SELECT id FROM quejas WHERE usuario = '$myusername' and clave = '$mypassword'";

      $q_monto=$montodinamico;

      

//$nombre=$_POST["txtuser"];
 //$password=$_POST["txtpass"];

 //Consulta del usuario y el password
 $consulta="SELECT * FROM alumnos WHERE no_control = '$myusername'";
 if($query= $con->query($consulta)){
 $row=$query->fetch_array(); 
 $nr =$query->num_rows; 
   $q_id=$row['no_control'];
      $q_clavepago=$row['clave_pago'];   
      $q_nombre=$row['alu_nom'];
     // $q_monto=$row['alu_monto'];
      $q_concepto=$row['concepto'];
 //Si existe el usuario lo va a redireccionar a la pagina de Bienvenida.
 if($nr == 1){ 
   header ("Location:lineapago.php"); 
   $_SESSION['login_user']=$q_id;//numero control
   $_SESSION['nclave']=$clavepago;
   $_SESSION['nombre']=$nombre;
   $_SESSION['monto']=$monto;
   $_SESSION['concepto']=$concepto;
 }
 //Si no existe lo va a enviar al login otra vez.
 else if($nr <= 0) { 
  header("Location:reintentar.php"); 
 }  
 }
 else{
 header("Location:reintentar.php"); 
 }
  }

 

?>

