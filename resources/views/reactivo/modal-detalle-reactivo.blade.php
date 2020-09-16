
<div class="modal fade" id="modal-detalle-reactivo">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Boton de cerrar modal-->
			<div class="col-sm-12 justify-content-right">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<!-- Titulo modal-->
			<div class="modal-header col-sm-12 justify-content-center">
				<h5 class="modal-title" style="text-align: center;"><strong>Ver detalle de Reactivo</strong></h5>
			</div>
			<!-- Cuerpo modal-->
			<div class="modal-body">
             <div class="form-group row">
                <label for="nombre_ver" class="col-sm-4 col-form-label text-sm-right color-blanco">Nombre de Reactivo</label>
                <div class="col-sm-8">
                    <input id="nombre_ver" type="text" class="form-control" name="nombre_reactivo" disabled/>
                </div>
            </div>
            <div class="form-group row">
                <label for="precio_reactivo" class="col-sm-4 col-form-label text-sm-right color-blanco">Precio</label>
                <div class="col-sm-8">
                    <input id="precio_ver" type="text" class="form-control" name="precio_reactivo" disabled/>
                </div>
            </div> 
            <div class="form-group row">
                <label for="presentacion_ver" class="col-sm-4 col-form-label text-sm-right color-blanco">Presentación</label>
                <div class="col-sm-8">
                    <input id="presentacion_ver" type="text" class="form-control" name="presentacion"  disabled/>
                </div>
            </div>
            <div class="form-group row">
                <label for="base_ver" class="col-sm-4 col-form-label text-sm-right color-blanco">Unidad Base</label>
                <div class="col-sm-8">
                    <input id="base_ver" type="text" class="form-control" name="unidad_base"  disabled/>
                </div>
            </div>
            <div class="form-group row">
                <label for="medida_ver" class="col-sm-4 col-form-label text-sm-right color-blanco">Unidades</label>
                <div class="col-sm-8">
                    <input id="medida_ver" type="text" class="form-control" name="Unidad_medida"  disabled/>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" id="cancelar-registro" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
</div>