<?php
// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
session_start(); 

if(isset($_SESSION['myusername']) == 1 and $_SESSION['nivel'] <> 5 ){
$_SESSION['myusername'] = $_SESSION['myusername'];
 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Lista Alumnos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
     <script type="text/javascript">
    var GB_ROOT_DIR = "greybox/";
	
 
	
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
<script type="text/javascript" src="greybox/AJS.js"></script>
<script type="text/javascript" src="greybox/AJS_fx.js"></script>
<script type="text/javascript" src="greybox/gb_scripts.js"></script>
<link href="greybox/gb_styles.css" rel="stylesheet" type="text/css" />
</head>
<body style="vertical-align:middle;">
<table height="100%" width="80%" cellpadding="0" cellspacing="0" align="center" style="box-shadow: 0px 0px 10px #888888; background-color:#FAFAFA">
<tr><td height="150px" align="center" style="vertical-align:top;box-shadow: 0px 0px 10px #888888;">
<div style=" z-index: 5; width:100%;text-align:right">
 
<a href="#" style="text-decoration:none" onclick="return GB_showCenter('ABC Usuarios', '../abcUsuarios.php?id=<?php echo $_SESSION['cve_usuario'] ?>',300,700)"> <img alt="" src="img/Keys16.png" /> &nbsp;<?php echo $_SESSION['myusername'] ?></span></a>
<a href="index.php" style="text-decoration:none">&nbsp;&nbsp;|&nbsp;&nbsp;<span style="font-weight: normal;"></span><img
                src="img/Unlocked16.png" />&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
<img src="img/encabezado.jpg" />
</td></tr>
<tr align="center"  width="95%">
<td width="95%">
<div id='cssmenu'>
<ul>
   <li class="active"><a href='lista_alumnos.php'>Lista Completa</a></li>
   <li><a href='lista_actividades.php'>Actividades</a></li>
   <li><a href='lista_periodos.php'>Periodos</a></li> 
   <?php
   if ( $_SESSION['nivel'] == 1){?> 
   <li><a href='lista_usuarios.php'>Usuarios</a></li> 
   <?php }?>
</ul>
</div>
 <br />
 <br />
 <br /></td></tr>
 
 <?php
 $db = new PDO('mysql:host=mariadb-php;dbname=actividades_complementarias;charset=utf8', 'actividades_comp', 'actComp.23'); 
 
 
 
$search = "";
 $filtroCreditos = "99";
 $filtroCarrera = "99";
  if(isset($_POST["search"]))
 {
 $search = $_POST["search"];
 }
   if(isset($_POST["filtroCreditos"]))
 {
 $filtroCreditos = $_POST["filtroCreditos"];
 }
  if(isset($_POST["filtroCarrera"]))
 {
 $filtroCarrera = $_POST["filtroCarrera"];
 }
?>

<tr>
<td>

<table height="90%" width="95%" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td>
<form action="lista_alumnos.php" method="post" id="frmId">
<input type="text" name="search" placeholder="No. Contro o Nombre" value="<?php echo  $search;?>" />
 &nbsp;&nbsp;&nbsp; No. Creditos
 <select name="filtroCreditos"> 
 <option <?php if($filtroCreditos == "99"){echo "selected='selected'";}?>  value="99">-Todos-</option>
 <option <?php if($filtroCreditos == 0){echo "selected='selected'";}?> value="0">0</option>
 <option <?php if($filtroCreditos == 1){echo "selected='selected'";}?> value="1">1</option>
 <option <?php if($filtroCreditos == 2){echo "selected='selected'";}?> value="2">2</option>
 <option <?php if($filtroCreditos == 3){echo "selected='selected'";}?> value="3">3</option>
 <option <?php if($filtroCreditos == 4){echo "selected='selected'";}?> value="4">4</option>
 <option <?php if($filtroCreditos == 5){echo "selected='selected'";}?> value="5">5</option>
 
 </select>
 
 &nbsp;&nbsp;&nbsp; Carrera:
 <select name="filtroCarrera">
 <option <?php if($filtroCarrera == "99"){echo "selected='selected'";}?>  value="99">-Todas-</option>
 <?php
 $stmt = $db->query("SELECT * FROM carreras");
 
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	 ?>
      <option <?php if($filtroCarrera == $row["carrera"]){echo "selected='selected'";}?> value="<?php echo $row["carrera"]?>"><?php echo $row["nom_carrera"]?></option>
     <?php
 }
 ?>
 </select>
 <input type="hidden" id="busqueda" name="busqueda" />
