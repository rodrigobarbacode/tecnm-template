<HTML LANG="es">

<HEAD>
   <TITLE>Consulta de Quejas</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
  <!-- <META HTTP-EQUIV="REFRESH" CONTENT="3;URL=http://www.itmexicali.edu.mx/quejas/consulta/consulta.php">-->
</HEAD>

<BODY>

<?PHP
 //Iniciar sesion
   session_start();

   // Conectar con el servidor de base de datos
   $conexion = mysql_connect('127.0.0.1','root','itmXoto13'); 
     if (!$conexion)
	 die("No se puede conectar con el servidor" . mysql_error()."<P>[ <A HREF='menu.php'>Regresar al men&uacute;</A> ]</P>\n");
	
if (isset($_SESSION["usuario_valido"]))

   {

   // Seleccionar base de datos 
   $db = mysql_select_db ("quejas");
   if (!$db) die ("No se puede seleccionar la base de datos");

   // Establecer el número de filas por página y la fila inicial
      $num = 10; // número de filas por página
      $comienzo = $_REQUEST['comienzo'];
      if (!isset($comienzo)) $comienzo = 0;

   // Calcular el número total de filas de la tabla
        $instruccion = "select FECHA_QUEJA,CONTROL, ATENDIDA, FECHA_RESP from quejasAlumnos where ATENDIDA = 'SI';";
        $consulta = mysql_query ($instruccion, $conexion);
        if (!$consulta) 
		{
		   print ("Falló la consulta, Error: " . mysql_error());
		   //print ("<P>[ <A HREF='menu.php'>Regresar al men&uacute;</A> ]</P>\n");
		   die ("");
		}

	  $nfilas = mysql_num_rows ($consulta);
      if ($nfilas > 0)
      {
	 print("<P CLASS='parrafocentrado' align=center><img src='img/logos.png' width='1024' height='100'>");
	print("<div width='850px'>");
	print("<H1><P align='CENTER'> Consulta de Quejas</P></H1>");
      // Mostrar números inicial y final de las filas a mostrar
         print ("<font size='5'><P ALIGN='CENTER'>Mostrando Miembros " . ($comienzo + 1) . " a ");
         if (($comienzo + $num) < $nfilas)
            print ($comienzo + $num);
         else
            print ($nfilas);
         print (" de un total de $nfilas.\n");

      // Mostrar botones anterior y siguiente
         $estapagina = $_SERVER['PHP_SELF'];
         if ($nfilas > $num)
         {
            if ($comienzo > 0)
               print ("[ <A HREF='$estapagina?comienzo=" . ($comienzo - $num) . "'>Anterior</A> | ");
            else
               print ("[ Anterior | ");
            if ($nfilas > ($comienzo + $num))
               print ("<A HREF='$estapagina?comienzo=" . ($comienzo + $num) . "'>Siguiente</A> ]\n");
            else
               print ("Siguiente ]\n");
         }
         print ("</P></font>\n");

      }

   // Enviar consulta

        $consulta = mysql_query ($instruccion, $conexion);
        $instruccion = "select * from quejasAlumnos where ATENDIDA = 'SI' limit $comienzo, $num" ;
        $consulta = mysql_query ($instruccion, $conexion);
        if (!$consulta) 
		{
		   print ("Falló la consulta, Error: " . mysql_error());
		   //print ("<P>[ <A HREF='consulta.php'>Hacer otra consulta</A> ]</P>\n");
		   die ("");
		}

      // Mostrar resultados de la consulta
      $nfilas = mysql_num_rows ($consulta);
      if ($nfilas > 0)
      {
         print ("<P ALIGN='CENTER'><TABLE BORDER>\n");
         print ("<TR>\n");
         print ("<TH><font size=5>Fecha Queja</font></TH>\n");
         print ("<TH><font size=5>No. Control</font></TH>\n");
         print ("</TR>\n");

         for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysql_fetch_array ($consulta);
            print ("<TR>\n");
            print ("<TD><font size=5><center><A HREF=\"verqueaten.php?fecha_queja=" . $resultado['FECHA_QUEJA'] . "\" TARGET=\"_blank\">".$resultado['FECHA_QUEJA']."</A> </TD>\n");
            print ("<TD><font size=5><center>" . $resultado['CONTROL'] . "</center></font></TD>\n");
            print ("</TR>\n");
         }

         print ("</TABLE></P>\n");

         print ("<BR>\n");
	 print ("<P ALIGN='CENTER'><font size='5'>[ <A HREF='menu.php'>Regresar al men&uacute;</A> ]</font></P>\n");
	print("<BR/><FONT SIZE=3><P ALIGN='RIGHT' VALIGN='BOTTOM'>cco@cafv/fema/cacc</P></FONT>");
      }
      else{
	 print("<P CLASS='parrafocentrado' align=center><img src='img/logos.png' width='1024' height='100'>");
	print("<div width='850px'>");
	 print("<H1><P align='CENTER'> Consulta de Quejas</P></H1>");
         print ("<P ALIGN='CENTER'><font size='5'>No hay registros en el rango de la consulta</font></P>");
	 print ("<P ALIGN='CENTER'><font size='5'>[ <A HREF='menu.php'>Regresar al men&uacute;</A> ]</font></P>\n");
	print("<BR/><FONT SIZE=3><P ALIGN='RIGHT' VALIGN='BOTTOM'>cco@cafv/fema/cacc</P></FONT>");}
  }
	else
   {

      print ("<BR><BR>\n");

      print ("<font size='5'><P ALIGN='CENTER'>Acceso no autorizado</P></font>\n");

      print ("<font size='5'><P ALIGN='CENTER'>[ <A HREF='index.php' TARGET='_top'>Conectar</A> ]</P></font>\n");
	print("<BR/><FONT SIZE=3><P ALIGN='RIGHT' VALIGN='BOTTOM'>cco@cafv/fema/cacc</P></FONT>");

   }
// Cerrar conexión
   mysql_close ($conexion);

?>

</BODY>
</HTML>
