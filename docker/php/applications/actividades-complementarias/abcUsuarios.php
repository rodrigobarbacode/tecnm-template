<?php
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
session_start(); 

if(isset($_SESSION['myusername']) == 1 and $_SESSION['nivel'] <> 5 ){
$_SESSION['myusername'] = $_SESSION['myusername'];
 

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<title>Documento sin título</title>
<script type="text/javascript">
function validaEliminar(){
if(!confirm('Desea eliminar este Usuario?'))
{
return false;	
}
}
</script>
</head>

<body>
 <?php
 try{
 $db = new PDO('mysql:host=mariadb-php;dbname=actividades_complementarias;charset=utf8', 'actividades_comp', 'actComp.23'); 
 $cve_usuario = 0;
 if(isset($_GET["id"])==1)
 $cve_usuario = $_GET["id"];
 $cve_usuario2 = $_SESSION['cve_usuario'];
   $usuario = null;
 $password = null; 
 $error = $_GET["error"];
  if($cve_usuario <> "")
  {
	$stmt = $db->query('SELECT * FROM personal WHERE cve_usuario ='.$cve_usuario);
 

 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	
 $usuario = $row['usuario'];
 $password = $row['password'];
}
}}
catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}
 ?>
 
<form action="usuario_save.php" method="post" class="elegant-aero">
    <h1>Usuarios
        <span>Llenar todos los campos.</span>
    </h1>
    <label>
        <span>Usuario :</span>
        <input id="usuario" type="text"  name="usuario" placeholder="Usuario" required value="<?php echo $usuario?>" />
    </label>
    
    <label>
        <span>Password :</span>
        <input id="password" type="text"  name="password" placeholder="Password" required   value="<?php echo $password?>" />
    </label>
         
     <div style="text-align:right">
     <?php if ($error == 1){?>
      <label style="color:#F00">No se puede eliminar este usuario. Se encuentra relacionada con uno o mas procesos.</label>
      <?php
	 }
	 ?>
        <input type="submit" name="boton" class="button" <?php if($cve_usuario <> "")	echo "value='Actualizar'"; else echo "value='Guardar'"?> /> 
          <?php 
	if($cve_usuario <> "" and $cve_usuario <> $cve_usuario2)
	{
	?> 
      
        <input type="submit" name="boton" class="buttonDelete"  value="Eliminar" onClick=" return validaEliminar()"/> 
     <?php	
	}

	?>
</div>   
<input type="hidden" name="id" value="<?php echo $cve_usuario?>">
      
</form>

</body>
</html>
 <?php
}
else
{
header("location:index.php");
}?>