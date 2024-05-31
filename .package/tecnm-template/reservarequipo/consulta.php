<?php
include("conexion.php");

$conexion = conectar();
date_default_timezone_set('America/Tijuana');
$control = "";
$hoy = date('Ymd');
$reservaciones = "SELECT * FROM ReservaAlumno WHERE fechaReservacion >= '$hoy'";

if (isset($_POST['busqueda'])) {
  $control = $_POST['busqueda'];
  if ($control != "") {
    if (strpos($control, '-') !== false) {
      $reservaciones = "SELECT * FROM ReservaAlumno WHERE fechaReservacion >= '$hoy'; // AND numControl = '$control'";
    } else {

      $reservaciones = "SELECT * FROM ReservaAlumno WHERE fechaReservacion >= '$hoy' AND numControl = '$control'";
    }
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
  <link rel="icon" type="image/png" href="images/icons/favicon.png" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css" />
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css" />
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!--===============================================================================================-->
</head>

<body>
  <div class="limiter">
    <div class="container-login1000" style="background-image: url('images/itm.jpg')">
      <div class="wrap-login1000">

        <span class="login100-form-logo">
          <img src="./images/icons/BUFALITO.png" alt="logo" width="100%">
        </span>

        <span class="login100-form-title p-b-20 p-t-27" style="color: #e5dc29;"> Reservaciones activas </span>

        <div class="flexsearch">
          <div class="flexsearch--wrapper">
            <form class="flexsearch--form" id="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
              <div class="flexsearch--input-wrapper">
                <input class="flexsearch--input" id="busqueda" name="busqueda" placeholder="Número de Control ó Fecha (YYYY-MM-DD)" type="search">
              </div>
              <a class="flexsearch--submit" type="submit" href="#" onclick="document.getElementById('formulario').submit();">
                <i class="fa fa-search" aria-hidden="true" style="font-size: 27px;"></i>
              </a>
            </form>
          </div>
        </div>

        <div class="p-t-40">
          <table id="mitabla" style="display: block; max-height: 350px; overflow: auto;" class="scrollbar style-2">
            <thead>
              <tr>
                <th style="position: sticky; top: 0;">N&uacute;mero de Control</th>
                <th style="position: sticky; top: 0;">Fecha Reservaci&oacute;n</th>
                <th style="position: sticky; top: 0;">Hora de Entrada</th>
                <th style="position: sticky; top: 0;">Hora de Salida</th>
                <th style="position: sticky; top: 0;">M&aacute;quina Asignada</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $resultado = mysqli_query($conexion, $reservaciones);
              while ($row = mysqli_fetch_assoc($resultado)) {
              ?>
                <tr>
                  <td><?php echo $row["numControl"]; ?></td>
                  <td><?php echo $row["fechaReservacion"]; ?></td>
                  <td><?php echo date('h:i A', strtotime($row["horaEntrada"])); ?></td>
                  <td><?php echo date('h:i A', strtotime($row["horaSalida"])); ?></td>
                  <td>
                    <?php

                    $id = $row["maquinaID"];
                    $maquinas = "SELECT * FROM maquina WHERE maquinaId = '$id'";
                    $result = mysqli_query($conexion, $maquinas);
                    while ($nombre = mysqli_fetch_assoc($result)) {
                      echo $nombre["nombreMaquina"];
                    }

                    ?></td>
                </tr>
              <?php  } ?>

            </tbody>
         </table>

          <div class="text-center p-t-50">
            <label class="txt1"> Instituto Tecnologico de Mexicali &reg; 2020 </label>
          </div>
        </div> <!-- este si -->
      </div>
    </div>
  </div>

  <div id="dropDownSelect1"></div>

  <script>
    $(document).ready(function() {
      $("#search").keyup(function() {
        _this = this;
        $.each($("#mitabla tbody tr"), function() {
          if ($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
            $(this).hide();
          else
            $(this).show();
        });
      });
    });
  </script>

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
