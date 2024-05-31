<?PHP






// Si se ha enviado el formulario
if (isset($_POST['usuario']) && isset($_POST['clave']))
   {
   $usuario = $_POST['usuario'];
   $clave = $_POST['clave'];
    	   
	   $servername = "localhost";
$username = "root";
$password = "itmXoto13";
$dbname = "quejas";

 try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("select usuario, clave from usuarios where usuario = '$usuario' and clave = '$clave';");
    $stmt->execute();
 
     
    $nfilas = $stmt->rowCount();
 

      if ($nfilas > 0)

      {

// Iniciar sesi�n

   session_start();
         $usuario_valido = $usuario;

         // Con register_globals On

         // session_register ("usuario_valido");

         // Con register_globals Off

         $_SESSION["usuario_valido"] = $usuario_valido;

      }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null; 
   }

?>



<!DOCTYPE HTML PUBLIC "-//W3C/DTD HTML 4.0//EN"

   "http://www.w3.org/TR/html4/strict.dtd"> 

<HTML LANG="es">

<HEAD>

<TITLE>SISTEMA DE ATENCION A QUEJAS</TITLE>

<LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">

</HEAD>



<BODY>



<?PHP

// Sesi�n iniciada

   if (isset($_SESSION["usuario_valido"]))

   {
    header("Location: menu.php");  

   }



// Intento de entrada fallido

   else if (isset ($usuario))

   {

      print ("<BR><BR>\n");

      print ("<P ALIGN='CENTER'>Acceso no autorizado</P>\n");

      print ("<P ALIGN='CENTER'>[ <A HREF='index.php'>Conectar</A> ]</P>\n");
	print("<BR/><FONT SIZE=3><P ALIGN='RIGHT' VALIGN='BOTTOM'>cco@cafv/fema/cacc</P></FONT>");

   }



// Sesi�n no iniciada

   else

   {

      print("<P CLASS='parrafocentrado' align=center><A HREF='http://www.itmexicali.edu.mx'><img src='img/logos.png' width='1024' height='100'></A>");
      print("<div width='850px'>");
      print("<FORM CLASS='entrada' NAME='login' ACTION='' METHOD='POST'>\n");
      print("<P align=center><font size='5'><LABEL CLASS='etiqueta-entrada'>Usuario:</LABEL></font>\n");
      print("   <INPUT TYPE='TEXT' NAME='usuario' SIZE='15'></P>\n");
      print("<P align=center><font size='5'><LABEL CLASS='etiqueta-entrada'>Contrase&ntilde;a:</LABEL></font>\n");
      print("   <INPUT TYPE='PASSWORD' NAME='clave' SIZE='15'></P>\n");
      print("<P CLASS='parrafocentrado' align=center><INPUT TYPE='SUBMIT' VALUE='Entrar'></P>\n");
	print("<BR/><FONT SIZE=3><P ALIGN='RIGHT' VALIGN='BOTTOM'>cco@cafv/fema/cacc</P></FONT>");
      print("</FORM>\n");

   }

?>
 
 

</BODY>

</HTML>
