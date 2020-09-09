<div class="modal fade" id="modal-editar-estado">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Boton de cerrar modal-->
			<div class="col-sm-12 justify-content-right">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<!-- Titulo modal-->
			<div class="modal-header col-sm-12 justify-content-center">
				<h5 class="modal-title" style="text-align: center;"><strong>Editar Estado</strong></h5>
			</div>

			<!-- Cuerpo modal-->
			<div class="modal-body">
				<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
				<div class="form-group row" hidden="true">
					<label class="col-sm-4 col-form-label text-sm-right" for="id">ID:</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" id="id_edit" disabled>
					</div>
				</div>
				<div class="form-group row">
					<label for="estado_editar" class="col-sm-4 col-form-label text-sm-right">Nombre del estado: <span class="text-danger" title="Requerido"><b>*</b></span></label>
					<div class="col-sm-8">
						<input id="estado_editar" type="text" class="form-control" name="estado_editar" autofocus>
					</div>
				</div>
			</div>

			<!-- Footer del modal-->
			<div class="modal-footer">
				<button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button class="editar btn btn-primary edit" data-dismiss="modal">Guardar</button>
			</div>
		</div>
	</div>
</div>
