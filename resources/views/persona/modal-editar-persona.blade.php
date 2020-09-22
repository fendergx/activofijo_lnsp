<div class="modal fade" id="modal-editar-persona">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Boton de cerrar modal-->
			<div class="col-sm-12 justify-content-right">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<!-- Titulo modal-->
			<div class="modal-header col-sm-12 justify-content-center">
				<h5 class="modal-title" style="text-align: center;"><strong>Editar Persona</strong></h5>
			</div>

			<!-- Cuerpo modal-->
			<div class="modal-body">
				<form method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
					<div class="form-group row" hidden="true">
						<label class="col-sm-4 col-form-label text-sm-right" for="id">ID:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="id_edit" disabled>
						</div>
						<script type="text/javascript"></script>
					</div>

					<div class="form-group row">
						<label for="editar_nombre" class="col-sm-4 col-form-label text-sm-right">Nombres: <span class="text-danger" title="Requerido"><b>*</b></span></label>
						<div class="col-sm-8">
							<input id="editar_nombre" type="text" class="form-control" autofocus>
							<p class="errorPersona text-center alert alert-danger hidden"></p>
						</div>
					</div>

					<div class="form-group row">
						<label for="editar_apellido" class="col-sm-4 col-form-label text-sm-right">Apellidos: <span class="text-danger" title="Requerido"><b>*</b></span></label>
						<div class="col-sm-8">
							<input id="editar_apellido" type="text" class="form-control" autofocus>
							<p class="errorPersona text-center alert alert-danger hidden"></p>
						</div>
					</div>

					<div class="form-group row">
						<label for="editar_dui" class="col-sm-4 col-form-label text-sm-right">DUI: <span class="text-danger" title="Requerido"><b>*</b></span></label>
						<div class="col-sm-8">
							<input id="editar_dui" type="tel" class="form-control" maxlength="10" pattern="[0-9]{8}-[0-9]{1}" placeholder="XXXXXXXX-X" title="Escriba un DUI válido, digite sólo números" autofocus>
						</div>
					</div>

					<div class="form-group row">
						<label for="id_cliente" class="col-sm-4 col-form-label text-sm-right">Cliente: <span class="text-danger" title="Requerido"><b>*</b></span></label>
						<div class="col-sm-8">
							<select class="form-control" id="id_cliente" name="id_cliente">
								<option value="" disabled>Seleccione un cliente</option>
								@foreach($clientes as $indexKey => $cliente)
								<option value="{{$cliente->id_cliente}}">{{$cliente->nombre_cliente}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</form>
			</div>

			<!-- Footer del modal-->
			<div class="modal-footer">
				<button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button class="editar btn btn-primary edit" data-dismiss="modal">Guardar</button>
			</div>
		</div>
	</div>
</div>
