@extends('base.base')
@section('title')
Administrar Colores
@endsection
@section('extraJS')
<script type="text/javascript" src="{{ asset('js/color.js') }}"></script>
@endsection
@section('contenido')
<h2 class="text-center">Administrar Colores</h2>
<br />

<div class="panel panel-default">
	<div class="panel-heading">
		<ul>
			<button class="add-modal btn btn-primary"><span class="fas fa-plus">&nbsp;</span>Agregar Color</button>
		</ul>
	</div>
	<div class="panel-body">
		<table class="table table-hover" id="postTable">
			<thead class="thead-light">
				<tr>
					<th>COLOR</th>
					<th>ACCIONES</th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>
				@if(count($colores)<=0)
				<script type="text/javascript">
					window.onload = function() {
						toastr.clear();
						toastr.info('No hay colores registrados', 'Información', {timeOut: 7000});
					};
				</script>
				@endif
				@foreach($colores as $indexKey => $color)
				<tr class="itemColor{{$color->id_color}}">
					<td>{{$color->color_af}}</td>
					<td>
						<button class="edit-modal btn btn-info" data-id="{{$color->id_color}}" data-color_af="{{$color->color_af}}">
							<span class="fas fa-edit"></span>&nbsp;<!--Editar-->Editar</button>
							<button class="delete-modal btn btn-danger" data-id="{{$color->id_color}}" data-color_af="{{$color->color_af}}"title="Eliminar">
								<span class="fas fa-trash"></span>&nbsp;<!--Eliminar-->Eliminar</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div><!-- /.panel-body -->
		</div><!-- /.panel panel-default -->

		<!-- Modales para registrar, editar y eliminar-->
		@include('color.modal-registro-color')
		@include('color.modal-editar-color')
		@include('color.modal-eliminar-color')
		@endsection