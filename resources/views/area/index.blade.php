@extends('base.base')
@section('title')
Administrar áreas
@endsection
@section('extraJS')
<script type="text/javascript" src="{{ asset('js/area.js') }}"></script>
@endsection
@section('contenido')
<h2 class="text-center">Administrar Áreas</h2>
<br />

<div class="panel panel-default">
	<div class="panel-heading">
		<ul>
			<button class="add-modal btn btn-primary"><span class="fas fa-plus">&nbsp;</span>Agregar área</button>
		</ul>
	</div>
	<div class="panel-body">
		<table class="table table-hover" id="postTable">
			<thead class="thead-light">
				<tr>
					<th>AREA</th>
					<th>COORDINACIÓN</th>
					<th>ACCIONES</th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>
				@if(count($areas)<=0)
				<script type="text/javascript">
					window.onload = function() {
						toastr.clear();
						toastr.info('No hay areas registradas', 'Información', {timeOut: 7000});
					};
				</script>
				@endif
				@foreach($areas as $indexKey => $area)
				<tr class="itemArea{{$area->id_area}}">
					<td>{{$area->nombre_area}}</td>
					<td>{{$area->coordinacion->nombre_coord}}</td>
					<td>
						<button class="edit-modal btn btn-info" data-id="{{$area->id_area}}" data-area="{{$area->nombre_area}}" data-coordinacion="{{$area->coordinacion->nombre_coord}}" data-coord_id="{{$area->coordinacion->id_coord}}">
							<span class="fas fa-edit"></span>&nbsp;<!--Editar-->Editar</button>
							<button class="delete-modal btn btn-danger" data-id="{{$area->id_area}}" title="Eliminar">
								<span class="fas fa-trash"></span>&nbsp;<!--Eliminar-->Eliminar</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div><!-- /.panel-body -->
		</div><!-- /.panel panel-default -->

		<!-- Modales para registrar, editar y eliminar-->
		@include('area.modal-registro-area')
		@include('area.modal-editar-area')
		@include('area.modal-eliminar-area')
		@endsection
