

<form id="agregar" autocomplete="off">
	<div class="modal fade" id="modal-agregar" data-backdrop="static" data-keyboard="false" tabindex="-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"><i class="fa fa-book"></i> Registrar Incidente</h4>
				</div>
				<div class="modal-body">

					<div class="row">
						<div class="col-md-5">

							<div class="form-group">
								<label>Fecha</label>
								<input type="date" name="fecha" class="form-control" required value="<?php echo date('Y-m-d') ?>">
							</div>

							<div class="form-group">
								<label>Sentido</label>
								<select name="sentido" class="form-control">
									<option value="">[Seleccionar]</option>
								</select>
							</div>

							<div class="form-group">
								<label>Turno</label>
								<select name="turno" class="form-control" required>
									<option value="">[Seleccionar]</option>
								</select>
							</div>

							<div class="form-group">
								<label>Incidente</label>
								<select name="incidente" class="form-control">
								</select>
							</div>

						</div>
						<div class="col-md-7">

							<div class="form-group">
								<label>Jefe de Turno</label>
								<select name="coordinador" class="form-control">
									<option value="">[Seleccionar]</option>
								</select>
							</div>

							<div class="form-group">
								<label>Operador Ventanilla</label>
								<select name="operador1" class="form-control">
									<option value="">[Seleccionar]</option>
								</select>
							</div>


							<div class="form-group">
								<label>Operador Callao</label>
								<select name="operador2" class="form-control">
									<option value="">[Seleccionar]</option>
								</select>
							</div>

							<div class="form-group">
								<label>TI</label>
								<select name="ti" class="form-control">
									<option value="">[Seleccionar]</option>
								</select>
							</div>

							<div class="form-group">
								<label>EPI</label>
								<select name="epi" class="form-control">
									<option value="">[Seleccionar]</option>
								</select>
							</div>

							<div class="form-group">
								<label>Falla</label>
								<select name="seguridad" class="form-control">
									<option value="">[Seleccionar]</option>
								</select>
							</div>


							<div class="form-group">
								<label>Móvil</label>
								<select name="movil" class="form-control">
									<option value="">[Seleccionar]</option>
								</select>
							</div>

						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary">Agregar</button>
				</div>
			</div>
		</div>
	</div>
</form>