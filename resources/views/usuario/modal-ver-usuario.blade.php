<div class="modal fade" id="modal-ver-usuario">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Boton de cerrar modal-->
			<div class="col-sm-12 justify-content-right">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<!-- Titulo modal-->
			<div class="modal-header col-sm-12 justify-content-center">
				<h5 class="modal-title" style="text-align: center;"><strong>Ver detalles de usuario</strong></h5>
			</div>

			<!-- Cuerpo modal-->
			<div class="modal-body">
				<div class="form-group row">
					<label for="usuario" class="col-sm-4 col-form-label text-sm-right">Usuario:</label>
					<div class="col-sm-8">
						<input id="usuario" type="text" class="form-control" disabled>
					</div>
				</div>
				<div class="form-group row">
					<label for="nombre" class="col-sm-4 col-form-label text-sm-right">Nombre completo:</label>
					<div class="col-sm-8">
						<input id="nombre" type="text" class="form-control" disabled>
					</div>
				</div>
				<div class="form-group row">
					<label for="rol" class="col-sm-4 col-form-label text-sm-right">Rol:</label>
					<div class="col-sm-8">
						<input id="rol" type="text" class="form-control" disabled>
					</div>
				</div>
				<div class="form-group row" id="hide_c">
					<label for="coordinacion" class="col-sm-4 col-form-label text-sm-right">Coordinación:</label>
					<div class="col-sm-8">
						<input id="coordinacion" type="text" class="form-control" disabled>
					</div>
				</div>
				<div class="form-group row" id="hide_a">
					<label for="area" class="col-sm-4 col-form-label text-sm-right">Área:</label>
					<div class="col-sm-8">
						<input id="area" type="text" class="form-control" disabled>
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>
