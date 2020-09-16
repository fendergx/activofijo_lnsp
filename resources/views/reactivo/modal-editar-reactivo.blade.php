
<div class="modal fade" id="modal-editar-reactivo">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Boton de cerrar modal-->
			<div class="col-sm-12 justify-content-right">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<!-- Titulo modal-->
			<div class="modal-header col-sm-12 justify-content-center">
				<h5 class="modal-title" style="text-align: center;"><strong>Editar Reactivo</strong></h5>
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
                        <label for="reactivo_editar" class="col-sm-4 col-form-label text-sm-right color-blanco">Nombre de Reactivo: <span class="text-danger" title="Requerido"><b>*</b></span></label>
                        <div class="col-sm-8">
                            <input id="reactivo_editar" type="text" class="form-control" name="reactivo_editar" autofocus/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="precio_editar" class="col-sm-4 col-form-label text-sm-right color-blanco">Precio: <span class="text-danger" title="Requerido"><b>*</b></span></label>
                        <div class="col-sm-8">
                            <input id="precio_editar" type="number" step="any" min="0.01" class="form-control" name="precio_editar" autofocus/>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="presentacion_editar" class="col-sm-4 col-form-label text-sm-right color-blanco">Presentación: <span class="text-danger" title="Requerido"><b>*</b></span></label>
                        <div class="col-sm-8">
                            <input id="presentacion_editar" type="text" class="form-control" name="presentacion_editar" autofocus/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="base_editar" class="col-sm-4 col-form-label text-sm-right color-blanco">Unidad Base: <span class="text-danger" title="Requerido"><b>*</b></span></label>
                        <div class="col-sm-8">
                            <input id="base_editar" type="number" step="any" min="0.001" class="form-control" name="base_editar" autofocus/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="medida_editar" class="col-sm-4 col-form-label text-sm-right color-blanco">Unidad de medida: <span class="text-danger" title="Requerido"><b>*</b></span></label>
                        <div class="col-sm-8">
                            <input id="medida_editar" type="text" class="form-control" name="medida_editar" autofocus/>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button class="btn btn-secondary" id="cancelar-registro" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary edit" data-dismiss="modal">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>