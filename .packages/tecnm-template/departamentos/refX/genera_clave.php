<HTML LANG="es">
<HEAD>
   <TITLE>Inserci�n de usuario</TITLE>
</HEAD>

<BODY>

<?PHP
// Escribir aqu� el nombre y la clave del usuario que se desea crear
   $usuario="academicos";
   $clave="4c4demicos";
   
   $conexion = mysql_connect ("localhost", "referenciaspagos", "referenciaspagos")
      or die ("No se puede conectar con el servidor");
   mysql_select_db ("pagosbanco_new")
      or die ("No se puede seleccionar la base de datos");
   $salt = substr ($usuario, 0, 2);
   $clave_crypt = crypt ($clave, $salt);
   $instruccion = "insert into usuarios (usuario, clave) values ('$usuario', '$clave_crypt')";
   $consulta = mysql_query ($instruccion, $conexion)
      or die ("Fallo en la inserci�n");
   mysql_close ($conexion);
   print ("Usuario $usuario insertado con Exito\n");
?>

</BODY>
</HTML>
