<?php

include("conexion.php");

$conexion = conectar();
$numControl = $_POST['numControl'];
$fechaReservacion = $_POST['fechaRecepcion'];
$horaEntrada = $fechaReservacion." ".$_POST['horaEntrada'];
$horaSalida = $fechaReservacion." ".$_POST['horaSalida'];
$nombreLab = $_POST['nombreLab'];
date_default_timezone_set('America/Tijuana');
$fechaRegistro = date('Y-m-d H:i:s');

$consulta = "SELECT * FROM maquina WHERE nombreLab = '$nombreLab'";
$resultado = mysqli_query($conexion,$consulta);
while($row = $resultado->fetch_array()){
    $MaquinaID = $row['maquinaId'];
    $consulta = "SELECT * FROM ReservaAlumno WHERE maquinaID = '$MaquinaID' AND fechaReservacion = '$fechaReservacion'";
    $result = mysqli_query($conexion, $consulta);
    if($result->num_rows > 0){
        while($reg = $result->fetch_array()){
            if($horaEntrada >= $reg['horaSalida'] && $horaSalida <= $reg['horaEntrada']){
                $success = true;
                $Id = $MaquinaID;
                $NombreMaquina = $row['nombreMaquina'];
                break;
            }else{
                $success = false;
            }
        }
        if($success){
            break;
        }
    }else{
        $success = true;
        $Id = $MaquinaID;
        $NombreMaquina = $row['nombreMaquina'];
        break;
    }
}
if($success){
    $consulta = "INSERT INTO ReservaAlumno (numControl, fechaReservacion, horaEntrada, horaSalida, fechaRegistro, MaquinaID) 
             VALUES ('$numControl','$fechaReservacion','$horaEntrada','$horaSalida','$fechaRegistro', '$Id');";
    $insercion = mysqli_query($conexion, $consulta);
}

$email = "a".$numControl."@itmexicali.edu.mx";

