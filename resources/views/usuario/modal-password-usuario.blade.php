<div class="modal fade" id="modal-password-usuario">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<!-- Boton de cerrar modal-->
			<div class="col-sm-12 justify-content-right">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>

			<!-- Titulo modal-->
			<div class="modal-header col-sm-12 justify-content-center">
				<h5 class="modal-title" style="text-align: center;"><strong>Cambiar contraseña de usuario</strong></h5>
			</div>

			<!-- Cuerpo modal-->
			<div class="modal-body">
				<div id="modal-body-eliminar">
					<h5 class="text-center"><!-- texto--></h5>
				</div>
				<div class="form-group" hidden="true">
					<label class="control-label col-sm-2" for="id">ID:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="id" disabled>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}: <span class="text-danger" title="Requerido"><b>*</b></span></label></label>

				<div class="col-md-6">
					<input id="password" minlength="8" maxlength="40" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" >

					@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
			</div>

			<div class="form-group row">
				<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}: <span class="text-danger" title="Requerido"><b>*</b></span></label></label>

				<div class="col-md-6">
					<input id="password-confirm" minlength="8" maxlength="40" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
				</div>
			</div>
			<br>

			<div class="modal-footer">
				<button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button class="btn btn-primary change" data-dismiss="modal">Cambiar Contraseña</button>
			</div>
		</div>
	</div>
</div>
