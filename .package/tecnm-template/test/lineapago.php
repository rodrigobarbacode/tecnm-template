<?PHP



// Iniciar sesi n

   session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>SECRETARIA DE EDUCACION PUBLICA, LINEAS REFERENCIADAS DE DEPOSITO</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />
    <style type="text/css">
<!--
.Estilo3 {font-size: 16px}
.Estilo4 {
	font-size: 36px;
	color: #FF0000;
	font-weight: bold;
}
.Estilo5 {font-size: 30px; color: #FF0000; font-weight: bold; }
.Estilo6 {color: #000099}
.Estilo8 {font-size: 18px}
-->
    </style>
</head>

<body>
<?PHP 
   if (isset($_SESSION["usuario_valido"]))

   {

?>
		<div align="center"><img src="img/logos.png" /></div>
<div width="850px">
	<?php
		if($_POST['enviar'])
		{
			include("getData.php");
			getData($_POST['nocontrol'], $_POST['concepto'], $_POST['factura']);
		}
		else {
		?>
		
  <form method="post" action="<?php $PHP_SELF; ?>" />
		<p class="Estilo3"><strong>N&uacute;mero de Control</strong>
		  <input type="text" name="nocontrol" size="10px" />
		  <SELECT name="concepto">
		<?php
			if($_SESSION["usuario_valido"]=="idiomas")
			{
		?>
		   
		<?php
	    	}
		elseif($_SESSION["usuario_valido"]=="escolares")
		  {
		?>
			
		<?php
		}
	elseif($_SESSION["usuario_valido"]=="tec")
	{
	?>
			
	
	<?php
	}
	
	elseif($_SESSION["usuario_valido"]=="titulacion")
	{
	?>

	<?php
	}
	
	elseif($_SESSION["usuario_valido"]=="academicos")
	{
	?>

	<?php
	}
    elseif($_SESSION["usuario_valido"]=="quimica")
	{
	?>
	<option value="120">MANUAL DE PRACTICAS DE QUIMICA</option>
	<?php
	}
	elseif($_SESSION["usuario_valido"]=="financieros")
	{
	?>
            <option value="100">CERTIFICADO OFICIAL DE ESTUDIOS Y DIPLOMA DE ESPECIALIDAD</option>
		    
			<option value="700">ARGOS</option>
               
	<?php
	}
	
	elseif($_SESSION["usuario_valido"]=="profesionales")
	{
	?>
	<option value="444">REINCRIPCION ENERO JUNIO RESIDENCIAS 50%</option>
	<?php
	}
	
	elseif($_SESSION["usuario_valido"]=="homologados")
	{
	?>
	<option value="400">REINSCR. HOMOLOGADOS Y SISTEMA FEDERAL</option>
	<?php
	}
	
	elseif($_SESSION["usuario_valido"]=="posgrado")
	{
	?>
    
	<?php
	}
	?>
          </SELECT>
    </p>
		<p class="Estilo3"><strong>Requiere Factura.</strong>.:
		Si
		  <input type="radio" name="factura" value="1" />
		No
		<input type="radio" name="factura" value="0" checked />
  </p>
		<p class="Estilo3">
		  <input type="submit" name="enviar" value="Generar recibo de pago" />
		  <?php } ?>
  </p>
</div>
		
</div>

<div align="center">
  <p align="center"><strong>No. DE CONVENIO 2092 BANCO SANTANDER</strong></p>  
  <p align="left"><strong>**Fecha de pago: 8 y 9 enero 2020</strong></p>  
    <p align="left"><strong>**</strong></p>

  <p align="center">* * * IMPORTANTE * * *</p>  
  <p align="left">**Alumnos que requieren FACTURA del servicio(R.F.C.)</p>  
  <p align="left">Si requieren FACTURA por el servicio que se está pagando en necesario que acuda  al Departamento de Recursos Financieros en el área de ventanilla el MISMO DÍA en el que se está llevando a cabo el pago presentando:</p>  
  <p align="left">**</p>  
    <p align="center">****************************************************************************</p>  
  <p align="left"><strong>**Si haces caso omiso a las instrucciones y pagas la reinscripci&oacute;n, ser&aacute; tu responsabilidad, por lo que el Instituto Tecnol&oacute;gico de Mexicali no se hace responsable de hacer v&aacute;lida tu inscripci&oacute;n,  ni de la devoluci&oacute;n del dinero.</strong></p>  
  <p align="left">  Atentamente: Recursos Financieros</p>    
  
  <p align="center"><strong><a href="logout.php">Salir</a></strong></p>
  <p align="left">&nbsp;</p>
  <p align="left"><img src="img/vivirmejor.png" width="216" height="129" /></p>
  <p align="left">&nbsp;</p>
</div>
<?PHP
	}
else

   {

      print ("<BR><BR>\n");

      print ("<P ALIGN='CENTER'>Acceso no autorizado</P>\n");

      print ("<P ALIGN='CENTER'>[ <A HREF='index.php' TARGET='_top'>Conectar</A> ]</P>\n");

   }

?>
</body>

</html>
