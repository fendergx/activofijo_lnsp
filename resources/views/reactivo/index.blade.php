@extends('base.base')
@section('title')
Administrar Reactivos
@endsection
@section('extraJS')
<script type="text/javascript" src="{{ asset('js/reactivo.js') }}"></script>
@endsection
@section('contenido')
<h2 class="text-center">Administrar Reactivos</h2>
<br />

<div class="panel panel-default">
	<div class="panel-heading">
		<ul>
			<button class="add-modal btn btn-primary"><span class="fas fa-plus">&nbsp;</span>Agregar Reactivo</button>
		</ul>
	</div>
	<div class="panel-body">
		<table class="table table-hover" id="postTable">
			<thead class="thead-light">
				<tr>
					<th>NOMBRE</th>
					<th>PRECIO</th>
					<th>PRESENTACIÓN</th>
					<th>ACCIONES</th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>
				@if(count($reactivos)<=0)
				<script type="text/javascript">
					window.onload = function() {
						toastr.clear();
						toastr.info('No hay reactivos registrados', 'Información', {timeOut: 7000});
					};
				</script>
				@endif
				@foreach($reactivos as $indexKey => $reactivo)
				<tr class="itemReactivo{{$reactivo->id_reactivo}}">
					<td>{{$reactivo->nombre_reactivo}}</td>
					<td>$ {{$reactivo->precio_reactivo}}</td>
					<td>{{$reactivo->presentacion}}</td>
					<td>
						<button class="detalle-modal btn btn-secondary" data-nombre="{{$reactivo->nombre_reactivo}}" data-precio="{{$reactivo->precio_reactivo}}" data-presentacion="{{$reactivo->presentacion}}" data-base="{{$reactivo->unidad_base}}" data-medida="{{$reactivo->unidad_medida}}" title="Detalle">
							<span class="fas fa-eye"></span>&nbsp;Detalle
						</button>
						<button class="edit-modal btn btn-info" data-id="{{$reactivo->id_reactivo}}" data-nombre="{{$reactivo->nombre_reactivo}}" data-precio="{{$reactivo->precio_reactivo}}" data-presentacion="{{$reactivo->presentacion}}" data-base="{{$reactivo->unidad_base}}" data-medida="{{$reactivo->unidad_medida}}">
							<span class="fas fa-edit"></span>&nbsp;<!--Editar-->Editar</button>
							<button class="delete-modal btn btn-danger" data-id="{{$reactivo->id_reactivo}}" title="Eliminar">
								<span class="fas fa-trash"></span>&nbsp;<!--Eliminar-->Eliminar</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div><!-- /.panel-body -->
		</div><!-- /.panel panel-default -->

		<!-- Modales para registrar, editar y eliminar-->
		@include('reactivo.modal-registro-reactivo')
		@include('reactivo.modal-editar-reactivo')
		@include('reactivo.modal-eliminar-reactivo')
		@include('reactivo.modal-detalle-reactivo')

		@endsection
