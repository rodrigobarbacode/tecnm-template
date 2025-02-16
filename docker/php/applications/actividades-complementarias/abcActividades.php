<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<title>Documento sin título</title>
<script type="text/javascript">
function validaEliminar(){
if(!confirm('Desea eliminar esta actividad?'))
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
 $cve_actividad = 0;
 if(isset($_GET["id"])==1)
 $cve_actividad = $_GET["id"];
   $actividad = null;
 $creditos = null; 
 $error = $_GET["error"];
  if($cve_actividad <> "")
  {
	$stmt = $db->query('SELECT * FROM actividades WHERE cve_actividad ='.$cve_actividad);
 

 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	
 $actividad = $row['actividad'];
 $creditos = $row['creditos'];
}
}}
catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}
 ?>
 
<form action="actividad_save.php" method="post" class="elegant-aero">
    <h1>Actividades
        <span>Llenar todos los campos.</span>
    </h1>
    <label>
        <span>Actividad :</span>
        <input id="actividad" type="text" name="actividad" placeholder="Titulo de la Actividad" required value="<?php echo $actividad?>" />
    </label>
    
    <label>
        <span>Creditos :</span>
        <input id="creditos" type="number" name="creditos" placeholder="Numero de creditos" required min="1" max="99" value="<?php echo $creditos?>" />
    </label>
         
     <div style="text-align:right">
     <?php if ($error == 1){?>
      <label style="color:#F00">No se puede eliminar esta Actividad. Se encuentra relacionada con uno o mas alumnos.</label>
      <?php
	 }
	 ?>
        <input type="submit" name="boton" class="button" <?php if($cve_actividad <> "")	echo "value='Actualizar'"; else echo "value='Guardar'"?> /> 
          <?php 
	if($cve_actividad <> "")
	{
	?> 
      
        <input type="submit" name="boton" class="buttonDelete"  value="Eliminar" onClick=" return validaEliminar()"/> 
     <?php	
	}

	?>
</div>   
<input type="hidden" name="id" value="<?php echo $cve_actividad?>">
      
</form>

</body>
</html>
