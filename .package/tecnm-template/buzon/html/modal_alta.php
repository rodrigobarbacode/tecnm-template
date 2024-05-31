<div id="altaregistroModal" class="modal fade">
		<div class="modal-lg modal-dialog">
			<div class="modal-content">
				<form name="alta_registro" id="alta_registro">
					<div class="modal-header">						
						<h4 class="modal-title">Quejas, Sugerencias y Felicitaciones</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body text-center">	
						<input type="hidden" name="nomuser" id="nomuser" >
						<div class="form-group">
							 <label>Tipo de Reporte</label>
							  <select id="ttipo" name="ttipo" class="form-control" required>
						        <option selected value="">TIPO:...</option>
						        <option value="QUEJA">QUEJA</option>
						        <option value="SUGERENCIA">SUGERENCIA</option>
						        <option value="FELICITACION">FELICITACION</option>
						      </select>
						</div>			
						<div class="form-group">
							<label>Reporte</label>
							<textarea type="text" name="reporte"  id="reporte" class="form-control"  cols="40" rows="5" required ></textarea>
						</div>
						
						<!--<div class="form-group">
							<label>Categoría</label>
							<input type="text" name="category" id="category" class="form-control" required>
						</div>-->
									
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Enviar">
					</div>
				</form>
			</div>
		</div>
	</div>