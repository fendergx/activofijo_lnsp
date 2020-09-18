@extends('base.base')
@section('title')
Fuentes de Activo Fijo
@endsection
@section('extraJS')
<script type="text/javascript" src="{{ asset('js/fuente.js') }}"></script>
@endsection
@section('contenido')
<h2 class="text-center">Administrar Fuentes de Activo Fijo</h2>
<br />

<div class="panel panel-default">
	<div class="panel-heading">
		<ul>
			<button class="add-modal btn btn-primary"><span class="fas fa-plus">&nbsp;</span>Agregar Fuente de AF </button>
		</ul>
	</div>
	<div class="panel-body">
		<table class="table table-hover" id="postTable">
			<thead class="thead-light">
				<tr>
					<th>FUENTE</th>
					<th>ACCIONES</th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>
				@if(count($fuentes)<=0)
				<script type="text/javascript">
					window.onload = function() {
						toastr.clear();
						toastr.info('No hay fuentes de activo fijo registradas', 'Información', {timeOut: 7000});
					};
				</script>
				@endif
				@foreach($fuentes as $indexKey => $fuente)
				<tr class="itemFuente{{$fuente->id_fuente}}">
					<td>{{$fuente->nombre_fuente}}</td>
					<td>
						<button class="edit-modal btn btn-info" data-id="{{$fuente->id_fuente}}" data-fuente="{{$fuente->nombre_fuente}}">
							<span class="fas fa-edit"></span>&nbsp;<!--Editar-->Editar</button>
							<button class="delete-modal btn btn-danger" data-id="{{$fuente->id_fuente}}" data-fuente="{{$fuente->nombre_fuente}}" value="Eliminar">
								<span class="fas fa-trash"></span>&nbsp;<!--Eliminar-->Eliminar</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div><!-- /.panel-body -->
		</div><!-- /.panel panel-default -->

		<!-- Modales para registrar, editar y eliminar-->
		@include('fuente.modal-registro-fuente')
		@include('fuente.modal-editar-fuente')
		@include('fuente.modal-eliminar-fuente')
		@endsection