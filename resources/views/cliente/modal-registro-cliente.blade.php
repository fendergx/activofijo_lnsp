<div class="modal fade" id="modal-registro-cliente">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Boton de cerrar modal-->
			<div class="col-sm-12 justify-content-right">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<!-- Titulo modal-->
			<div class="modal-header col-sm-12 justify-content-center">
				<h5 class="modal-title" style="text-align: center;"><strong>Agregar Cliente</strong></h5>
			</div>

			<!-- Cuerpo modal-->
			<div class="modal-body">
				<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
				<div class="form-group row">
					<label for="nombre_cliente" class="col-sm-4 col-form-label text-sm-right color-blanco">Nombre del cliente: <span class="text-danger" title="Requerido"><b>*</b></span></label>
					<div class="col-sm-8">
						<input id="nombre_cliente" type="text" class="form-control" name="nombre_cliente" autofocus/>
					</div>
				</div>
			</div>

			<!-- Footer del modal-->
			<div class="modal-footer">
				<button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button class="crear btn btn-primary add" data-dismiss="modal">Registrar</button>
			</div>
		</div>
	</div>
</div>
