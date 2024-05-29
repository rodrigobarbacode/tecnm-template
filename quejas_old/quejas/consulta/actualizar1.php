<HTML>

<HEAD>
   <TITLE>Lectura de Queja</TITLE> 
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
$password = "itmXoto13";
$dbname = "quejas";
	 

	
	$fecha_queja = $_REQUEST['fecha_queja'];	
	if (!isset($fecha_queja))
		die ("<P><B>No se recibi&oacute; un No. de control</B></P>");

	
		
	if (isset($_POST['atendida']))
	{	
	
		  

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$control = $_POST['control'];
	$queja = $_POST['queja'];
	$correo = $_POST['correo'];
	$atendida = $_POST['atendida'];
		$fecha_resp= date("F j, Y, g:i.s A");
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
<FORM CLASS="borde" ACTION="" METHOD="POST">
	<P ALIGN='CENTER'><TABLE BORDER>
		<TR><font size="5"><TD><LABEL>No. Control: </LABEL><B><?php echo "$control";?></B></TD></font></TR>
		<TR><font size="5"><TD><LABEL>Nombre: </LABEL><B><?php echo "$nombre";?></B></TD></font></TR>
		<TR><font size="5"><TD><LABEL>Fecha de la Queja: </LABEL><B><?php echo "$fecha_queja"; ?></B></TD></font></TR>
		<TR><font size="5"><TD><LABEL>Queja: </LABEL><B><?php echo "$queja"; ?></B></TD></font></TR>
		<TR><font size="5"><TD><LABEL>Correo: </LABEL><B><?php echo "$correo"; ?></B></TD></font></TR>
	</P>
	</TABLE>
    <?php
	if($_GET["op"] == "NO")
	{
		
		?>
        <P ALIGN='CENTER'><INPUT TYPE="submit" NAME="atendida" VALUE="Marcar como atendida" ></P>
        
		<?php
		}
		else
		{
			?>
        <P ALIGN='CENTER'><INPUT TYPE="button" NAME="atendida" VALUE="Cerrar" onClick="cerrar()" ></P>
        
		<?php
			}
	?> 
	<BR/><FONT SIZE=3><P ALIGN='RIGHT' VALIGN='BOTTOM'>cco@cafv/fema/cacc</P></FONT>
    <input type="hidden" name="control" value="<?php echo "$control";?>"/>
    <input type="hidden" name="queja" value="<?php echo "$queja";?>"/>
    <input type="hidden" name="correo" value="<?php echo "$correo";?>"/>
</FORM>
 

</BODY>
</HTML>
