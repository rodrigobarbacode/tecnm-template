<html>
<head>
  <script type="text/javascript">
    var GB_ROOT_DIR = "greybox/";
</script>
<script type="text/javascript" src="greybox/AJS.js"></script>
<script type="text/javascript" src="greybox/AJS_fx.js"></script>
<script type="text/javascript" src="greybox/gb_scripts.js"></script>
<link href="greybox/gb_styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
</body>
</html>
<?php
try	{
 $db = new PDO('mysql:host=mariadb-php;dbname=actividades_complementarias;charset=utf8', 'actividades_comp', 'actComp.23'); 
 
 $boton = $_POST["boton"];
 $id = $_POST["id"];
  
$actividad = $_POST["actividad"];
$creditos = $_POST["creditos"];
$relacion = 0;

$stmt = $db->query('SELECT count(cve_actividad) as registrada FROM registro_actividad WHERE cve_actividad ='.$id);
 

 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	
 $relacion = $row['registrada'];

 
}


  if($boton == "Guardar")
 {
$sentencia = $db->prepare("INSERT INTO actividades (actividad, creditos) VALUES (:actividad, :creditos)");

$sentencia->bindParam(":actividad", $actividad);
$sentencia->bindParam(":creditos", $creditos);
 }
 else if($boton == "Actualizar")
 {
	 echo $id."sds";
	  $sentencia = $db->prepare("UPDATE actividades set actividad = :actividad, creditos = :creditos WHERE cve_actividad = :id"); 
	
	$sentencia->bindParam(":actividad", $actividad, PDO::PARAM_STR);
$sentencia->bindParam(":creditos", $creditos, PDO::PARAM_STR);
$sentencia->bindParam(":id", $id, PDO::PARAM_INT); 
	 }
 else if($boton == "Eliminar" and $relacion == 0)
 {
	 $sentencia = $db->prepare("DELETE FROM actividades WHERE cve_actividad = ?"); 	
	$sentencia->bindParam(1, $id); 
 }
 
if($boton == "Eliminar" and $relacion >= 1)
{
 
header("Location: abcActividades.php?id=".$id."&error=1");
die();
 	
}
else{
$sentencia->execute();
$db = null;
?>

<script type="text/javascript">
 parent.parent.GB_hide();
</script>
 <?php
}
}
catch( PDOException $Exception ) {
    // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
    // String. 
    throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );
	
}
?>
