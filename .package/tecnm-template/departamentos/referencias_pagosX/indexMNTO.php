<?PHP



// Iniciar sesi�n

   session_start();



// Si se ha enviado el formulario

   $usuario = $_REQUEST['usuario'];

   $clave = $_REQUEST['clave'];

   if (isset($usuario) && isset($clave))

   {



   // Comprobar que el usuario est� autorizado a entrar

	
	$conexion = mysql_connect('localhost','referenciaspagos','referenciaspagos');
	mysql_select_db('pagosbanco_new');      

      $salt = substr ($usuario, 0, 2);

      $clave_crypt = crypt ($clave, $salt);

      $instruccion = "select usuario, clave from usuarios where usuario = '$usuario'" .

         " and clave = '$clave_crypt'";

      $consulta = mysql_query ($instruccion, $conexion)

         or die ("Fallo en la consulta");

      $nfilas = mysql_num_rows ($consulta);

      mysql_close ($conexion);



   // Los datos introducidos son correctos

      if ($nfilas > 0)

      {

         $usuario_valido = $usuario;

         // Con register_globals On

         // session_register ("usuario_valido");

         // Con register_globals Off

         $_SESSION["usuario_valido"] = $usuario_valido;

      }

   }

?>



<!DOCTYPE HTML PUBLIC "-//W3C/DTD HTML 4.0//EN"

   "http://www.w3.org/TR/html4/strict.dtd"> 

<HTML LANG="es">

<HEAD>

<TITLE>Acceso Linea de Pago</TITLE>

<LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">

</HEAD>



<BODY>



<?PHP

// Sesi�n iniciada

   if (isset($_SESSION["usuario_valido"]))

   {
?>


<!--<meta http-equiv="Refresh" content="0;url=http://www.itmexicali.edu.mx/pagosreferenciados/lineapago.php" />-->



<?PHP


   }



// Intento de entrada fallido

   else if (isset ($usuario))

   {

      print ("<BR><BR>\n");

      print ("<P ALIGN='CENTER'>Acceso no autorizado</P>\n");

      print ("<P ALIGN='CENTER'>[ <A HREF='index.php'>Conectar</A> ]</P>\n");

   }



// Sesi�n no iniciada

   else

   {

      print("<BR><BR>\n");

      print("<P CLASS='parrafocentrado' align=center><img src='img/logos.png'>");



      print("<FORM CLASS='entrada' NAME='login' ACTION='index.php' METHOD='POST'>\n");

print("<P align=center><LABEL CLASS='etiqueta-entrada'><strong><font size=6>APLICACION EN ACTUALIZACION, DISPONIBLE HASTA EL MIERCOLES 5 MARZO </font></strong></LABEL>\n");

      print("<P align=center><LABEL CLASS='etiqueta-entrada'>Usuario:</LABEL>\n");

      print("   <INPUT TYPE='TEXT' NAME='usuario' SIZE='15'></P>\n");

      print("<P align=center><LABEL CLASS='etiqueta-entrada'>Contrase&ntilde;a:</LABEL>\n");

      print("   <INPUT TYPE='PASSWORD' NAME='clave' SIZE='15'></P>\n");

      print("<P CLASS='parrafocentrado' align=center><INPUT TYPE='SUBMIT' VALUE='Entrar'></P>\n");



      print("</FORM>\n");

   }

?>



</BODY>

</HTML>
