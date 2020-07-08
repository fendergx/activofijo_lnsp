<div class="modal fade" id="modal-eliminar-coordinacion">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Boton de cerrar modal-->
			<div class="col-sm-12 justify-content-right">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<!-- Titulo modal-->
			<div class="modal-header col-sm-12 justify-content-center">
				<h5 class="modal-title" style="text-align: center;"><strong>Eliminar Coordinación</strong></h5>
			</div>

			<!-- Cuerpo modal-->
			<div class="modal-body">
				<div id="modal-body-eliminar">
					<h5 class="text-center">¿Está seguro/a de eliminar la coordinación? <label class="coordinacion"></label><br></h5>
					</div>
					<form method="POST">
						<div class="form-group" hidden="true">
							<label class="control-label col-sm-2" for="id">ID:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="id_delete" disabled>
							</div>
						</div>
					</form>
				</div>

				<div class="modal-footer">
					<button class="btn btn-secondary" id="cancelar-accion" data-dismiss="modal">Cancelar</button>
					<button class="eliminar btn btn-danger delete" id="eliminar-coordinacion" data-dismiss="modal">Eliminar</button>
				</div>
			</div>
		</div>
	</div>
