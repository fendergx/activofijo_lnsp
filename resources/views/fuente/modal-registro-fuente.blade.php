<div class="modal fade" id="modal-registro-fuente">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Boton de cerrar modal-->
			<div class="col-sm-12 justify-content-right">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<!-- Titulo modal-->
			<div class="modal-header col-sm-12 justify-content-center">
				<h5 class="modal-title" style="text-align: center;"><strong>Agregar Fuente de Activo Fijo</strong></h5>
			</div>

			<!-- Cuerpo modal-->
			<div class="modal-body">
				<form method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
					<div class="form-group row">
						<label for="fuente" class="col-sm-4 col-form-label text-sm-right color-blanco">Nombre de fuente: <span class="text-danger" 
							title="Requerido"><b>*</b></span></label>
						<div class="col-sm-8">
							<input id="nombre_fuente" type="text" class="form-control" name="nombre_fuente" autofocus/>
							<p class="errorFuente text-center alert alert-danger hidden"></p>
						</div>
					</div>
				</form>
			</div>

			<!-- Footer del modal-->
			<div class="modal-footer">
				<button class="btn btn-secondary" id="cancelar-registro" data-dismiss="modal">Cancelar</button>
				<button class="crear btn btn-success addFuente" id="registrar" data-dismiss="modal">Registrar</button>
			</div>
		</div>
	</div>
</div>
