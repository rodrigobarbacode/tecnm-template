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
  $cve_registro = $_POST["cve_registro"];
  
$cve_actividad = $_POST["actividad"];
$creditos = $_POST["creditos"];
$periodo = $_POST["periodo"];
$periodo2 = $_POST["periodo2"];
$observa = $_POST["observa"];
$nivel = $_POST["nivel"];
$tipor = $_POST["tipor"];

if(isset($_POST['tipor'])) 
{
   $tipor = 1;
}
else
{
    $tipor = 0;
}    



  if($boton == "Guardar")
 {
 
$sentencia = $db->prepare("INSERT INTO registro_actividad (cve_actividad, creditos,periodo_inicial,periodo_final,comentario,no_de_control,nivel,tipor) VALUES (:cve_actividad, :creditos, :periodo_inicial, :periodo_final, :observa, :id,:nivel,:tipor)");

$sentencia->bindParam(":cve_actividad", $cve_actividad);
$sentencia->bindParam(":creditos", $creditos);
$sentencia->bindParam(":periodo_inicial", $periodo);
$sentencia->bindParam(":periodo_final", $periodo2);
$sentencia->bindParam(":observa", $observa);
$sentencia->bindParam(":id", $id);
$sentencia->bindParam(":nivel", $nivel);
$sentencia->bindParam(":tipor", $tipor);
  }
 else if($boton == "Actualizar")
 {
	 
	  $sentencia = $db->prepare("UPDATE registro_actividad set cve_actividad =:cve_actividad, creditos=:creditos,periodo_inicial=:periodo_inicial,periodo_final=:periodo_final,comentario=:observa,nivel=:nivel,tipor=:tipor WHERE cve_registro = :cve_registro"); 
	
$sentencia->bindParam(":cve_actividad", $cve_actividad, PDO::PARAM_STR);
$sentencia->bindParam(":creditos", $creditos, PDO::PARAM_STR);
$sentencia->bindParam(":periodo_inicial", $periodo, PDO::PARAM_STR);
$sentencia->bindParam(":periodo_final", $periodo2, PDO::PARAM_STR);
$sentencia->bindParam(":observa", $observa, PDO::PARAM_STR);
$sentencia->bindParam(":cve_registro", $cve_registro, PDO::PARAM_STR);
$sentencia->bindParam(":nivel", $nivel);
$sentencia->bindParam(":tipor", $tipor);
	 }
 else if($boton == "Eliminar")
 {
	 $sentencia = $db->prepare("DELETE FROM registro_actividad WHERE cve_registro = ?"); 	
	$sentencia->bindParam(1, $cve_registro);  
 }
 

$sentencia->execute();
$db = null;
}
catch( PDOException $Exception ) {
    // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
    // String. 
    throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );
	
}
?>
<script type="text/javascript">
  parent.parent.GB_hide();
</script>