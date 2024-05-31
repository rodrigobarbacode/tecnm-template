<?php
   include("conexion.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['Ncontrol']);
      $id_select = mysqli_real_escape_string($con,$_POST['tramite']); 
      
      //$sql = "SELECT id FROM quejas WHERE usuario = '$myusername' and clave = '$mypassword'";

     

      

//$nombre=$_POST["txtuser"];
 //$password=$_POST["txtpass"];
 
  //consulta 2
  $consulta2="SELECT * FROM conceptos_verano WHERE conc_cve = '$id_select'";
 if($query= $con->query($consulta2)){
 $row2=$query->fetch_array(); 
 $nr2 =$query->num_rows; 
    
      $q_monto=$row2['monto'];
	  $q_clavepago=$row2['conc_cve'];
      $q_concepto=$row2['conc_nombre'];
 }

 //Consulta del usuario y el password
 $consulta="SELECT * FROM alumnos WHERE no_control = '$myusername'";
 if($query= $con->query($consulta)){
 $row=$query->fetch_array(); 
 $nr =$query->num_rows; 
   $q_id=$row['no_control'];       
     $q_nombre=$row['alu_nom'];
  
 //Si existe el usuario lo va a redireccionar a la pagina de Bienvenida.

 if($nr == 1){ 
   header ("Location:lineapago.php"); 
   $_SESSION['login_user']=$q_id;//numero control
   $_SESSION['nclave']=$q_clavepago;
   $_SESSION['nombre']=$q_nombre;
   $_SESSION['monto']=$q_monto;
   $_SESSION['concepto']=$q_concepto;
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

