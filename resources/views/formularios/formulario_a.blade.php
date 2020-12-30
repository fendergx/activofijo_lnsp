@extends('base.base')
@section('title')
Fuentes de Activo Fijo
@endsection
@section('extraJS')
<script type="text/javascript" src="{{asset('js/form/a.js')}}"></script>
@endsection
@section('contenido')

<h2 class="text-center">FORMULARIO MOVIMIENTO DE ACTIVO INTERNO</h2>
<h3 class="text-center"> (Formulario A) - ENTRE MISMAS ÁREAS</h3>


<div class="card-body">
	<form method="POST" action="#" onsubmit="return validateMyForm(this);">
		@csrf
		<div class="form-group row">
			<label for="name" class="col-md-4 col-form-label text-md-right dynamic"><b>Coordinación: </b><span class="text-danger" title="Requerido"><b>*</b></span></label>
			<div class="col-md-6">
				<select id="id_coord" name="id_coord" class="form-control dynamic" data-dependent="nombre_area" autofocus>
					<option value="">Seleccione una coordinación</option>
					@foreach ($coordinaciones as $coordinacion)
					<option value="{{ $coordinacion->id_coord }}"> {{ $coordinacion->nombre_coord }}</option>  
					@endforeach
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label for="nombre_area" class="col-md-4 col-form-label text-md-right"><b>Dependencia que entrega: </b><span class="text-danger" title="Requerido"><b>*</b></span></label>
			<div class="col-md-6">
				<select name="nombre_area" id="nombre_area" class="form-control">
					<option value="">Seleccionar Área</option>
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label for="nombre_area_2" class="col-md-4 col-form-label text-md-right"><b>Dependencia que recibe: </b><span class="text-danger" title="Requerido"><b>*</b></span></label>
			<div class="col-md-6">
				<select name="nombre_area_2" id="nombre_area_2" class="form-control">
					<option value="">Seleccionar Área</option>
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label for="name" class="col-md-4 col-form-label text-md-right"><b>Fecha: </b><span class="text-danger" title="Requerido"><b>*</b></span></label>
			<div class="col-md-6">
				<input id="nombres" type="date" class="form-control" name="nombres" value="{{ old('nombres') }}" required autocomplete="name" title="Solo puede ingresar letras">

			</div>
		</div>

		<div class="form-group row">
			<label for="name" class="col-md-4 col-form-label text-md-right"><b>Clase de movimiento: </b><span class="text-danger" title="Requerido"><b>*</b></span></label>
			<div class="col-md-6">
				<select required class="form-control" id="id_clase" name="id_clase">
					<option selected disabled="true" value="">Seleccione tipo de movimiento</option>
					@foreach ($clases as $clase)
					<option value="{{ $clase->id_clase_mov }}"> {{ $clase->clase_movimiento }}</option>  
					@endforeach
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label for="id_activo" class="col-md-4 col-form-label text-md-right"><b>Activo Fijo: </b><span class="text-danger" title="Requerido"><b>*</b></span></label>
			<div class="col-md-6">
				<select required class="form-control" id="id_activo" name="id_activo">
					<option selected disabled="true" value="">Seleccionar Activo Fijo</option>
				</select>
			</div>
		</div>

		<div class="form-group row mb-0">
			<div class="col-md-6 offset-md-4">
				<button type="submit" class="btn btn-primary">
					Generar Reporte
				</button>
			</div>
		</div>
	</form>
</div>
@endsection