<a onclick="document.getElementById('frmId').submit();" class="aView">&nbsp; Buscar</a>
<br />
</form>
</td>
</tr>
<tr>
<td>&nbsp;

</td>
</tr>
<tr>

<td >
<?php
 if(isset($_POST["search"]))
 {?>
<div style="overflow:scroll; max-height:500px; min-height:500px;">
<form name="form" action="terminaProceso.php" method="post" onsubmit="return validar();">
<table width="100%" class="tableData" style="border-bottom:solid;border-bottom-color:#999; border-bottom-width:1px">
  <tr class="tableTitle" style="background-color:#999">
    <td rowspan="2" >No. Control</td>
    <td rowspan="2">Nombre</td>
    <td colspan="7" align="center">Actividades</td>

  </tr>
  <tr style="background-color:#999" align="center">
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>
    <td>Nivel de<br /> Desempe&ntilde;o</td>
    <td align="right"><input class="finalizar" id="finalizar" type="submit" value="CAPTURADO EN SII" /></td>
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
		// echo ("SELECT *, (select sum(creditos) from registro_actividad r where r.no_de_control = a.no_de_control) as total_creditos FROM alumnos a WHERE 1=1 ".$sql." ORDER BY  (select sum(creditos) from registro_actividad r where r.no_de_control = a.no_de_control) desc , registro_SII asc,nombre");
	$total_creditos =0;
	$registroSII = 0;
 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
 $total_creditos = $row['total_creditos'];
  $registroSII = $row['registro_SII'];
	?>
    <tr <?php if ($total_creditos >= 5 and $registroSII == 0 ) {echo "style='background-color:#DF6F77'"; } else if($registroSII == 1) {echo "style='background-color:#E4F4E1'"; }?>  >
    <td align="left" width="3%" style="font-weight:bold;">
    <?php
	if ($registroSII == 0){
	?>
     <a href="#" onclick="return GB_showCenter('Registro Actividad', '../abcRegistro.php?id=<?php echo $row['no_de_control'] ?>',500,700)" class="aAdd2">&nbsp;<?php echo $row['no_de_control'] ?></a>
     
     <?php
	}
	else {  echo "&nbsp;&nbsp;&nbsp;".$row['no_de_control'];}
	?>
     </td>
     
    <td width="30%" ><?php echo $row['nombre']." ".$row['a_paterno']." ".$row['a_materno'] ?></td>  
       
       <?php
 
	   $no_control =  $row["no_de_control"] ;
	$stmt2 = $db->query("SELECT CONCAT( actividad,  ' (', ra.creditos,  ')' ) AS actividad, p1.periodo AS periodo_inicial, p2.periodo AS periodo_final, ra.comentario, ra.creditos, ra.cve_registro, ra.nivel,ra.tipor
FROM registro_actividad ra
INNER JOIN alumnos a ON a.no_de_control = ra.no_de_control
INNER JOIN actividades ac ON ac.cve_actividad = ra.cve_actividad
INNER JOIN periodos p1 ON p1.cve_periodo = periodo_inicial
INNER JOIN periodos p2 ON p2.cve_periodo = periodo_final
WHERE ra.no_de_control ='". $no_control."' LIMIT 0 , 5");
 $count = 5;
 $actividad = 0;
 $nivel = 0;
 $tipor = 0;
while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
	$tipor = $tipor+$row2['tipor'];
if($row2['tipor'] ==1){
	$actividad = $actividad +1;
	$nivel = $nivel + $row2['nivel'];
	}
	$count = $count - 1;
	 if ($registroSII == 0){
	?>
    <td class="showhim" width="14%"><span class="shown">
	<a href="#" onclick="return GB_showCenter('Registro Actividad', '../abcRegistro.php?cve_registro=<?php echo $row2['cve_registro'] ?>',500,700)" class="aEdit"><?php echo $row2['actividad'] ?></a>
	</span>
    <div class="showme">
    <table width="500px" style="max-width:500px;">
    <tr>
    <td class="tdBold">
    Creditos:
    </td>
    <td>
    <?php echo $row2['creditos'] ?>
    </td>
    </tr>
    <?php
	if($actividad > 0 and $tipor >= 1){?>
    <tr>
    <td class="tdBold">
    Nivel de Desempe&ntilde;o:
    </td>
    <td>
    <?php echo $row2['nivel'] ?>
    </td>
    </tr>
    <?php }?>
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
    <tr>
     <td  class="tdBold" >
    Observaciones:
    </td>
    <td  style="max-width:500px; word-wrap:break-word">
    <?php echo $row2['comentario'] ?>
    </td>
    </tr>
    </table>
     
    </div>
    </td>
        <?php
	 }
	 else
	 {
		 ?>
    <td class="showhim" width="14%"><span class="shown">
	<?php echo $row2['actividad'] ?>
	</span>
    <div class="showme">
    <table width="500px" style="max-width:500px;">
    <tr>
    <td class="tdBold">
    Creditos:
    </td>
    <td>
    <?php echo $row2['creditos'] ?>
    </td>
    </tr>
    <?php
	if($actividad > 0 and $tipor >= 1){?>
    <tr>
    <td class="tdBold">
    Nivel de Desempe&ntilde;o:
    </td>
    <td>
    <?php echo $row2['nivel'] ?>
    </td>
    </tr>
    <?php }?>
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
    <tr>
     <td  class="tdBold" >
    Observaciones:
    </td>
    <td  style="max-width:500px; word-wrap:break-word">
    <?php echo $row2['comentario'] ?>
    </td>
    </tr>
    </table>
     
    </div>
    </td>
        <?php
	 }
} 
if ($count > 0)
{
	echo "<td  colspan=\"$count\">&nbsp;</td>";
}
	?>
    <td align="center" style="font-weight:bold">
    <?php
	if($actividad > 0 and $tipor >= 1){
	$nivel = $nivel / $actividad;
	if($nivel >= 4 )
	echo "Excelente";
	else if($nivel >= 3 and $nivel < 4)
	echo "Notable";
	else if($nivel >= 2 and $nivel < 3)
	echo "Bueno";
	else if($nivel >= 1 and $nivel < 2)
	echo "Suficiente";
	else if($nivel >= 0 and $nivel < 1)
	echo "Insuficiente";
	}
	?>
    </td>
    <?php
	if ($total_creditos >= 5 and $registroSII == 0){
		echo "<td width=\"5%\" align=\"center\"><input type=\"checkbox\" onclick=\"getChecado(this)\" name=\"cbxSII[]\" id=\"$no_control\" value=\"$no_control\" /></td>";
	}
	else if ($registroSII == 1){
	{?>
    <td  width="2%" align="center">
      <a href="#" onclick="return GB_showCenter('Desligar de SII', '../desligaSII.php?id=<?php echo $no_control ?>',0,0)" class="delete">&nbsp;&nbsp;X&nbsp;&nbsp;</a></td>
    <?php
		 
		}}
	else
	{
		echo "<td class=\"tdBold\">&nbsp;</td>";
		}
	
	
	?>
    
    </tr>
    <?php
	  
}
$db = null;

	?>
</table>
</form>
</div>
<?php
 }
 ?>
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
</body>
</html>
 <?php
}

else
{
header("location:index.php");
}?>