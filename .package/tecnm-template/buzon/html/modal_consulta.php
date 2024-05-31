<div id="consultaregistro" class="modal fade">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form name="consulta_usuario" id="consulta_usuario">
					<div class="modal-header">						
						<h4 class="modal-title">Consulta de Registro</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Datos del Registro:</label>
							<textarea type="text" name="datos_registro"  id="datos_registro" class="form-control" placeholder="<?php echo $usuaridatos; ?> "  cols="40" rows="5" readonly></textarea>
							
						</div>
						<div class="form-group">
							<label>Respuesta del revisor</label>
							<textarea type="text" name="resp_revisor"  id="resp_revisor" class="form-control"  placeholder="<?php echo $revisordatos; ?> "  cols="40" rows="5"></textarea>
							<!--<input type="text" name="edit_name" id="edit_name" class="form-control" required>-->
						</div>
						<!--<div class="form-group">
							 <select id="status" name="status" class="form-control"  required>
						        <option selected value="">ESTATUS:...</option>
						        <option value="ABIERTO">ABIERTO</option>
						        <option value="PENDIENTE">PENDIENTE</option>
						        <option value="ATENDIDO">ATENDIDO</option>
						      </select>
						</div>-->
											
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cerrar">
						<!--<input type="submit" class="btn btn-info" value="Guardar Cambios" >-->
					</div>
				</form>
			</div>
		</div>
	</div>