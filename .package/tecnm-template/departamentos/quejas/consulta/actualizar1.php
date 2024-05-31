<HTML>

<HEAD>
   <TITLE>Lectura de Queja</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
<SCRIPT LANGUAGE="JavaScript">
function cerrar(){ 
window.close();

}
</script>  
</HEAD>

<BODY>

<?PHP
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quejas";
	 

	
	$fecha_queja = $_REQUEST['fecha_queja'];	
	if (!isset($fecha_queja))
		die ("<P><B>No se recibi&oacute; un No. de control</B></P>");

	$control = $_POST['control'];
	$queja = $_POST['queja'];
	$correo = $_POST['correo'];
	$atendida = $_POST['atendida'];
		
	if (isset($atendida))
	{	
		$fecha_resp= date("F j, Y, g:i.s A");
		$cSql .= "update quejasAlumnos set ATENDIDA = 'SI', FECHA_RESP = '" . $fecha_resp . "' where FECHA_QUEJA = '".$fecha_queja."';";
		
		
		 


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "update quejasAlumnos set ATENDIDA = 'SI', FECHA_RESP = '" . $fecha_resp . "' where FECHA_QUEJA = '".$fecha_queja."';";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    	print ("<P><B>Atenci&oacute;n realizada con &Eacute;xito</B></P>\n");
			?><script language="javascript"> cerrar(); </script> <?php
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
 
		
		

        }
	else{
	if(!isset($atendida))
	{
		
		try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("select * from quejasAlumnos INNER JOIN daluQuejas ON ALU_CTR=CONTROL where FECHA_QUEJA = '".$fecha_queja."';");
    $stmt->execute();
 
    while( $resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
       	
		$control = $resultado['CONTROL'];
		$nombre = $resultado['ALU_NOM'];
		$queja = $resultado['QUEJA'];
		$correo = $resultado['CORREO'];
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

	
	}
	}
?>

<P CLASS='parrafocentrado' align=center><img src='img/logos.png' width="1024" height="100">
<H1><P ALIGN='CENTER'>Lectura de Queja</P></H1>
<FORM CLASS="borde" ACTION="<?PHP  echo $_SERVER['php_self']; ?>" METHOD="POST">
	<P ALIGN='CENTER'><TABLE BORDER>
		<TR><font size="5"><TD><LABEL>No. Control: </LABEL><B><?php echo "$control";?></B></TD></font></TR>
		<TR><font size="5"><TD><LABEL>Nombre: </LABEL><B><?php echo "$nombre";?></B></TD></font></TR>
		<TR><font size="5"><TD><LABEL>Fecha de la Queja: </LABEL><B><?php echo "$fecha_queja"; ?></B></TD></font></TR>
		<TR><font size="5"><TD><LABEL>Queja: </LABEL><B><?php echo "$queja"; ?></B></TD></font></TR>
		<TR><font size="5"><TD><LABEL>Correo: </LABEL><B><?php echo "$correo"; ?></B></TD></font></TR>
	</P>
	</TABLE>
	<P ALIGN='CENTER'><INPUT TYPE="SUBMIT" NAME="atendida" VALUE="Marcar como atendida" ></P>
	<BR/><FONT SIZE=3><P ALIGN='RIGHT' VALIGN='BOTTOM'>cco@cafv/fema/cacc</P></FONT>
</FORM>
 

</BODY>
</HTML>
