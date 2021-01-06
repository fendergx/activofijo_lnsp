<div class="modal fade" id="modal-exportar-excel">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Boton de cerrar modal-->
			<div class="col-sm-12 justify-content-right">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<!-- Titulo modal-->
			<div class="modal-header col-sm-12 justify-content-center">
				<h5 class="modal-title" style="text-align: center;"><strong>Exportación a Excel</strong></h5>
			</div>
			<!-- Cuerpo modal-->
			<div class="modal-body">
				<div id="modal-body-eliminar">
					<h5 class="text-center">El tiempo de exportación puede variar dependiendo de la cantidad<br> de activo fijo en el sistema,
					por favor esperar mientras se procesa.</h5>
				</div>
				<div class="form-group" hidden="true">
					<label class="control-label col-sm-2" for="id">ID:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="id_delete" disabled>
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button class="btn btn-secondary" id="cancelar-accion" data-dismiss="modal">Cancelar</button>
				<a class="exportar btn btn-success" href="{{route('excel.export.af')}}">Exportar</a>
			</div>
		</div>
	</div>
</div>