if($success){
    require 'phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "@itmexicali.edu.mx";
    $mail->Password=''; 
    
    $mail->setFrom('@itmexicali.edu.mx', 'Instituto Tecnologico de Mexicali');
    $mail->addAddress($email, $numControl);
    $mail->Subject = 'Tu reservacion ha sido exitosa';
    $mail->msgHTML('<h1 align=center>Maquina Reservada</h1><br><p align=center>Se te ha asignado la máquina '.$NombreMaquina.' para el día '.$fechaReservacion.' en el horario de '.date('H:i', strtotime($horaEntrada)).' a '.date('H:i', strtotime($horaSalida)).'.</p>');

    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" type="image/x-icon" href="./img/iconos/logo.ico" />
    <title>Reserva un equipo de cómputo</title>
    <!--    LINK DE BOOSTRAP 4-->
  <link type="text/css"href="./css/bootstrap.min.css" rel="stylesheet" >
  <!--    ESTILOS CSS LOCALES -->
  <link type="text/css" href="./js/slick/slick-theme.css"rel="stylesheet">
  <link type="text/css" href="./css/estilos.css" rel="stylesheet">
  <link type="text/css" href="./css/iconos.css" rel="stylesheet">
  <link type="text/css" href="./js/slick/slick.css" rel="stylesheet">
  <link type="text/css" href="./css/toastr.min.css" rel="stylesheet">

  <!--    LINK DE ICONOS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
  <!--NAVEGACION Y HEADER-->
  <nav class="container-fluid sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark ">
	<button class="navbar-toggler mt-auto" data-target="#collapsibleNavbar" data-toggle="collapse" type="button">
		<span class="sr-only">Menu</span>
			<i class="material-icons ">menu</i>
	</button>
			<a class="navbar-brand"  href="https://www.gob.mx/">
			<img src="https://framework-gb.cdn.gob.mx/landing/img/logoheader.svg" height="28" alt="Página de inicio, Gobierno de México">
			</a>
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav ml-auto text-left">
			<li class="nav-item dropdown">
				<a href="https://www.gob.mx/gobierno" title="Gobierno" class="nav-link" >Gobierno</a>
			</li>
			<li class="nav-item dropdown">
				<a href="https://www.gob.mx/participa" title="Participación Ciudadana" class="nav-link">Participa</a>
			</li>
			<li class="nav-item dropdown">
				<a href="https://datos.gob.mx" title="Datos Abiertos" class="nav-link">Datos</a>
			</li>
			<li class="nav-item dropdown ">
				<a href="https://www.gob.mx/busqueda" >
				<span class="sr-only">Búsqueda</span>
				<i class="material-icons pt-2 search">search</i>
				</a>
			</li>
		</ul>
	</div>
</nav>
  </nav>
  <header class="container-fluid m-auto">
    <div class="row">
    <div class="col-sm-12  text-center">
        <a href="https://www.gob.mx/" target="_blank" style="z-index:0">
            <img src="./img/tecnmgob/pleca-gob1.png" alt="" class="pleca_gob">
        </a>
        <a href="https://www.gob.mx/sep" target="_blank" style="z-index:0">
            <img src="./img/tecnmgob/pleca-gob2.png" alt="" class="pleca_edu">
        </a>
        <a href="https://www.tecnm.mx/inicio.aspx" style="z-index:0">
            <img  src="./img/tecnmgob/pleca_tecnm.jpg" alt="" class="pleca_tecnm">
        </a>
        <a href="#" target="_blank" style="z-index:0">
            <img src="./img/tecnmgob/pleca-tecmxl.png" alt="" class="pleca_tecmxl">
        </a>
    </div>
</div>
  </header>
  <nav class=" container-fluid sticky-top-2">
    <nav class="navbar navbar-expand-lg navbar-dark ">
    <button class="navbar-toggler border-info " data-target="#collapsibleNavbar2" data-toggle="collapse" type="button">
        <span class="sr-only">Menu</span>
       <i class="material-icons menu">menu</i>
    </button>
    <a href="./">
        <img alt="Logo" class="logo" src="./img/iconos/logo.ico"/>
    </a>
    <div class="collapse navbar-collapse" id="collapsibleNavbar2">
        <ul class="navbar-nav ml-auto text-left" >
            <li class="nav-item dropdown " >
                <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="#" id="navbarDropdown" role="button">
                    QUIÉNES SOMOS?
                </a>
                <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                   
                    <a class="dropdown-item" href="./documentos/directorio.pdf">
                        Directorio
                    </a>
                    <a class="dropdown-item" href="./departamentos/bienvenida/">
                        Bienvenida
                    </a>
                    
                    <a class="dropdown-item" href="./departamentos/transparencia/">
                        Transparencia Y Rendición de Cuentas
                    </a>
                  
                    <a class="dropdown-item" href="./documentos/calendario/calendario_2020-2.pdf">
                        Calendario 2020-2
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown" >
                <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="#" id="navbarDropdown" role="button">
                    OFERTA EDUCATIVA
                </a>
                <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                    <a class="dropdown-item" href="./carreras/cp/contador.html">
                        <span>
                            Contador Público
                        </span>
                    </a>
                    <a class="dropdown-item" href="./carreras/img/SISTEMAS.jpg">
                        <span>
                            Ing. Sistemas Computacionales
                        </span>
                    </a>
                    <a class="dropdown-item" href="./carreras/electrica/electrica.html">
                        <span>
                            Ing. Eléctrica
                        </span>
                    </a>
                    <a class="dropdown-item" href="./carreras/img/ELECTRONICA.jpg">
                        <span>
                            Ing. Electrónica
                        </span>
                    </a>
                    <a class="dropdown-item" href="./carreras/img/RENOVABLES.jpg">
                        <span>
                            Ing. Energías Renovables
                        </span>
                    </a>
                    <a class="dropdown-item" href="./carreras/img/GESTION.jpg">
                        <span>
                            Ing. Gestión Empresarial
                        </span>
                    </a>
                    <a class="dropdown-item" href="./carreras/img/INDUSTRIAL.jpg">
                        <span>
                            Ing. Industrial
                        </span>
                    </a>
                    <a class="dropdown-item" href="./carreras/img/LOGISTICA.jpg">
                        <span>
                            Ing. Logística
                        </span>
                    </a>
                    <a class="dropdown-item" href="./carreras/img/MATERIALES.jpg">
                        <span>
                            Ing. Materiales
                        </span>
                    </a>
                    <a class="dropdown-item" href="./carreras/mecatronica/mecatronica.html">
                        <span>
                            Ing. Mecatrónica
                        </span>
                    </a>
                    <a class="dropdown-item" href="./carreras/img/MECANICA.jpg">
                        <span>
                            Ing. Mecánica
                        </span>
                    </a>
                     <a class="dropdown-item" href="./carreras/quimica/quimica.html">
                        <span>
                            Ing. Química
                        </span>
                    </a>
                    <a class="dropdown-item" href="http://posgrado.itmexicali.edu.mx">
                        <span>
                            Posgrado
                        </span>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="#" id="navbarDropdown" role="button">
                    ESTUDIANTES
                </a>
                <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                    <a class="dropdown-item" href="https://mexicali.tecsge.com/login">
                        <span>
                            SGE
                        </span>
                    </a>
					<a class="dropdown-item" href="./departamentos/escolares/escolares.html">
                        <span>
                            Servicios Escolares
                        </span>
                    </a>
                    <a class="dropdown-item" href="http://moodle.itmexicali.edu.mx/login/index.php" target="_blank">
                        <span>
                            Moodle
                        </span>
                    </a>
					    <a class="dropdown-item" href="http://www.itmexicali.edu.mx/documentos/sol_comite_acad.doc" target="_blank">
                        <span>
                            Solicitud al Comité Académico
                        </span>
                   
					<a class="dropdown-item" href="http://www.itmexicali.edu.mx/documentos/FORMATO_BAJAS.rar" target="_blank">
                        <span>
                            Formato para baja temporal y de materias
                        </span>
                    </a>
					   <a class="dropdown-item" href="./departamentos/Residencia/residencias.html" target="_blank">
                        <span>
                            Residencia Profesional
                        </span>
                    </a>
					  <a class="dropdown-item" href="./departamentos/ss/ss.html" target="_blank">
                        <span>
                            Servicio Social
                        </span>
                    </a>

					<a class="dropdown-item" href="http://www.itmexicali.edu.mx/extraescolares/" target="_blank">
                        <span>
                            Actividades Extraescolares
                        </span>
                    </a>
                    <a class="dropdown-item" href="./departamentos/cinformacion/" target="_blank">
                        <span>
                            Centro de Información
                        </span>
                    </a>
                    <a class="dropdown-item" href="./documentos/2019/aportaciones2018.pdf" target="_blank">
                        <span>
                            Lista de Aportaciones
                        </span>
                    </a>
                    <a class="dropdown-item" href="./departamentos/referencias_pagos/index.php" target="_blank">
                        <span>
                            Recibos de Pago
                        </span>
                    </a>
                  
              
                    <a class="dropdown-item" href="https://www.gob.mx/cedulaprofesional">
                        <span>
                            Cédula Profesional en línea
                        </span>
                    </a>
                 
                    <a class="dropdown-item" href="./actividades_complementarias/" target="_blank">
                        <span>
                            Créditos Complementarios
                        </span>
                    </a>

                    <a class="dropdown-item" href="./reservar.html">
                        <span>
                            Reserva un equipo de cómputo
                        </span>
                    </a>
                   </div>
            </li>
            <li class="nav-item dropdown">
                <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="#" id="navbarDropdown" role="button">
                    PERSONAL ITM
                </a>
                <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                    <a class="dropdown-item" href="./departamentos/rh/index.html">
					<span>
                        Recursos Humanos
                    </span>
                    </a>
				   
				    <a class="dropdown-item" href="https://mexicali.tecsge.com/login">
                        <span>
                            SGE
                        </span>
                    </a>
					   <a class="dropdown-item" href="http://www.itmexicali.edu.mx/documentos/correos.pdf">
                        <span>
                            Correos Institucionales del personal
                        </span>
                    </a>
				   
				   
                    <a class="dropdown-item" href="http://moodle.itmexicali.edu.mx/login/index.php" target="_blank">
                        <span>
                            Moodle
                        </span>
                    </a>
                    <a class="dropdown-item" href="./departamentos/cinformacion/" target="_blank">
                        <span>
                            Centro de Información
                        </span>
                    </a>
                   
                 
                    <a class="dropdown-item" data-toggle="tooltip" href="./documentos/Formato Registro Eventos Comunicacion 2020.pdf" title="Departamento de Comunicación y Difusón">
                       Formato Registro Eventos Comunicacion 2020
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="#" id="navbarDropdown" role="button">
                    EGRESADOS
                </a>
                <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                    <a class="dropdown-item" href="./departamentos/escolares/escolares.html">
                        <span>
                            Servicios Escolares
                        </span>
                    </a>
                    <a class="dropdown-item" href="https://www.gob.mx/cedulaprofesional">
                        <span>
                            Cédula Profesional en línea
                        </span>
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="#" id="navbarDropdown" role="button">
                    DEPARTAMENTOS
                </a>
                <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                    <a class="dropdown-item" href="./departamentos/rh/index.html">
                        Recursos Humanos
                    </a>
                    <a class="dropdown-item" href="./eneit/">
                        Centro de Incubación e Innovación
                    </a>
                    <a class="dropdown-item" href="./departamentos/cinformacion/" target="_blank">
                        <span>
                            Centro de Información
                        </span>
                    </a>
                    <a class="dropdown-item" href="./departamentos/centrodecomputo/centrodecomputo.html">
                        Centro de Cómputo
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="#" id="navbarDropdown" role="button">
                    CORREO
                </a>
                <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                    <a class="dropdown-item" href="https://mail.google.com/mail/u/0/">
                        Correo ItMexicali
                    </a>
                    <a class="dropdown-item" href="https://login.microsoftonline.com/login.srf?wa=wsignin1.0&rpsnv=4&ct=1464654634&rver=6.7.6640.0&wp=MCMBI&wreply=https%3a%2f%2fportal.office.com%2flanding.aspx%3ftarget%3d%252fdefault.aspx&lc=3082&id=501392&msafed=0&client-request-id=9f89a182-d1a5-4532-b7dc-faa1366894bf">
                        Correo TecNM
                    </a>
                </div>
            </li>
            <li class="nav-item p-0">
                <a class="nav-link" href="https://ivan-imperial.org/air/map" title="Monitoreo ITMexicali">
                    MONITOREO AMBIENTAL
                </a>
            </li>
        </ul>
    </div>
</nav>
  </nav>
    <div class="container-fluid text-center pt-5">
      <?php if($success){
          ?><h2>Máquina Reservada</h2>
      <?php  
      }else{
        ?><h2>Lo Sentimos</h2>
        <?php
      }?>
      <div class="col-lg-3 justify-content-center" style="margin:0 auto;">
      <?php if($success){
          ?>
          <p class="justify-content-center m-2 middle text-justify">
          Se te ha asignado la máquina <?php echo $NombreMaquina; ?> para el día <?php echo $fechaReservacion; ?> en el horario de <?php echo date('H:i', strtotime($horaEntrada)); ?> a <?php echo date('H:i', strtotime($horaSalida)); ?>.
          La confirmación de tu reservación será enviada a tu correo instucional. Deberás presentarla al llegar al edificio G.
          </p>
      <?php  
      }else{
        ?>
        <p class="justify-content-center m-2 middle text-justify">
          No se encontró ningún equipo disponible en el salón solicitado en la hora especificada.
      </p>
        <?php
      }?>
      </div>
    </div>
    <script src="./js/despliega_submenu.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/slick/slick.min.js"></script>
    <script
      id="bolsa-widget"
      type="text/javascript"
      src="http://jobdiscovery-widget-occ.occ.com.mx/button-bundle.js"
      key="1YidX3sOhZ2tXuCzh1SBgW3JIkf"
    ></script>
  </body>
</html>