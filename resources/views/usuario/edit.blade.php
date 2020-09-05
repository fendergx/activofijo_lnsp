@extends('base.base')
@section('title')
Editar usuario
@endsection
@section('extraJS')
<script type="text/javascript" src="{{ asset('js/registrar.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/usuario.js') }}"></script>
@endsection
@section('contenido')

<div class="">
	<div class="">
		<h2 class="text-center">Editar usuario del sistema</h2>


		<div class="card-body">
			@csrf

			<div class="form-group row" hidden>
				<label for="name" class="col-md-4 col-form-label text-md-right">ID:</label>

				<div class="col-md-6">
					<input id="id_usuario" type="text" class="form-control" name="id_usuario" value="{{ $usuario->id_usuario }}" required disabled>

					@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
			</div>
			<div class="form-group row">
				<label for="name" class="col-md-4 col-form-label text-md-right">Nombre de usuario: <span class="text-danger" title="Requerido"><b>*</b></span></label>

				<div class="col-md-6">
					<input id="nombre_usuario" type="text" class="form-control @error('name') is-invalid @enderror" name="nombre_usuario" value="{{ $usuario->nombre_usuario }}" required autocomplete="name" autofocus pattern="[a-z.]+$" title="No se permiten espacios, sólo puede ingresar letras en minúscula y punto">

					@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
			</div>


			<div class="form-group row">
				<label for="name" class="col-md-4 col-form-label text-md-right">Nombres: <span class="text-danger" title="Requerido"><b>*</b></span></label>

				<div class="col-md-6">
					<input id="nombres" type="text" class="form-control @error('nombres') is-invalid @enderror" name="nombres" value="{{ $usuario->nombres }}" required autocomplete="name" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]+$" title="Solo puede ingresar letras" autofocus>

					@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
			</div>

			<div class="form-group row">
				<label for="name" class="col-md-4 col-form-label text-md-right">Apellidos: <span class="text-danger" title="Requerido"><b>*</b></span></label>

				<div class="col-md-6">
					<input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ $usuario->apellidos }}" required autocomplete="name" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]+$" title="Solo puede ingresar letras" autofocus>

					@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
			</div>

			<div class="form-group row">
				<label for="coordinacion" class="col-sm-4 col-form-label text-sm-right">Rol: <span class="text-danger" title="Requerido"><b>*</b></span></label>
				<div class="col-sm-6">
					<select required class="form-control" id="id_rol" name="id_rol" value="{{ $usuario->id_rol }}">
						<option selected disabled="true" >Seleccione un rol</option>
						@foreach($roles as $indexKey => $rol)

						@if($usuario->id_rol  == $rol->id_rol)
						<option value="{{$rol->id_rol}}" selected="true">{{$rol->nombre_rol}}</option>
						@else

						<option value="{{$rol->id_rol}}">{{$rol->nombre_rol}}</option>
						@endif

						@endforeach
					</select>
				</div>
			</div>


			@if($usuario->id_coord!=null)
			<div class="form-group row" id="div_coord">
				@else

				<div class="form-group row" id="div_coord" style="display: none;">

					@endif
					<label for="coordinacion" class="col-md-4 col-form-label text-md-right">Coordinación: <span class="text-danger" title="Requerido"><b>*</b></span></label>
					<div class="col-md-6">
						<select id="id_coord" name="id_coord" class="form-control dynamic" data-dependent="nombre_area" autofocus>
							<option value="">Seleccione una coordinación</option>
							@foreach ($coordinaciones as $coordinacion)
							@if($usuario->id_coord==$coordinacion->id_coord)
							<option value="{{ $coordinacion->id_coord }}" selected> {{ $coordinacion->nombre_coord }}</option>  
							@else
							<option value="{{ $coordinacion->id_coord }}"> {{ $coordinacion->nombre_coord }}</option>  
							@endif
							@endforeach
						</select>
					</div>
				</div>

				@if($usuario->id_area!=null)
				<div class="form-group row" id="div_area">
					@else
					<div class="form-group row" id="div_area" style="display: none;">
						@endif
						<label for="area" class="col-md-4 col-form-label text-md-right">Área: <span class="text-danger" title="Requerido"><b>*</b></span></label>
						<div class="col-md-6">
							<select name="nombre_area" id="nombre_area" class="form-control" autofocus >
								<option value="">Seleccionar Área</option>
								@foreach ($areas as $area)
								@if($usuario->id_area==$area->id_area)
								<option value="{{ $area->id_area }}" selected> {{ $area->nombre_area }}</option>  
								@else
								@if($usuario->id_coord==$area->id_coord)
								<option value="{{ $area->id_area }}"> {{ $area->nombre_area }}</option>  
								@endif
								@endif
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row mb-0">
						<div class="col-md-6 offset-md-4 update-user">
							<a type="button" class="btn btn-secondary" href="{{route('usuario.lista')}}">
								Cancelar
							</a>
							<button type="button" class="btn btn-primary edit">
								Editar usuario
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			function validateMyForm(){
				var pass = $("#password").val();
				var confirm = $("#password-confirm").val();
				if(pass===confirm){
			//nada	
		}else{
			toastr.warning('Las contraseñas no coinciden', {timeOut: 5000});
			return false;	
		}
		
	};

</script>
@endsection