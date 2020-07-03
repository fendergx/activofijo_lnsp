<div class="modal fade" id="modal-editar-area">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Boton de cerrar modal-->
			<div class="col-sm-12 justify-content-right">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<!-- Titulo modal-->
			<div class="modal-header col-sm-12 justify-content-center">
				<h5 class="modal-title" style="text-align: center;"><strong>Editar Área</strong></h5>
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
						<label for="editar_area" class="col-sm-4 col-form-label text-sm-right">Nombre de área: <span class="text-danger" title="Requerido"><b>*</b></span></label>
						<div class="col-sm-8">
							<input id="editar_area" type="text" class="form-control" autofocus>
							<p class="errorArea text-center alert alert-danger hidden"></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="id_coordinacion" class="col-sm-4 col-form-label text-sm-right">Coordinación: <span class="text-danger" title="Requerido"><b>*</b></span></label>
						<div class="col-sm-8">
							<select class="form-control" id="id_coordinacion" name="id_coordinacion">
								<option value="" disabled>Seleccione una coordinación</option>
								@foreach($coordinaciones as $indexKey => $coordinacion)
								<option value="{{$coordinacion->id_coord}}">{{$coordinacion->nombre_coord}}</option>	
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
