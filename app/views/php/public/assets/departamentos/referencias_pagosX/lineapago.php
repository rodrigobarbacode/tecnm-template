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
		    <option value="121">CURSO DE INGLES 3ER SEMESTRE EN ADELANTE, TRASLADO, REVALIDACION y VERANO</option>
		    <option value="122">CURSO DE INGLES PARA NO ESTUDIANTES</option>
		    <option value="123">EXAMEN DE ACREDITACION DE INGLES TOIEC</option>
		    <option value="124">REPOSICION DE CONSTANCIA DE LIBERACION DE INGLES</option>
		    <option value="777">DIPLOMA DE INGLES MODELO IAAP</option>
		<?php
	    	}
		elseif($_SESSION["usuario_valido"]=="escolares")
		  {
		?>
			<option value="100">CERTIFICADO OFICIAL DE ESTUDIOS Y DIPLOMA DE ESPECIALIDAD</option>
		    <option value="101">DUPLICADO DE CERTIFICADO OFICIAL DE ESTUDIOS</option>
		    <option value="102">CERTIFICADO PARCIAL DE ESTUDIOS</option>
		    <option value="103">FICHA Y EXAMEN DE ADMISION</option>
		    <option value="105">CONSTANCIA DE ESTUDIOS "A" SIN CALIFICACIONES</option>
		    <option value="106">CONSTANCIA DE ESTUDIOS "B" CON CALIFICACIONES</option>
		    <option value="107">CREDENCIAL DUPLICADO</option>
		    <option value="108">EXAMEN GLOBAL</option>
		    <option value="109">EXAMEN ESPECIAL</option>
		    <option value="110">ELABORACION DE TITULO</option>
		    <option value="111">CURSO DE TITULACION (90 HORAS)</option>
		    <option value="112">CURSO DE VERANO (60 Y 75 HORAS)</option>
		    <option value="113">CURSO DE VERANO (90 HORAS)</option>
		    <option value="115">INSCRIPCION NUEVO INGRESO (INGLES Y SEGURO DE GASTOS MEDICOS)</option>
		    <option value="116">REINSCRIPCION 2DO SEMESTRE (INGLES Y SEGURO DE GASTOS MEDICOS)</option>
		    <option value="117">REINSCRIPCION 3ER SEMESTRE EN ADELANTE</option>
            <option value="125">CURSO PROPEDEUTICO DE MAESTRIA</option>
            <option value="126">TESIS GRADO DE MAESTRIA O TESIS DE ESPECIALIDAD</option>
            <option value="127">CUOTA POR CREDITO DE MAESTRIA O ESPECIALIDAD</option>
            <option value="128">INSCRIPCION MAESTRIA POR CUATRIMESTRE (NVO INGRESO</option>
            <option value="140">REINSCRIPCION MAESTRIA </option>
			<option value="141">SOLAMENTE FICHA NUEVO INGRESO </option>
                         <option value="776">DICTAMEN TECNICO EQUIVALENCIA</option>

		<?php
		}
	elseif($_SESSION["usuario_valido"]=="tec")
	{
	?>
			<option value="105">CONSTANCIA DE ESTUDIOS SIMPLE</option>
		    <option value="106">CONSTANCIA DE ESTUDIOS CON CALIFICACIONES KARDEX</option>
		    <option value="107">REPOSICION DE CREDENCIAL</option>
		    <option value="120">MANUAL DE PRACTICAS QUIMICA</option>
		    <option value="124">REPOSICION DE CONSTANCIA DEL IDIOMAS INGLES</option>
		    <option value="555">REPOSICION TARJETON ESTACIONAMIENTO</option>
	
	<?php
	}
	
	elseif($_SESSION["usuario_valido"]=="titulacion")
	{
	?>
	<option value="104">EXAMEN PROFESIONAL O ACTO PROTOCOLARIO DE TITULACION</option>
	<?php
	}
	
	elseif($_SESSION["usuario_valido"]=="academicos")
	{
	?>
	<option value="118">PROGRAMAS DE MATERIAS SELLADOS POR EL INSTITUTO (TEMARIOS)</option>
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
		    <option value="101">DUPLICADO DE CERTIFICADO OFICIAL DE ESTUDIOS</option>
		    <option value="102">CERTIFICADO PARCIAL DE ESTUDIOS</option>
		    <option value="103">FICHA Y EXAMEN DE ADMISION</option>
		    <option value="105">CONSTANCIA DE ESTUDIOS "A" SIN CALIFICACIONES</option>
		    <option value="106">CONSTANCIA DE ESTUDIOS "B" CON CALIFICACIONES</option>
		    <option value="107">CREDENCIAL DUPLICADO</option>
		    <option value="108">EXAMEN GLOBAL</option>
		    <option value="109">EXAMEN ESPECIAL</option>
		    <option value="110">ELABORACION DE TITULO</option>
		    <option value="111">CURSO DE TITULACION (90 HORAS)</option>
		    <option value="112">CURSO DE VERANO (60 Y 75 HORAS)</option>
		    <option value="113">CURSO DE VERANO (90 HORAS)</option>
		    <option value="115">INSCRIPCION NUEVO INGRESO (INGLES Y SEGURO DE GASTOS MEDICOS)</option>
		    <option value="116">REINSCRIPCION 2DO SEMESTRE (INGLES Y SEGURO DE GASTOS MEDICOS)</option>
		    <option value="117">REINSCRIPCION 3ER SEMESTRE EN ADELANTE</option>
            <option value="118">PROGRAMAS DE MATERIAS SELLADOS POR EL INSTITUTO (TEMARIOS)</option>
            <option value="119">RETRASO ENTREGA DE LIBROS (POR DIA)</option>
            <option value="120">MANUAL DE PRACTICAS DE QUIMICA</option>
            <option value="121">CURSO DE INGLES 3ER SEMESTRE EN ADELANTE, TRASLADO Y REVALIDACION</option>
		    <option value="122">CURSO DE INGLES PARA NO ESTUDIANTES</option>
		    <option value="123">EXAMEN DE ACREDITACION DE INGLES TOIEC</option>
		    <option value="124">REPOSICION DE CONSTANCIA DE LIBERACION DE INGLES</option>
            <option value="125">CURSO PROPEDEUTICO DE MAESTRIA</option>
            <option value="126">TESIS GRADO DE MAESTRIA O TESIS DE ESPECIALIDAD</option>
            <option value="127">CUOTA POR CREDITO DE MAESTRIA O ESPECIALIDAD</option>
            <option value="128">INSCRIPCION MAESTRIA POR CUATRIMESTRE (NVO INGRESO</option>
            <option value="129">RENTA DE SALA AUDIOVISUAL</option>
            <option value="130">PAGO GRUPAL DE VERANO 60 HRS</option>
            <option value="131">PAGO GRUPAL DE VERANO 90 HRS</option>
            <option value="132">PAGO DE VERANO 60 HRS 50%</option>
            <option value="133">PAGO DE VERANO 90 HRS 50%</option>
            <option value="555">REPOSICION TARJETON ESTACIONAMIENTO</option>
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
        <option value="125">CURSO PROPEDEUTICO DE MAESTRIA</option>
        <option value="126">TESIS GRADO DE MAESTRIA O TESIS DE ESPECIALIDAD</option>
        <option value="127">CUOTA POR CREDITO DE MAESTRIA O ESPECIALIDAD</option>
        <option value="128">INSCRIPCION MAESTRIA POR CUATRIMESTRE (NVO INGRESO</option>
            <option value="140">REINSCRIPCION MAESTRIA </option>
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

 <h2 class="container text-center"><strong>AVISO</strong></h2>
      </div>
      <div class="container text-center">
        <h3><strong>No. De CONVENIO 2092 Banco SANTANDER</strong></h3>
       
<div class="text-left">
<h4><li>Vigencia: 20 de Diciembre del 2017</li></h4>

<h4><li>El comprobante de pago (Recibo Oficial) se envía al Correo Institucional (En caso de no contar con usuario y clave de acceso, acude al centro de cómputo para obtenerlos).
</li></h4>
</div>

<h3 class="text-center"><strong>
 IMPORTANTE  </strong></h3>
<div class="text-left">
<h4><li>
Si el pago del servicio se realizará con cheque,  elaborarlo a nombre de:
<b>TECNM/INSTITUTO TECNOLOGICO DE MEXICALI</b></li></h4>
<h4><li>
Si requieren <b>FACTURA</b> por el servicio que se está pagando es necesario que acuda al Departamento de Recursos Financieros en el área de ventanilla el MISMO DIA en que se realiza el pago, presentando:
</li>
</h4>

<div class="row">
    <div class="col-md-5 col-md-offset-4">
<h4 >
<ul class="list-unstyled ">
  <li>&diams;&nbsp;Ficha de depósito banco (azul)</li>
<li>&diams;&nbsp;RFC y/o Cédula de identificación fiscal (SAT-Hacienda)</li>
<li>&diams;&nbsp;Correo electrónico para su envío</li>
</ul>
</h4></div>
</div>
 
<h4>
De no atender esta indicación, se expedirá Recibo Oficial a nombre de quien está solicitando el servicio, el Instituto Tecnológico de Mexicali por ningún motivo podrá Cancelar Facturas ni podrá hacer la devolución del dinero.
</h4>
</div>
<h3>
<strong>
Atentamente: Recursos Financieros. 
</strong>
</h3>
</div>  
  
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
