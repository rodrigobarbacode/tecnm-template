<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Reserva un equipo de cómputo</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
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
          <form class="login100-form validate-form" method="POST" action="./result.php">
            <span class="login100-form-logo">
              <img src="./images/icons/BUFALITO.png" alt="logo" width="100%">
            </span>

            <span class="login100-form-title p-b-34 p-t-27" style="color: #e5dc29;"> Reserva un equipo de cómputo </span>

            <div
              class="wrap-input100 validate-input"
              data-validate="Numero de Control"
            >
              <input
                class="input100"
                type="text"
                name="numControl"
                placeholder="Número de control"
                maxlength="10"
                required
              />
              <span class="focus-input100" data-placeholder="&#xf201"></span>
            </div>

            <div
              class="wrap-input100 validate-input"
              data-validate="Fecha reservacion"
            >
              <input
                class="input100"
                type="date"
                name="fechaRecepcion"
                placeholder="Fecha"
                min="2020-08-01"
                required
              />
              <span class="focus-input100" data-placeholder="&#xf32e"></span>
            </div>

            <div
              class="wrap-input100 validate-input"
              data-validate="Hora Entrada"
            >
              <span class="focus-input1000" for="horaEntrada" style="color: white; padding-left: 38px;"> Hora Entrada </span>
              <input
                class="input1000"
                type="time"
                name="horaEntrada"
                id="horaEntrada"
                min="07:00:00"
                max="20:00:00"
                onchange="minimo()"
                required
              />
              <span class="focus-input100" data-placeholder="&#xf337"></span>
            </div>

            <script>
              function minimo(){
                var tiempoMinimo = document.getElementById('horaEntrada').value;
                document.getElementById('horaSalida').min = tiempoMinimo;
              }
            </script>

            <div
              class="wrap-input100 validate-input"
              data-validate="Hora Salida"
            >
              <span class="focus-input1000" for="horaSalida" style="color: white; padding-left: 38px;"> Hora Salida </span>
              <input
                class="input1000"
                type="time"
                name="horaSalida"
                id="horaSalida"
		min="08:00:00"
                max="20:00:00"
                required
              />
              <span class="focus-input100" data-placeholder="&#xf337"></span>
            </div>

            <div
              class="wrap-input100 validate-input"
              data-validate="Salon"
            >
              <select class="selector1000" name="nombreLab" id="nombreLab" required>
                <option value="" style="color: black;">Seleccione una opción</option>
                <option value="G01" style="color: black;">G-01</option>
                <option value="G02" style="color: black;">G-02</option>
                <option value="G03" style="color: black;">G-03</option>
                <option value="G04" style="color: black;">G-04</option>
                <option value="G05" style="color: black;">G-05</option>
                <option value="G06" style="color: black;">G-06</option>
                <option value="G07" style="color: black;">G-07</option>
                <option value="GLAB" style="color: black;">G-LAB</option>
              </select>
              <span class="focus-input100" data-placeholder="&#xf291"></span>
            </div>

            <div class="container-login1000-form-btn">
              <button type="submit" class="login1000-form-btn">Reservar</button>
            </div>

            <div class="text-center p-t-50">
              <label class="txt1"> Instituto Tecnologico de Mexicali © 2020 </label>
            </div>
          </form>
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
