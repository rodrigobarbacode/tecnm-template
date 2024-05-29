<?php 

session_start();
$errors = '';
$nocontrol = '';
$correo = '';
$queja = '';

if(isset($_POST['enviar']))
{
	
	$nocontrol = $_POST['nocontrol'];
	$correo = $_POST['correo'];
	$queja = $_POST['queja'];
	$fecha = date("F j, Y, g:i.s A"); 
	///------------Do Validations-------------
	if(empty($nocontrol)||empty($correo)||empty($queja))
	{
		$errors .= "\n N&uacute;mero de control, queja y correo no deben quedar en blanco. ";	
	}
	if(IsInjected($correo))
	{
		$errors .= "\n direcci&oacute;n de correo no v&aacute;lido!";
	}
	if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		$errors .= "\n El captcha no es correcto!";
	}
	
	if(empty($errors))
	{
		$conexion = mysql_connect('localhost','quejas','Parh1kun1'); 
	        mysql_select_db('quejas');
			$instruccion = "SELECT ALU_NOM FROM `quejas`.`daluQuejas` WHERE ALU_CTR = '$nocontrol';";
			$consulta = mysql_query($instruccion,$conexion) or die ("Fall&oacute; la consulta del num ctrl");
				mysql_close($conexion);
			$resultado = mysql_fetch_array ($consulta);
			mysql_close($conexion);
			if(empty($resultado['ALU_NOM']))
			{	$errors.= "\n El n&uacute;mero de control no existe.";}
			else
			{	
				$conexion = mysql_connect('localhost','quejas','Parh1kun1'); 
			        mysql_select_db('quejas');
		        	$instruccion2 = "INSERT INTO `quejas`.`quejasAlumnos` (`FECHA_QUEJA`, `CONTROL`, `QUEJA`, `CORREO`) VALUES ('$fecha', '$nocontrol', '$queja', '$correo');";//insertar en tabla
				$consulta2 = mysql_query ($instruccion2, $conexion) or die ("Fallo en la consulta1");
				         mysql_close ($conexion);
				header("Location: http://www.itmexicali.edu.mx/quejas/salir.php");
				mysql_close ($conexion);
			}
	}
}

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Sistema de Quejas</title>
<!-- define some style elements-->
<style>
label,a, body 
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 12px; 
}
.err
{
	font-family : Verdana, Helvetica, sans-serif;
	font-size : 12px;
	color: red;
}
</style>	
<!-- a helper script for vaidating the form-->
<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>	
</head>

<body>
<?PHP
if(!empty($errors)){
echo "<p class='err'>".nl2br($errors)."</p>";
}
?>
<div id='contact_form_errorloc' class='err'></div>
    <div align="center"><A HREF="http://www.itmexicali.edu.mx"><img src="img/logos.png" width="1024" height="100"/></A></div>
	<div width="850px">
<form method="POST" name="contact_form" 
action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"> 

	<BR/><P ALIGN="CENTER"><FONT SIZE=4 COLOR="NAVY">Para el Instituto Tecnol&oacute;gico de Mexicali, es importante conocer tus inquietudes y nuevas ideas para poder ofrecerte un mejor servicio, por
tal motivo, pone a tu disposici&oacute;n este buz&oacute;n de <B><I>quejas y sugerencias</I></B>.</P>
<P ALIGN="CENTER">Le recomendamos no olvidar poner su direcci&oacute;n de correo electr&oacute;nico, para poder enviarle una respuesta m&aacute;s personalizada.</FONT></P>

	<p align="CENTER">
	<label><font size="5">Fecha: <?PHP echo date("F j, Y"); ?></font></label><BR/>
	<input type="hidden" name="fecha"> 
	<BR/><label><font size="5">No. Control:</font></label>
	<input type="text" name="nocontrol" size="10px"/><BR/>
	<label><font size="5"><BR/>Queja &oacute; Sugerencia:</font></label>
	<BR/><textarea rows="5" cols="50" name="queja" ></textarea><BR/>
	<label><font size="5"><BR/>Correo:</font></label>
	<input type="text" name="correo" size="50px"/><BR/>
<BR/>
<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' width="120" height="70"><br>
<label for='message'><font size="5">Escribe el c&oacute;digo aqu&iacute; debajo:</font></label><br>
<input id="6_letters_code" name="6_letters_code" type="text"><br>
<small>Si no puedes leer la imagen haz click <a href='javascript: refreshCaptcha();'>aqu&iacute;</a> para cambiar a otra</small><BR/>
	<BR/><input type="submit" name="enviar" value="Enviar queja"/>
	<BR/><FONT SIZE=3><P ALIGN='RIGHT' VALIGN='BOTTOM'>cco@cafv/fema/cacc</P></FONT>
</p>
</form>
<script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contact_form");
//remove the following two lines if you like error message box popups
frmvalidator.EnableOnPageErrorDisplaySingleBox();
frmvalidator.EnableMsgsTogether();

frmvalidator.addValidation("nocontrol","req","Por favor, introduce tu N&uacute;mero de control."); 
frmvalidator.addValidation("correo","req","Por favor, proporciona tu direcci&oacute;n correo."); 
frmvalidator.addValidation("correo","email","Por favor, proporciona una direcci&oacute;n de correo valida."); 
frmvalidator.addValidation("queja","req","Por favor, escribe una queja.");
</script>
<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
</body>
</html>
