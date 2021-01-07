<div class="modal fade" id="modal-depreciar-activo-fijo">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Boton de cerrar modal-->
			<div class="col-sm-12 justify-content-right">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<!-- Titulo modal-->
			<div class="modal-header col-sm-12 justify-content-center">
				<h5 class="modal-title" style="text-align: center;">
					<strong>Drepreciar 
						<label id="label_af"></label>
					</strong>
				</h5>
			</div>
 
			<!-- Cuerpo modal-->
			<div class="modal-body">
				<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">

				<div class="form-group row">
					<label for="valor_actual_af" class="col-sm-4 col-form-label text-sm-right">Valor actual: <span class="text-danger" title="Requerido"><b>*</b></span></label>
					<div class="col-sm-8">
						<input id="valor_actual_af" type="text" class="form-control" autofocus>
					</div>
				</div>
			</div>

			<!-- Footer del modal-->
			<div class="modal-footer">
				<button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button class="depreciar btn btn-primary" data-dismiss="modal">Depreciar</button>
			</div>
		</div>
	</div>
</div>
