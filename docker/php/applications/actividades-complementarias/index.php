<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    
</head>

<body style="vertical-align:middle;">
<table height="100%" width="60%" cellpadding="0" cellspacing="0" align="center" style="box-shadow: 0px 0px 10px #888888; background-color:#FAFAFA">
<tr><td height="150px" align="center" style="vertical-align:top;box-shadow: 0px 0px 10px #888888;">
<div class="container">
<img src="img/encabezado.jpg" style="width:100%" />
</div>
</td></tr>
<tr><td class="title" height="150px" width="150px" align="center">
<div style="width:50%; text-align:center;" align="center">
ACTIVIDADES COMPLEMENTARIAS
</div>
<a href="/actividades_complementarias/solicitud_creditos.docx">Descarga aquí el formato de solicitud</a>
<tr><td>
<table height="300px" width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<form name="form1" method="post" action="checklogin.php">
<td >
<table style="box-shadow: 0px 0px 10px #888888; -moz-border-radius: 35px;
border-radius: 5px;" width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FAFAFA">
<tr>
<td colspan="3"><strong>Acceso </strong></td>
</tr>
<tr>
<td width="78" align="right">Usuario:</td>
<td width="294"><input name="myusername" type="text" id="myusername" placeholder="No.Control"></td>
</tr>
<tr>
<td  align="right">Contraseña:</td>
<td><input name="mypassword" type="password" id="mypassword" placeholder="No.Control"></td>
</tr>
<tr> 
<td colspan="2" align="center"><input type="submit" name="Submit" value="Entrar"></td>
</tr>
<tr> 
<td colspan="2" align="center"> 
<?php
if(isset($_GET["error_log"])){
$error = $_GET["error_log"];
if($error == 1)
{
	?>
    <span style="font-size:11pt;color:#F00;">
 Usuario y/o contraseña incorrectos.
 </span>
    <?php
	}}
?>
</td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</td>
</tr>
<tr><td height="200px">&nbsp;</td></tr>
<tr><td align="center"><span style="font-size:8pt; text-align:center;" >CCO@JCSL/DES_SIS.24.01</td></tr>
</table>
</body>
</html>
