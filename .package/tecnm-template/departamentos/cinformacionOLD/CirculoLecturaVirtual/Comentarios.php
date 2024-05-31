<?php 
include("../funciones/login.php");
session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$identificador = $_GET['comentariosidtema'];

$con = mysql_connect("localhost", "biblioteca", "biblioteca2015");
mysql_select_db("circulo", $con);
$sql    = mysql_query("SELECT  c.Comentario , c.hora,c.FechaPublicacion,UPPER(CONCAT(u.nombre,' ', u.apellido)) as Nom FROM cv_Comentario as c  INNER JOIN cv_Usuario as u on c.idUsuario=u.idUsuario WHERE idTema='$identificador'",$con);

while($row = mysql_fetch_array($sql)){

echo '<h5><li><b class="">'.$row['Nom'].'</b>	<span style=" white-space:pre;">            <label>PUBLICO:</label></span></h5>';
// echo '<h6>'.$row['hora'].'</h6>';
// echo '<h6>'.$row['FechaPublicacion'].'</h6>';
echo '<h4>'.$row['Comentario'].'</h4>';
echo '<center><hr class="hr2"></center>';
}
?>

</body>
</html>
