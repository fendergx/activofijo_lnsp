@extends('base.base')
@section('title')
Clientes de Preparaduría
@endsection
@section('extraJS')
<script type="text/javascript" src="{{ asset('js/cliente.js') }}"></script>
@endsection
@section('contenido')
<h2 class="text-center">Administrar Clientes de Preparaduría</h2>
<br />

<div class="panel panel-default">
	<div class="panel-heading">
		<ul>
			<button class="add-modal btn btn-primary"><span class="fas fa-plus">&nbsp;</span>Agregar Cliente</button>
		</ul>
	</div>
	<div class="panel-body">
		<table class="table table-hover" id="postTable">
			<thead class="thead-light">
				<tr>
					<th>Cliente</th>
					<th>Acciones</th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>
				@if(count($clientes)<=0)
				<script type="text/javascript">
					window.onload = function() {
						toastr.clear();
						toastr.info('No hay clientes registrados', 'Información', {timeOut: 7000});
					};
				</script>
				@endif
				@foreach($clientes as $indexKey => $cliente)
				<tr class="itemCliente{{$cliente->id_cliente}}">
					<td>{{$cliente->nombre_cliente}}</td>
					<td>
						<button class="edit-modal btn btn-info" data-id="{{$cliente->id_cliente}}" data-cliente="{{$cliente->nombre_cliente}}">
							<span class="fas fa-edit"></span>&nbsp;Editar</button>
							<button class="delete-modal btn btn-danger" data-id="{{$cliente->id_cliente}}" data-cliente="{{$cliente->nombre_cliente}}" value="Eliminar">
								<span class="fas fa-trash"></span>&nbsp;Eliminar</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div><!-- /.panel-body -->
		</div><!-- /.panel panel-default -->

		<!-- Modales para registrar, editar y eliminar-->
		@include('cliente.modal-registro-cliente')
		@include('cliente.modal-editar-cliente')
		@include('cliente.modal-eliminar-cliente')
		@endsection
