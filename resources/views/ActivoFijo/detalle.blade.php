@extends('base.base')
@section('title')
Detalles de activo fijo
@endsection
@section('contenido')
<h2 class="text-center"> Detalles del activo {{$activo[0]->nombre_af}} </h2>
<div class="card-body">
	@foreach ($activo as $key => $af)
	<div class="form-group row">
		@if($af->codigo_af)
		<label class="col-md-4 col-form-label text-md-right"><b>Código:</b></label>
		<div class="col-md-6">
			<label class="col-form-label text-md-left">{{ $af->codigo_af}}</label>
		</div>
		@else 
		<label class="col-md-4 col-form-label text-md-right"></label>
		<div class="col-md-6">
			<label class="col-form-label text-md-left">
				<b><i class="fas fa-exclamation-circle text-danger"></i> El activo no posee código</b>
			</label>
		</div>
		@endif
	</div>
	<div class="form-group row">
		@if($af->serie_af)
		<label class="col-md-4 col-form-label text-md-right"><b>Número de serie:</b></label>
		<div class="col-md-6">
			<label class="col-form-label text-md-left">{{ $af->serie_af}}</label>
		</div>
		@else 
		<label class="col-md-4 col-form-label text-md-right"></label>
		<div class="col-md-6">
			<label class="col-form-label text-md-left">
				<b><i class="fas fa-exclamation-circle text-danger"></i> El activo no posee número de serie</b>
			</label>
		</div>
		@endif
	</div>
	<div class="form-group row">
		<label class="col-md-4 col-form-label text-md-right"><b>Nombre:</b></label>
		<div class="col-md-6">
			<label class="col-form-label text-md-left">{{ $af->nombre_af}}</label>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-4 col-form-label text-md-right"><b>Marca:</b></label>
		<div class="col-md-6">
			<label class="col-form-label text-md-left">{{ $af->marca_af}}</label>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-4 col-form-label text-md-right"><b>Modelo:</b></label>
		<div class="col-md-6">
			<label class="col-form-label text-md-left">{{ $af->modelo_af}}</label>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-4 col-form-label text-md-right"><b>Fuente proveedora:</b></label>
		<div class="col-md-6">
			<label class="col-form-label text-md-left">{{ $af->fuente->nombre_fuente}}</label>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-4 col-form-label text-md-right"><b>Color:</b></label>
		<div class="col-md-6">
			<label class="col-form-label text-md-left">{{ $af->color->color_af}}</label>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-4 col-form-label text-md-right"><b>Estado:</b></label>
		<div class="col-md-6">
			<label class="col-form-label text-md-left">{{ $af->estado->estado_af}}</label>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-4 col-form-label text-md-right"><b>Ubicación:</b></label>
		<div class="col-md-6">
			<label class="col-form-label text-md-left">{{ $af->ubicacion->ubicacion_af}}</label>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-4 col-form-label text-md-right"><b>Fecha de adquisición:</b></label>
		<div class="col-md-6">
			<label class="col-form-label text-md-left">{{\Carbon\Carbon::parse($af->fecha_adq_af)->format('d/m/Y')}} ({{\Carbon\Carbon::parse($af->fecha_adq_af)->diffForHumans()}})</label>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-4 col-form-label text-md-right"><b>Valor de adquisición:</b></label>
		<div class="col-md-6">
			<label class="col-form-label text-md-left">$ {{ $af->valor_adq_af}}</label>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-4 col-form-label text-md-right"><b>Valor actual:</b></label>
		<div class="col-md-6">
			<label class="col-form-label text-md-left">$ {{ $af->valor_actual_af}}</label>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-4 col-form-label text-md-right"><b>Descripción:</b></label>
		<div class="col-md-6">
			<label class="col-form-label text-md-left">
				@if($af->descripcion)
				{{ $af->descripcion}}
				@else 
				<i class="fas fa-exclamation-circle text-danger"></i> No hay descripción
				@endif
			</label>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-4 col-form-label text-md-right"><b>Ubicación:</b></label>
		<div class="col-md-6">
			<label class="col-form-label text-md-left">{{ $af->ubicacion->ubicacion_af}}</label>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-4 col-form-label text-md-right"><b>Área (Coordinación):</b></label>
		<div class="col-md-6">
			<label class="col-form-label text-md-left">{{ $af->area->nombre_area}} ({{ $af->coordinacion->nombre_coord}})</label>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-4 col-form-label text-md-right"><b>Persona a cargo:</b></label>
		<div class="col-md-6">
			<label class="col-form-label text-md-left">{{ $af->responsable->nombres}} {{ $af->responsable->apellidos}}</label>
		</div>
	</div>
	@endforeach
	<div class="d-flex justify-content-center">
		<a class="btn btn-secondary" href="{{ url()->previous() }}">Regresar</a>
	</div>
</div>
@endsection