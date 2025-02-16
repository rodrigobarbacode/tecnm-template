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
  
$periodo = $_POST["periodo"]; 
$date1 = $_POST["datetimepicker1"]; 
$date2 = $_POST["datetimepicker2"]; 
 
 $relacion = 0;
 $existe = 0;
if($boton != "Guardar"){
$stmt = $db->query('SELECT count(cve_actividad) as registrada FROM registro_actividad WHERE periodo_inicial = '.$id.' OR periodo_final = '.$id);
 
 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	
 $relacion = $row['registrada'];

 
}}

if($boton != "Eliminar"){
	
	echo "SELECT count(cve_periodo) as existe FROM periodos WHERE '".$date1."' between date1 and date2 OR '".$date2."' between date1 and date2" ;
	
$stmt = $db->query("SELECT count(cve_periodo) as existe FROM periodos WHERE '".$date1."' between date1 and date2 OR '".$date2."' between date1 and date2");
 
 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	
 $existe = $row['existe'];

 
}}

  if($boton == "Guardar")
 {
$sentencia = $db->prepare("INSERT INTO periodos (periodo,date1,date2) VALUES (:periodo,:date1, :date2)");

$sentencia->bindParam(":periodo", $periodo);
$sentencia->bindParam(":date1", $date1);
$sentencia->bindParam(":date2", $date2);
 }
 else if($boton == "Actualizar")
 { 
	  $sentencia = $db->prepare("UPDATE periodos set periodo = :periodo, date1 = :date1, date2 = :date2  WHERE cve_periodo = :id "); 
	
	$sentencia->bindParam(":periodo", $periodo, PDO::PARAM_STR); 
$sentencia->bindParam(":id", $id, PDO::PARAM_INT); 
$sentencia->bindParam(":date1", $date1);
$sentencia->bindParam(":date2", $date2);
	 }
 else if($boton == "Eliminar" and $relacion == 0)
 {
	 
	 $sentencia = $db->prepare("DELETE FROM periodos WHERE cve_periodo = ?"); 	
	$sentencia->bindParam(1, $id); 
 }
  
  
  if($existe >= 1)
  {
	  
	 
header("Location: abcPeriodos.php?id=".$id."&error=2");
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

if($boton == "Eliminar" ){
if ($relacion >= 1)
{
 
header("Location: abcPeriodos.php?id=".$id."&error=1");
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
}}
 }
catch( PDOException $Exception ) {
    // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns 
// String. 
    throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );
	
}
?>
 