<?php
function Conectarse()
{
   if (!($link=mysql_connect("mariadb-php","actividades_complementarias","actividades")))
   {
      echo "Error conectando a la base de datos.";
      exit();
   }
   if (!mysql_select_db("actividades",$link))
   {
      echo "Error seleccionando la base de datos.";
      exit();
   }
   return $link;
}

$link=Conectarse();


mysql_close($link); //cierra la conexion
?>
