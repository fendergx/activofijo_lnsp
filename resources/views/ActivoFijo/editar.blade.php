@extends('base.base')
@section('title')
Editar Activo Fijo
@endsection
@section('extraHead')
<link rel="stylesheet" href="{{asset('css/date/flatpickr.css')}}">
<link rel="stylesheet" href="{{asset('css/date/temas/dark.css')}}">
@endsection
@section('extraJS')
<!-- para fecha-->
<script type="text/javascript" src="{{ asset('js/activofijo.js') }}"></script>
<script type="text/javascript" src="{{asset('js/date/flatpickr.js')}}"></script>
<script type="text/javascript" src="{{asset('js/date/lang-es.js')}}"></script>
<script type="text/javascript" src="{{asset('js/date/flatpickr-config.js')}}"></script>
@endsection
@section('contenido')
<h2 class="text-center"> Editar Activo fijo </h2>
<div class="card-body">

	@csrf
	<div class="form-group row" hidden>
		<label for="name" class="col-md-4 col-form-label text-md-right">ID:</label>
		<div class="col-md-6">
			<input id="id_af" type="text" class="form-control" name="id_af" value="{{$activo[0]->id_af}}" required disabled>
		</div>
	</div>
	<!--Codigo-->
		<div class="form-group row">
			<label for="codigo" class="col-md-4 col-form-label text-md-right">Código:
			</label>
			<div class="col-md-6">
				<input id="codigoAF" type="text" class="form-control @error('codigoAF') is-invalid @enderror" name="codigoAF" value="{{$activo[0]->codigo_af}}" autocomplete="name">
			</div>
		</div>
	<!--Nombre-->
		<div class="form-group row">
			<label for="name" class="col-md-4 col-form-label text-md-right">Nombre: <span class="text-danger" title="Requerido"><b>*</b></span>
			</label>

			<div class="col-md-6">
				<input id="nombreAF" type="text" class="form-control @error('nombreAF') is-invalid @enderror" name="nombreAF" value="{{$activo[0]->nombre_af}}" required autocomplete="name" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]+$" title="Solo puede ingresar letras" autofocus>

			</div>
		</div>
	<!--Marca-->
		<div class="form-group row">
			<label for="marca" class="col-md-4 col-form-label text-md-right">Marca: <span class="text-danger" title="Requerido"><b>*</b></span>
			</label>

			<div class="col-md-6">
				<input id="marcaAF" type="text" class="form-control @error('marcaAF') is-invalid @enderror" name="marcaAF" value="{{$activo[0]->marca_af}}" required autocomplete="name" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]+$" title="Solo puede ingresar letras" autofocus>

			</div>
		</div>
	<!--Modelo-->
		<div class="form-group row">
			<label for="name" class="col-md-4 col-form-label text-md-right">Modelo: <span class="text-danger" title="Requerido"><b>*</b></span>
			</label>

			<div class="col-md-6">
				<input id="modeloAF" type="text" class="form-control @error('modeloAF') is-invalid @enderror" name="modeloAF" value="{{$activo[0]->modelo_af}}" required autocomplete="name" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]+$" title="Solo puede ingresar letras" autofocus>


			</div>
		</div>
	<!--Serie-->
		<div class="form-group row">
			<label for="name" class="col-md-4 col-form-label text-md-right">Serie: <span class="text-danger" title="Requerido"><b>*</b></span>
			</label>

			<div class="col-md-6">
				<input id="serieAF" type="text" class="form-control @error('serieAF') is-invalid @enderror" name="serieAF" value="{{$activo[0]->serie_af}}" required autocomplete="name" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚüÜ ]+$" title="Solo puede ingresar letras" autofocus>

			</div>
		</div>
	<!--feca de adquisición-->
		<div class="form-group row">
			<label for="name" class="col-md-4 col-form-label text-md-right">Fecha adquisición: <span class="text-danger" title="Requerido"><b>*</b></span>
			</label>

			<div class="col-md-6">
				<input id="fechaAdqAF" type="text" class="form-control fecha-format" name="fechaAdqAF" value="{{$activo[0]->fecha_adq_af}}" required autocomplete="name" autofocus>

			</div>
		</div>
	<!--Valor Adquisición-->
		<div class="form-group row">
			<label for="name" class="col-md-4 col-form-label text-md-right">Valor de Adquisición: <span class="text-danger" title="Requerido"><b>*</b></span>
			</label>

			<div class="col-md-6">
				<input id="valorAdqAF" type="number" min="0.00" class="form-control @error('valorAdqAF') is-invalid @enderror" name="valorAdqAF" value="{{$activo[0]->valor_adq_af}}" required autocomplete="name"  autofocus>
			</div>
		</div>
	<!--Valor actual-->
		<div class="form-group row">
			<label for="name" class="col-md-4 col-form-label text-md-right">Valor Actual: <span class="text-danger" title="Requerido"><b>*</b></span>
			</label>

			<div class="col-md-6">
				<input id="valorActAF" type="number" min="0.00" class="form-control @error('valorActAF') is-invalid @enderror" name="valorActAF" value="{{$activo[0]->valor_actual_af}}" required autocomplete="name" autofocus>

			</div>
		</div>
	<!--Descripción-->
		<div class="form-group row">
			<label for="name" class="col-md-4 col-form-label text-md-right">Descripción: <span class="text-danger" title="Requerido"><b>*</b></span>
			</label>

			<div class="col-md-6">
				<textarea id="descripcionAF" class="form-control @error('descripcionAF') is-invalid @enderror" name="descripcionAF" value="{{$activo[0]->descripcion_af}}" required autocomplete="name" autofocus></textarea>

			</div>
		</div>
	
	<!--Coordinación-->
		<div class="form-group row">
			<label for="coordinacionAF" class="col-sm-4 col-form-label text-sm-right">Coordinación: <span class="text-danger" title="Requerido"><b>*</b></span>
			</label>
			<div class="col-sm-6">
				<select required class="form-control" id="coordinacionAF" name="coordinacionAF">
					<option selected disabled="true" value=""></option>
					@foreach($coordinaciones as $indexKey => $coordinacion)
					<option value="{{$coordinacion->id_coord}}">{{$coordinacion->nombre_coord}}</option>	
					@endforeach
				</select>
			</div>
		</div>
		<!--Área-->
		<div class="form-group row">
			<label for="areaAF" class="col-sm-4 col-form-label text-sm-right">Área: <span class="text-danger" title="Requerido"><b>*</b></span>
			</label>
			<div class="col-sm-6">
				<select required class="form-control" id="areaAF" name="areaAF">
					<option selected disabled="true" value="">Seleccione una Área</option>
					@foreach($areas as $indexKey => $area)
					<option value="{{$area->id_area}}">{{$area->nombre_area}}</option>	
					@endforeach
				</select>
			</div>
		</div>

		
		<!--Ubicación-->
		<div class="form-group row">
			<label for="ubicacionAF" class="col-sm-4 col-form-label text-sm-right">Ubicación: <span class="text-danger" title="Requerido"><b>*</b></span>
			</label>
			<div class="col-sm-6">
				<select required class="form-control" id="ubicacionAF" name="ubicacionAF">
					<option selected disabled="true" value="">Seleccione una ubicacion</option>
					@foreach($Ubicaciones as $indexKey => $ubicacion)
					<option value="{{$ubicacion->id_ubicacion}}">{{$ubicacion->ubicacion_af}}</option>	
					@endforeach
				</select>
			</div>
		</div>
		<!--Color-->
		<div class="form-group row">
			<label for="colorAF" class="col-sm-4 col-form-label text-sm-right">Color: <span class="text-danger" title="Requerido"><b>*</b></span>
			</label>
			<div class="col-sm-6">
				<select required class="form-control" id="colorAF" name="colorAF">
					<option selected disabled="true" value="">Seleccione un color</option>
					@foreach($Colores as $indexKey => $color)
					<option value="{{$color->id_color}}">{{$color->color_af}}</option>	
					@endforeach
				</select>
			</div>
		</div>
		<!--Fuente-->
		<div class="form-group row">
			<label for="fuenteAF" class="col-sm-4 col-form-label text-sm-right">Fuente: <span class="text-danger" title="Requerido"><b>*</b></span>
			</label>
			<div class="col-sm-6">
				<select required class="form-control" id="fuenteAF" name="fuenteAF">
					<option selected disabled="true" value="">Seleccione una Fuente</option>
					@foreach($Fuentes as $indexKey => $fuente)
					<option value="{{$fuente->id_fuente}}">{{$fuente->nombre_fuente}}</option>	
					@endforeach
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="encargadoAF" class="col-sm-4 col-form-label text-sm-right">Encargado: <span class="text-danger" title="Requerido"><b>*</b></span>
			</label>
			<div class="col-sm-6">
				<select required class="form-control" id="encargadoAF" name="encargadoAF">
					<option selected disabled="true" value="">Seleccione al encargado del Activo Fijo</option>
					@foreach($Usuarios as $indexKey => $encargado)
					<option value="{{$encargado->id_usuario}}">{{$encargado->nombres}}</option>	
					@endforeach
				</select> 
			</div>
		</div>

		<div class="form-group row mb-0">
			<div class="col-md-6 offset-md-4 update-activo">
				<a type="button" class="btn btn-secondary" href="{{route('activofijo.index')}}">
					Cancelar
				</a>
				<button type="button" class="btn btn-primary edit-activo">
					Editar Activo Fijo
				</button>
			</div>
		</div>


</div> 

@endsection()