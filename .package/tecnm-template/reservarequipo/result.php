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
    $mail->Username = "reservacibertec@itmexicali.edu.mx";
    $mail->Password='Reserva#'; 
    
    $mail->setFrom('reservacibertec@itmexicali.edu.mx', 'Reservacion de Equipo de Computo IT de Mexicali');
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
    <title>Reserva un equipo de cómputo</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/bootstrap/css/bootstrap.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/iconic/css/material-design-iconic-font.min.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/css-hamburgers/hamburgers.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/animsition/css/animsition.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/select2/select2.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/daterangepicker/daterangepicker.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <!--===============================================================================================-->
  </head>
  <body>
    <div class="limiter">
      <div
        class="container-login1000"
        style="background-image: url('images/itm.jpg')"
      >
        <div class="wrap-login1000">
            <span class="login100-form-title p-b-34 p-t-15" style="color: #e5dc29;"> 
            <?php if($success){
            ?>Máquina Reservada
            <?php  
            }else{
            ?>Lo Sentimos
            <?php
            }?> 
            </span>
            <span class="login1000-form-text">
            <?php if($success){
            ?>
            Se te ha asignado la máquina <?php echo $NombreMaquina; ?> para el día <?php echo $fechaReservacion; ?> en el horario de <?php echo date('H:i', strtotime($horaEntrada)); ?> a <?php echo date('H:i', strtotime($horaSalida)); ?>.
            La confirmación de tu reservación será enviada a tu correo institucional. Deberás presentarla al llegar al edificio G.
            <?php  
            }else{
            ?>
            No se encontró ningún equipo disponible en el salón solicitado en la hora especificada.
            <?php
            }?>    
            </span>
            <div class="text-center p-t-50">
              <label class="txt1"> Instituto Tecnologico de Mexicali © 2020 </label>
            </div>
        </div>
      </div>
    </div>

    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
  </body>
</html>
