@extends('base.base')
@section('title')
Ubicaciones
@endsection
@section('extraJS')
<script type="text/javascript" src="{{ asset('js/ubicacion.js') }}"></script>
@endsection
@section('contenido')
<h2 class="text-center">Administrar Ubicaciones</h2>
<br />

<div class="panel panel-default">
	<div class="panel-heading">
		<ul>
			<button class="add-modal btn btn-primary"><span class="fas fa-plus">&nbsp;</span>Agregar Ubicación</button>
		</ul>
	</div>
	<div class="panel-body">
		<table class="table table-hover" id="postTable">
			<thead class="thead-light">
				<tr>
					<th>Ubicación</th>
					<th>Acciones</th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>
				@if(count($ubicaciones)<=0)
				<script type="text/javascript">
					window.onload = function() {
						toastr.clear();
						toastr.info('No hay ubicaciones registradas', 'Información', {timeOut: 7000});
					};
				</script>
				@endif
				@foreach($ubicaciones as $indexKey => $ubicacion)
				<tr class="itemUbicacion{{$ubicacion->id_ubicacion}}">
					<td>{{$ubicacion->ubicacion_af}}</td>
					<td>
						<button class="edit-modal btn btn-info" data-id="{{$ubicacion->id_ubicacion}}" data-ubicacion="{{$ubicacion->ubicacion_af}}">
							<span class="fas fa-edit"></span>&nbsp;Editar</button>
							<button class="delete-modal btn btn-danger" data-id="{{$ubicacion->id_ubicacion}}" data-ubicacion="{{$ubicacion->ubicacion_af}}" value="Eliminar">
								<span class="fas fa-trash"></span>&nbsp;Eliminar</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div><!-- /.panel-body -->
		</div><!-- /.panel panel-default -->

		<!-- Modales para registrar, editar y eliminar-->
		@include('ubicacion.modal-registro-ubicacion')
		@include('ubicacion.modal-editar-ubicacion')
		@include('ubicacion.modal-eliminar-ubicacion')
		@endsection
