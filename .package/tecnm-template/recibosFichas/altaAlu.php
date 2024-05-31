<?PHP
// Iniciar sesion
   session_start();
   
   if (isset($_POST['enviar'])){
   	$nocontrol = $_POST['nocontrol'];
   	$nombre = $_POST['nombre'];
   		if ($nocontrol=='' || $nombre=='') {
   			header("Location: http://www.itmexicali.edu.mx/pagosreferenciados/altaAlu.php");
   		}else 
   		
   		$conexion = mysql_connect('localhost','referenciaspagos','referenciaspagos');
        mysql_select_db('pagosbanco_new');
        
        $instruccion = "INSERT INTO `pagosbanco`.`daluPagos` (`ALU_CTR`, `ALU_NOM`, `STATUS`) VALUES ('$nocontrol', '$nombre', 'N');";
   		$consulta = mysql_query ($instruccion, $conexion)

         or die ("Fallo en la consulta");
         mysql_close ($conexion);
        header("Location: http://www.itmexicali.edu.mx/pagosreferenciados/lineapago.php"); 
    }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Alta de Alumnos al Sistema Pagos Referenciados</title>
</head>
    <body>
    <div align="center"><img src="img/logos.png" /></div>
	<div width="850px">
   <?PHP

   if (isset($_SESSION["usuario_valido"]))

   {
	?>
	<form method="post" action="altaAlu.php">
	<p align="center">
	<label>No. Control:</label>
	<input type="text" name="nocontrol" size="10px"/>
	<label>Nombre:</label>
	<input type="text" name="nombre" size="50px"/>
	<input type="submit" name="enviar" value="Guardar datos"/>
	</p>
	</form>
	<?PHP
   }
	else
   {

      print ("<BR><BR>\n");

      print ("<P ALIGN='CENTER'>Acceso no autorizado</P>\n");

      print ("<P ALIGN='CENTER'>[ <A HREF='index.php' TARGET='_top'>Conectar</A> ]</P>\n");

   }

	?>
	</body>
</html>
