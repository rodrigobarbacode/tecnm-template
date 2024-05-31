<div class="container text-center">
  <h2>Pago del curso C-Búfalo</h2>
  <div class="row">
    <div class="col-lg-6 offset-lg-3">
      <form action="valida.php" method="post">
        <div class="form-group">
          <label for="curp">CURP:</label>
          <input type="text" id="curp_input" oninput="validarInput(this)" class="form-control text-center" placeholder="INGRESE SU CURP" name="curp" maxlength="18" style="text-transform: uppercase;" required>
          <pre id="resultado"></pre>
        </div>
        <div class="form-group">
          <label for="nombre">NOMBRE COMPLETO:</label>
          <input type="text" class="form-control text-center" id="nombres" placeholder="NOMBRES" name="nombres" style="text-transform: uppercase;" required>
          <input type="text" class="form-control text-center" id="ap_paterno" placeholder="APELLIDO PATERNO" name="ap_paterno" style="text-transform: uppercase;" required>
          <input type="text" class="form-control text-center" id="ap_materno" placeholder="APELLIDO MATERNO" name="ap_materno" style="text-transform: uppercase;" >
        </div>
        <div class="form-group">
            <label for="nombre">CORREO ELECTRÓNICO</label>
         <input type="email" class="form-control text-center" id="correo" placeholder="ejemplo@ejemplo.com" name="correo" >
        </div>
        <div class="form-group">
          <label for="sexo">Sexo</label>
            <select class="form-control" name="sexo">
              <option value="M">Masculino</option>
              <option value="F">Femenino</option>
            </select>
           <label for="discapacidad" class="pt-2">¿Tienes alguna discapacidad?</label>
           <select class="form-control" name="discapacidad">
              <option>No tengo discapacidad</option>
              <option>Tengo discapacidad Física</option>
              <option>Tengo discapacidad Visual</option>
              <option>Tengo discapacidad Auditiva</option>
              <option>Tengo discapacidad Cognitiva</option>
              <option>Tengo discapacidad Intelectual</option>
              <!-- <option>Tengo discapacidad Física</option> -->
              <!-- <option>Tengo discapacidad Física</option> -->
            </select>
        </div>
        <div class="form-group">
           <input type="text" class="form-control text-center" id="observaciones" placeholder="OBSERVACIONES" name="observaciones"  >
        </div>
        <div class="form-group form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember" required>Acepto que los datos ingresados son correctos
          </label>
        </div>
        <button type="submit" class="btn btn-primary ">Ingresar</button>
      </form>
    </div>
  </div>

  </div>



</div>
