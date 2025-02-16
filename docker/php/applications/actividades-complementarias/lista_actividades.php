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
    <title>Lista Actividades</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript">
    var GB_ROOT_DIR = "greybox/";
</script>
<script type="text/javascript" src="greybox/AJS.js"></script>
<script type="text/javascript" src="greybox/AJS_fx.js"></script>
<script type="text/javascript" src="greybox/gb_scripts.js"></script>
<link href="greybox/gb_styles.css" rel="stylesheet" type="text/css" />
</head>
<body style="vertical-align:middle;">
<table height="100%" width="60%" cellpadding="0" cellspacing="0" align="center" style="box-shadow: 0px 0px 10px #888888; background-color:#FAFAFA">
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
   <li><a href='lista_alumnos.php'>Lista Completa</a></li>
   <li class="active"><a href='lista_actividades.php'>Actividades</a></li>
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


<tr>
<td>
<table height="90%" width="95%" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
 <?php
 $db = new PDO('mysql:host=mariadb-php;dbname=actividades_complementarias;charset=utf8', 'actividades_comp', 'actComp.23'); 
 ?>
<td >

<div style="overflow:scroll; max-height:500px; min-height:500px;">
<table width="100%" class="tableData">
<tr style="background-color:transparent;">
<td colspan="7">
<a href="#" onclick="return GB_showCenter('ABC Actividades', '../abcActividades.php',300,700)" class="aAdd">Agregar Actividad</a>
</td>
</tr>
   <tr class="tableTitle" style="background-color:#999">
    <td>Actividad</td>
    <td>Creditos</td>
    </tr>
   
    <!--aqui el siclo de los alumnos-->
    <?php
	$stmt = $db->query('SELECT * FROM actividades');
 
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
 
	?>
    <tr >
    <td width="50%" >
    <a href="#" onclick="return GB_showCenter('ABC Actividades', '../abcActividades.php?id=<?php echo $row['cve_actividad'] ?>',300,700)" class="aEdit"><?php echo $row['actividad'] ?></a>
    </td>
    <td width="50%" ><?php echo $row['creditos'] ?></td> 
    </tr>
    <?php
	  
}
$db = null;

	?>
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
</body>
</html>
 <?php
}
else
{
header("location:index.php");
}?>