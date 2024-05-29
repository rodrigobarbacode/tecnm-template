
<div class="modal fade" id="modal_quejas">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header bg-dark ">
        <p class="m-auto">
          <h4 class=" modal-title mx-auto">Buzon de Quejas y Sugerencias</h4>
        </p>
        <a type="button" class="close bg-white" data-dismiss="modal">&times;</a>

      </div>
      <!-- Modal body -->
      <div class="modal-body bg-light container-fluid text-center"  >
        <form name="m_quejas" id="m_quejas" method="post">
          <div class="row">
            <div class="col-sm-12 ">
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
          <div class="md-form">
            Para el Instituto Tecnológico de Mexicali, es importante conocer tus inquietudes y nuevas ideas para poder ofrecerte un mejor servicio, por tal motivo, pone a tu disposición este buzón de quejas y sugerencias.Le recomendamos no olvidar poner su dirección de correo electrónico, para poder enviarle una respuesta más personalizada.
            <h4 id="fecha">Fecha: <?php echo date("F j, Y"); ?></h4>
          </div>

          <div class="md-form ">
            <label for="no_control">No. Control</label>
            <input type="text" id="no_control" name="no_control" class="form-control " required maxlength="10">
            <div id="result-no_control"></div>
          </div>

          <div class="md-form ">
            <label for="tipo">Tipo:</label>
            <select class="form-control" name="tipo" required>
              <option >Queja</option>
              <option >Sugerencia</option>
            </select>
            <label for="descripcion">Descripcion</label>
            <textarea type="text" id="descripcion" name="descripcion" class="form-control" rows="3" required></textarea>
          </div>

          <div class="md-form ">
            <label >Correo:</label>
            <input type="email" id="correo" name="correo" class="form-control " required>
          </div>


        </div>
        <!-- Modal footer -->
        <div class="modal-footer bg-dark">
          <button type="submit" class="btn btn-lg btn-success btn-block" value="Guardar datos" id="enviar" disabled>Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>
