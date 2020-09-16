
<div class="modal fade" id="modal-registro-reactivo">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Boton de cerrar modal-->
			<div class="col-sm-12 justify-content-right">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<!-- Titulo modal-->
			<div class="modal-header col-sm-12 justify-content-center">
				<h5 class="modal-title" style="text-align: center;"><strong>Agregar Reactivo</strong></h5>
			</div>
			<!-- Cuerpo modal-->
			<div class="modal-body">
				<form method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
                    <div class="form-group row">
                        <label for="nombre_reactivo" class="col-sm-4 col-form-label text-sm-right color-blanco">Nombre de Reactivo: <span class="text-danger" title="Requerido"><b>*</b></span></label>
                        <div class="col-sm-8">
                            <input id="nombre_reactivo" type="text" class="form-control" name="nombre_reactivo" autofocus/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="precio_reactivo" class="col-sm-4 col-form-label text-sm-right color-blanco">Precio: <span class="text-danger" title="Requerido"><b>*</b></span></label>
                        <div class="col-sm-8">
                            <input id="precio_reactivo" type="number" step="any" min="0.01" class="form-control" name="precio_reactivo" autofocus/>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="presentacion" class="col-sm-4 col-form-label text-sm-right color-blanco">Presentación: <span class="text-danger" title="Requerido"><b>*</b></span></label>
                        <div class="col-sm-8">
                            <input id="presentacion" type="text" class="form-control" name="presentacion" autofocus/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="unidad_base" class="col-sm-4 col-form-label text-sm-right color-blanco">Unidad Base: <span class="text-danger" title="Requerido"><b>*</b></span></label>
                        <div class="col-sm-8">
                            <input id="unidad_base" type="number" step="any" min="0.001" class="form-control" name="unidad_base" autofocus/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="unidad_medida" class="col-sm-4 col-form-label text-sm-right color-blanco">Unidad de medida: <span class="text-danger" title="Requerido"><b>*</b></span></label>
                        <div class="col-sm-8">
                            <input id="unidad_medida" type="text" class="form-control" name="Unidad_medida" autofocus/>
                        </div>
                    </div>
                </form>
                <div class="modal-footer">
                    <button class="btn btn-secondary" id="cancelar-registro" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary addReactivo" id="registrar" data-dismiss="modal">Registrar</button>
                </div>
            </div>
        </div>
    </div>
</div>