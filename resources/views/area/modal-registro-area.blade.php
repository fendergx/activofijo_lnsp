<div class="modal fade" id="modal-registro-area">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Boton de cerrar modal-->
			<div class="col-sm-12 justify-content-right">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<!-- Titulo modal-->
			<div class="modal-header col-sm-12 justify-content-center">
				<h5 class="modal-title" style="text-align: center;"><strong>Agregar área</strong></h5>
			</div>

			<!-- Cuerpo modal-->
			<div class="modal-body">
				<form method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
					<div class="form-group row">
						<label for="nombre_area" class="col-sm-4 col-form-label text-sm-right color-blanco">Nombre de área: <span class="text-danger" title="Requerido"><b>*</b></span></label>
						<div class="col-sm-8">
							<input id="nombre_area" type="text" class="form-control" name="nombre_coord" autofocus/>
							<p class="errorArea text-center alert alert-danger hidden"></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="coordinacion" class="col-sm-4 col-form-label text-sm-right">Coordinación: <span class="text-danger" title="Requerido"><b>*</b></span></label>
						<div class="col-sm-8">
							<select class="form-control" id="coordinacion">
								<option selected disabled value="">Seleccione una coordinación</option>
								@foreach($coordinaciones as $indexKey => $coordinacion)
								<option value="{{$coordinacion->id_coord}}">{{$coordinacion->nombre_coord}}</option>	
								@endforeach
							</select>
						</div>
					</div>
				</form>
				<!-- Footer del modal-->
				<div class="modal-footer">
					<button class="btn btn-secondary" id="cancelar-registro" data-dismiss="modal">Cancelar</button>
					<button class="crear btn btn-primary addArea" id="registrar" data-dismiss="modal">Registrar</button>
				</div>

			</div>
		</div>
	</div></div>
