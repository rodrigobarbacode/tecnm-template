mariadb-php<html>
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
  
$usuario = $_POST["usuario"];
$password = $_POST["password"];
$relacion = 0;

$stmt = $db->query("SELECT '0' as registrada ");
 

 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	
 $relacion = $row['registrada'];

 
}
$nivel = 2;

  if($boton == "Guardar")
 {
$sentencia = $db->prepare("INSERT INTO personal (usuario, password ,nivel) VALUES (:usuario, :password, :nivel)");

$sentencia->bindParam(":usuario", $usuario);
$sentencia->bindParam(":password", $password);
$sentencia->bindParam(":nivel", $nivel );
 }
 else if($boton == "Actualizar")
 {
	 echo $id."sds";
	  $sentencia = $db->prepare("UPDATE personal set usuario = :usuario, password = :password WHERE cve_usuario = :id"); 
	
	$sentencia->bindParam(":usuario", $usuario, PDO::PARAM_STR);
$sentencia->bindParam(":password", $password, PDO::PARAM_STR);
$sentencia->bindParam(":id", $id, PDO::PARAM_INT); 
	 }
 else if($boton == "Eliminar" and $relacion == 0)
 {
	 $sentencia = $db->prepare("DELETE FROM personal WHERE cve_usuario = ?"); 	
	$sentencia->bindParam(1, $id); 
 }
 
if($boton == "Eliminar" and $relacion >= 1)
{
 
header("Location: abcUsuarios.php?id=".$id."&error=1");
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
