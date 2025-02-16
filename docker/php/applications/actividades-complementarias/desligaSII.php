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
  
 $id = $_GET["id"];
 
  
  
  $sentencia = $db->prepare("UPDATE alumnos set registro_SII = 0  WHERE no_de_control IN ('$id')"); 
	   
	 

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