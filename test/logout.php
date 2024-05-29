<?PHP
   session_start ();
?>
<HTML LANG="es">
<HEAD>
<TITLE>Desconectar</TITLE>
<LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">

</HEAD>
<BODY>

<?PHP
   if (isset($_SESSION["usuario_valido"]))
   {
      session_destroy ();
      print ("<BR><BR><P ALIGN='CENTER'>Conexi&oacute;n finalizada</P>\n");
      print ("<P ALIGN='CENTER'>[ <A HREF='index.php'>Conectar</A> ]</P>\n");
   }
   else
   {
      print ("<BR><BR>\n");
      print ("<P ALIGN='CENTER'>No existe una conexi&oacute;n activa</P>\n");
      print ("<P ALIGN='CENTER'>[ <A HREF='index.php'>Conectar</A> ]</P>\n");
   }
?>

</BODY>
</HTML>
