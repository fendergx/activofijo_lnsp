@extends('base.base')
@section('title')
Estados
@endsection
@section('extraJS')
<script type="text/javascript" src="{{ asset('js/estado.js') }}"></script>
@endsection
@section('contenido')
<h2 class="text-center">Administrar Estados</h2>
<br />

<div class="panel panel-default">
	<div class="panel-heading">
		<ul>
			<button class="add-modal btn btn-primary"><span class="fas fa-plus">&nbsp;</span>Agregar Estado</button>
		</ul>
	</div>
	<div class="panel-body">
		<table class="table table-hover" id="postTable">
			<thead class="thead-light">
				<tr>
					<th>Estado</th>
					<th>ACCIONES</th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>
				@if(count($estados)<=0)
				<script type="text/javascript">
					window.onload = function() {
						toastr.clear();
						toastr.info('No hay estados registrados', 'Información', {timeOut: 7000});
					};
				</script>
				@endif
				@foreach($estados as $indexKey => $estado)
				<tr class="itemEstado{{$estado->id_estado}}">
					<td>{{$estado->estado_af}}</td>
					<td>
						<button class="edit-modal btn btn-info" data-id="{{$estado->id_estado}}" data-estado="{{$estado->estado_af}}">
							<span class="fas fa-edit"></span>&nbsp;<!--Editar-->Editar</button>
							<button class="delete-modal btn btn-danger" data-id="{{$estado->id_estado}}" data-estado="{{$estado->estado_af}}" value="Eliminar">
								<span class="fas fa-trash"></span>&nbsp;<!--Eliminar-->Eliminar</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div><!-- /.panel-body -->
		</div><!-- /.panel panel-default -->

		<!-- Modales para registrar, editar y eliminar-->
		@include('estado.modal-registro-estado')
		@include('estado.modal-editar-estado')
		@include('estado.modal-eliminar-estado')
		@endsection
