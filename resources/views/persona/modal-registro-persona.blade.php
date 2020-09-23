<div class="modal fade" id="modal-registro-persona">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Boton de cerrar modal-->
			<div class="col-sm-12 justify-content-right">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<!-- Titulo modal-->
			<div class="modal-header col-sm-12 justify-content-center">
				<h5 class="modal-title" style="text-align: center;"><strong>Agregar Persona</strong></h5>
			</div>

			<!-- Cuerpo modal-->
			<div class="modal-body">
				<form method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
					
					<div class="form-group row">
						<label for="nombre_persona" class="col-sm-4 col-form-label text-sm-right color-blanco">Nombres: <span class="text-danger" title="Requerido"><b>*</b></span></label>
						<div class="col-sm-8">
							<input id="nombre_persona" type="text" class="form-control" name="nombre_persona" autofocus/>

							<!--<p class="errorPersona text-center alert alert-danger hidden"></p> -->

						</div>
					</div>

					<div class="form-group row">
						<label for="apellido_persona" class="col-sm-4 col-form-label text-sm-right color-blanco">Apellidos: <span class="text-danger" title="Requerido"><b>*</b></span></label>
						<div class="col-sm-8">
							<input id="apellido_persona" type="text" class="form-control" name="apellido_persona" autofocus/>

							<!-- <p class="errorPersona text-center alert alert-danger hidden"></p> -->

						</div>
					</div>

					<div class="form-group row">
						<label for="dui" class="col-sm-4 col-form-label text-sm-right color-blanco">DUI: <span class="text-danger" title="Requerido"><b>*</b></span></label>
						<div class="col-sm-8">	
							<input id="dui" type="tel" class="form-control" name="dui" maxlength="10" pattern="[0-9]{8}-[0-9]{1}" placeholder="XXXXXXXX-X" title="Escriba un DUI válido, digite sólo números" autofocus/>
							<!-- <p class="errorPersona text-center alert alert-danger hidden"></p> -->

						</div>
					</div>

					<div class="form-group row">
						<label for="cliente" class="col-sm-4 col-form-label text-sm-right">Cliente: <span class="text-danger" title="Requerido"><b>*</b></span></label>
						<div class="col-sm-8">
							<select class="form-control" id="cliente">
								<option selected disabled value="">Seleccione un cliente</option>
								@foreach($clientes as $indexKey => $cliente)
								<option value="{{$cliente->id_cliente}}">{{$cliente->nombre_cliente}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</form>


				<!-- Footer del modal-->
				<div class="modal-footer">
					<button class="btn btn-secondary" id="cancelar-registro" data-dismiss="modal">Cancelar</button>
					<button class="crear btn btn-success addPersona" id="registrar" data-dismiss="modal">Registrar</button>
				</div>
			</div>
		</div>
	</div>
</div>
