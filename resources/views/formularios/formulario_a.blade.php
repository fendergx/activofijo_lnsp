@extends('base.base')
@section('title')
Formulario A
@endsection
@section('extraHead')
<link rel="stylesheet" href="{{asset('css/date/flatpickr.css')}}">
<link rel="stylesheet" href="{{asset('css/date/temas/dark.css')}}">
@endsection
@section('extraJS')
<!-- para fecha-->
<script type="text/javascript" src="{{asset('js/date/flatpickr.js')}}"></script>
<script type="text/javascript" src="{{asset('js/date/lang-es.js')}}"></script>
<script type="text/javascript" src="{{asset('js/date/flatpickr-config.js')}}"></script>
<!-- form -->
<script type="text/javascript" src="{{asset('js/form/a.js')}}"></script>
@endsection
@section('contenido')

<h2 class="text-center">FORMULARIO MOVIMIENTO DE ACTIVO INTERNO</h2>
<h3 class="text-center"> (Formulario A) - ENTRE MISMAS ÁREAS</h3>


<div class="card-body">
	<form method="POST" action="#">
		@csrf
		<div class="form-group row">
			<label for="name" class="col-md-4 col-form-label text-md-right"><b>Coordinación: </b><span class="text-danger" title="Requerido"><b>*</b></span></label>
			<div class="col-md-6">
				<select id="id_coord" name="id_coord" class="form-control dynamic" data-dependent="nombre_area" required autofocus>
					<option value="" disabled selected>Seleccione una coordinación</option>
					@foreach ($coordinaciones as $coordinacion)
					<option value="{{ $coordinacion->id_coord }}"> {{ $coordinacion->nombre_coord }}</option>  
					@endforeach
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label for="nombre_area" class="col-md-4 col-form-label text-md-right"><b>Dependencia que entrega: </b><span class="text-danger" title="Requerido"><b>*</b></span></label>
			<div class="col-md-6">
				<select name="nombre_area" id="nombre_area" class="form-control dynamic2" data-dependent="id_activo" required>
					<option value="" selected disabled>Seleccionar Área</option>
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label for="nombre_area_2" class="col-md-4 col-form-label text-md-right"><b>Dependencia que recibe: </b><span class="text-danger" title="Requerido"><b>*</b></span></label>
			<div class="col-md-6">
				<select name="nombre_area_2" id="nombre_area_2" class="form-control" required>
					<option value="" selected disabled>Seleccionar Área</option>
				</select>
			</div>
		</div>

		<div class="form-group row">
			<label for="name" class="col-md-4 col-form-label text-md-right"><b>Fecha: </b><span class="text-danger" title="Requerido"><b>*</b></span></label>
			<div class="col-md-6">
				<input id="fecha" type="text" class="form-control fecha-format" name="fecha" value="{{ old('fecha') }}" required>

			</div>
		</div>

		<div class="form-group row">
			<label for="name" class="col-md-4 col-form-label text-md-right"><b>Clase de movimiento: </b><span class="text-danger" title="Requerido"><b>*</b></span></label>
			<div class="col-md-6">
				<select class="form-control" id="id_clase" name="id_clase" required>
					<option selected disabled="true" value="">Seleccione tipo de movimiento</option>
					@foreach ($clases as $clase)
					<option value="{{ $clase->id_clase_mov }}"> {{ $clase->clase_movimiento }}</option>  
					@endforeach
				</select>
			</div>
		</div>

		<div class="form-group row" id="form-especificar" style="display: none;">
			<label for="name" class="col-md-4 col-form-label text-md-right"><b>Especificar: </b><span class="text-danger" title="Requerido"><b>*</b></span></label>
			<div class="col-md-6">
				<textarea id="especificar" rows="2" class="form-control" name="especificar" value="{{ old('especificar') }}"></textarea>

			</div>
		</div>

		<div class="form-group row">
			<label for="id_activo" class="col-md-4 col-form-label text-md-right"><b>Activo Fijo: </b><span class="text-danger" title="Requerido"><b>*</b></span></label>
			<div class="col-md-6">
				<select class="form-control" id="id_activo" name="id_activo" data-toggle="tooltip" data-placement="top" title="Codigo AF - Nombre (# Serie)" required>
					<option selected disabled="true" value="">Seleccionar Activo Fijo</option>
				</select>
			</div>
		</div>

		<div class="form-group row mb-0">
			<div class="col-md-6 offset-md-4">
				<a href="{{route('inicio.admin')}}" class="btn btn-secondary">
					Cancelar
				</a>
				<button type="submit" class="btn btn-primary">
					Generar Reporte
				</button>
			</div>
		</div>
	</form>
</div>
@endsection