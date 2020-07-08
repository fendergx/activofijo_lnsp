@extends('base.base')
@section('title')
Coordinaciones
@endsection
@section('extraJS')
<script type="text/javascript" src="{{ asset('js/coordinacion.js') }}"></script>
@endsection
@section('contenido')
<h2 class="text-center">Administrar Coordinaciones</h2>
<br />

<div class="panel panel-default">
	<div class="panel-heading">
		<ul>
			<button class="add-modal btn btn-primary"><span class="fas fa-plus">&nbsp;</span>Agregar Coordinación</button>
		</ul>
	</div>
	<div class="panel-body">
		<table class="table table-hover" id="postTable">
			<thead class="thead-light">
				<tr>
					<th>COORDINACIÓN</th>
					<th>ACCIONES</th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>
				@if(count($coordinaciones)<=0)
				<script type="text/javascript">
					window.onload = function() {
						toastr.clear();
						toastr.info('No hay coordinaciones registradas', 'Información', {timeOut: 7000});
					};
				</script>
				@endif
				@foreach($coordinaciones as $indexKey => $coordinacion)
				<tr class="itemCoordinacion{{$coordinacion->id_coord}}">
					<td>{{$coordinacion->nombre_coord}}</td>
					<td>
						<button class="edit-modal btn btn-info" data-id="{{$coordinacion->id_coord}}" data-coordinacion="{{$coordinacion->nombre_coord}}">
							<span class="fas fa-edit"></span>&nbsp;<!--Editar-->Editar</button>
							<button class="delete-modal btn btn-danger" data-id="{{$coordinacion->id_coord}}" data-coordinacion="{{$coordinacion->nombre_coord}}" value="Eliminar">
								<span class="fas fa-trash"></span>&nbsp;<!--Eliminar-->Eliminar</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div><!-- /.panel-body -->
		</div><!-- /.panel panel-default -->

		<!-- Modales para registrar, editar y eliminar-->
		@include('coordinacion.modal-registro-coordinacion')
		@include('coordinacion.modal-editar-coordinacion')
		@include('coordinacion.modal-eliminar-coordinacion')
		@endsection
