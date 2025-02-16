<?php
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
session_start(); 

if(isset($_SESSION['myusername']) == 1){
$_SESSION['myusername'] = $_SESSION['myusername'];
 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Mi Registro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="greybox/AJS.js"></script>
<script type="text/javascript" src="greybox/AJS_fx.js"></script>
<script type="text/javascript" src="greybox/gb_scripts.js"></script>
  
<link href="greybox/gb_styles.css" rel="stylesheet" type="text/css" />
     <script type="text/javascript">
 
    var GB_ROOT_DIR = "greybox/";
	
 //common initialization
dhtmlx.message({
    title: "Close",
    type: "alert-warning",
    text: "You can't close this window!",
    callback: function() {dhtmlx.alert("Test alert");}
});
	
	function validar()
{
var chks = document.getElementsByName('cbxSII[]');
var checkCount = 0;
var text = new Array();
var strtext = "";
 
for (var i = 0; i < chks.length; i++)
{
if (chks[i].checked)
{
var arlength = text.length;
text[arlength] = chks[i].value;
}
 
}
strtext = text.join("\n");

if(strtext.length == 0)
{
	alert('NO A SELECCIONADO NINGUN ALUMNO');
return false;
}
else
{
	if(confirm('LA SELECCION ES CORRECTA?\n'+strtext))
	{
		return true;
		}
		else
		return false;
}

}
</script>

</head>
<body style="vertical-align:middle;">
<table height="100%" width="60%" cellpadding="0" cellspacing="0" align="center" style="box-shadow: 0px 0px 10px #888888; background-color:#FAFAFA">
<tr><td height="150px" align="center" style="vertical-align:top;box-shadow: 0px 0px 10px #888888;">
<img src="img/encabezado.jpg" />
</td></tr>
<tr align="center"  width="95%">
<td width="95%">
 
 <br />
 <br />
 <br /></td></tr>
 
 <?php
 $db = new PDO('mysql:host=mariadb-php;dbname=actividades_complementarias;charset=utf8', 'root', 'Tzuput4r0'); 
 
 
 
$search = $_SESSION['myusername'];
  
?>

<tr>
<td>
<table height="90%" width="95%" border="0" align="center" cellpadding="0" cellspacing="1"> 
<tr>
<td>&nbsp;

</td>
</tr>
<tr>

<td >
<div style="  max-height:500px; min-height:500px;"> 
<table width="100%"   >
  <tr class="tableTitle" style="background-color:#999">
    <td  >No. Control</td>
    <td  style="text-align:center">Nombre</td>
    <td align="left">Actividades</td>

  </tr>
   
    <!--aqui el siclo de los alumnos-->
    <?php
	$sql = "";
	
	 if ($search != "")
	 {
		$sql = " AND (no_de_control like (case when '".$search."' <> '' THEN '%".$search."%' else no_de_control end) OR nombre like (case when '".$search."' <> '' THEN  '%".$search."%' else nombre end))";
		 }
		 if($filtroCreditos != "99" and	 $filtroCreditos != 0)
		 {
			 $sql = $sql."  AND (select sum(creditos) from registro_actividad r where r.no_de_control = a.no_de_control) = ".$filtroCreditos; 
			 }
			 if($filtroCarrera != "99" and	 $filtroCarrera != 0)
		 {
			 $sql = $sql."  AND carrera = ".$filtroCarrera; 
			 }
	 
		 $stmt = $db->query("SELECT *, (select sum(creditos) from registro_actividad r where r.no_de_control = a.no_de_control) as total_creditos FROM alumnos a WHERE 1=1 ".$sql." ORDER BY  (select sum(creditos) from registro_actividad r where r.no_de_control = a.no_de_control) desc , registro_SII asc,nombre");
		 
	$total_creditos =0;
	$registroSII = 0;
 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
 $total_creditos = $row['total_creditos'];
  $registroSII = $row['registro_SII'];
	?>
    <tr  >
    <td align="left" width="3%" style="font-weight:bold;">
  
      &nbsp;<?php echo $row['no_de_control'] ?> 
      </td>
     
    
     </td>
     
    <td width="30%" style="text-align:center" ><?php echo $row['nombre'] ?></td>  
       <td>
        <table  >
       <?php
	   $no_control =  $row["no_de_control"] ;
	$stmt2 = $db->query("SELECT CONCAT( actividad,  ' (', ra.creditos,  ')' ) AS actividad, p1.periodo AS periodo_inicial, p2.periodo AS periodo_final, ra.comentario, ra.creditos, ra.cve_registro
FROM registro_actividad ra
INNER JOIN alumnos a ON a.no_de_control = ra.no_de_control
INNER JOIN actividades ac ON ac.cve_actividad = ra.cve_actividad
INNER JOIN periodos p1 ON p1.cve_periodo = periodo_inicial
INNER JOIN periodos p2 ON p2.cve_periodo = periodo_final
WHERE ra.no_de_control ='". $no_control."' LIMIT 0 , 5");
 $count = 0;
while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
	$count = $count + 1;
	 
	?>
   
    <tr>
    <td class="showhim" width="14%"  style="border-bottom:solid;border-bottom-color:#999; border-bottom-width:1px"><span class="shown">
	<a href="#" class="aView"><?php echo $row2['actividad'] ?></a>
	</span>
    <div class="showme" id="dDetalle">
    <table width="500px" style="max-width:500px;">
    <tr>
    <td class="tdBold">
    Creditos:
    </td>
    <td>
    <?php echo $row2['creditos'] ?>
    </td>
    </tr>
    <tr>
    <td class="tdBold">
    Periodo Incio:
    </td>
    <td>
    <?php echo $row2['periodo_inicial'] ?>
    </td>
     </tr>
    <tr>
    <td  class="tdBold">
    Periodo Final:
    </td>
    <td>
    <?php echo $row2['periodo_final'] ?>
    </td>
     </tr>
      <?php
	if(($row2['comentario']+"")!= "" ){
		?>
    <tr>
   
     <td  class="tdBold" >
    Observaciones:
    </td>
    <td  style="max-width:500px; word-wrap:break-word;">
    <?php echo $row2['comentario'] ?>
    </td>
    </tr>
    <?php
	}
	?>
    </table>
     
    </div>
    </td>
    </tr >
        <?php
	 
        
	  
} 
if ($count < 1)
{
	?>
    <tr>
    <td style="color:#ff0000; font-size:14px;"  colspan="$count">&nbsp;NO CUENTA CON ACTIVIDADES CAPTURADAS. </td> 
 
    </tr>
   
    <?php
}
}
$db = null;

	?> 
    </table>
    <tr>
<td style="height:200px; text-align:center" colspan="3">
<a href="index.php" class="btn">SALIR</a>
</td>
</tr>
</table>
 
</div>

</td>
</tr>

</table>
</td>
 
</tr>

<tr><td align="center"><span style="font-size:8pt; text-align:center;" >CCO@JCSL/DES_SIS.24.01</td></tr>
</table>
</td>
</tr>
<tr><td height="200px">&nbsp;</td></tr>

</table>
<!-- The first DIV for creating an Overlay -->
<div class="dim"  title="Event"  id="alertaB">
</div>  

<!-- The second div. Note, that the wrapper is only need to center the real dialog div -->
<div class="dialog_wrapper" id="alertaF"  >
    <div class="dialog"> Este sitio se encuentra en proceso de captura de datos, es posible que aun no esten capturadas sus actividades complementarias. <br /><br /><br />Por su comprensi&oacute;n, Gracias<br />
    <br />  <br />  <br />
    <a href="#" class="btn" onclick="document.getElementById('alertaB').style.display = 'none';document.getElementById('alertaF').style.display = 'none';">CERRAR</a></div>
    
</div>
</body>
</html>
 <?php
}
else
{
header("location:index.php");
}?>