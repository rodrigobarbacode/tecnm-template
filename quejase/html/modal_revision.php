<div id="editregistroModal" class="modal fade">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form name="edit_revision" id="edit_revision">
					<div class="modal-header">						
						<h4 class="modal-title">Revision de Registro</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Datos del Registro:</label>
							<textarea type="text" name="datos_registro"  id="datos_registro" class="form-control" required cols="40" rows="5" readonly></textarea>
							<input type="hidden" name="edit_id" id="edit_id" >
							<input type="hidden" name="revisor" id="revisor" value="<?php echo $_SESSION['login_user'];?>" >
						</div>
						<div class="form-group">
							<label>Respuesta del revisor</label>
							<textarea type="text" name="resp_revisor"  id="resp_revisor" class="form-control" required cols="40" rows="5"></textarea>
							<!--<input type="text" name="edit_name" id="edit_name" class="form-control" required>-->
						</div>
						<div class="form-group">
							 <select id="status" name="status" class="form-control"  required>
						        <option selected value="">ESTATUS:...</option>
						       <!-- <option value="ABIERTO">ABIERTO</option>-->
						        <option value="PENDIENTE">PENDIENTE</option>
						        <option value="ATENDIDO">ATENDIDO</option>
						      </select>
						</div>
											
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" value="Guardar Cambios" >
					</div>
				</form>
			</div>
		</div>
	</div>