@extends('base.base')
@section('title')
Activos fijos de {{$etiqueta[0]}}
@endsection
@section('contenido')
<h2 class="text-center">Activos fijos de {{$etiqueta[0]}}</h2>
<br />
<div class="panel panel-default">
	<div class="panel-heading">
	</div>
	<div class="panel-body">
		<table class="table table-hover" id="postTable">
			<thead class="thead-light">
				<tr>
					<th>Código</th>
					<th># Serie</th>
					<th>Nombre</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Estado</th>
					<th>Ubicación</th>
					<th></th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>
				@if(count($activos)<=0)
				<script type="text/javascript">
					window.onload = function() {
						toastr.clear();
						toastr.info('No hay activos para listar', 'Información', {timeOut: 7000});
					};
				</script>
				@endif

				@foreach($activos as $indexKey => $activo)
				<tr class="item{{$activo->id_af}}">
					<td>{{$activo->codigo_af}}</td>
					<td>{{$activo->serie_af}}</td>
					<td>{{$activo->nombre_af}}</td>
					<td>{{$activo->marca_af}}</td>
					<td>{{$activo->estado->estado_af}}</td>
					<td>{{$activo->modelo_af}}</td>
					<td>{{$activo->ubicacion->ubicacion_af}}</td>
					<td>
						<button class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Ver detalles del activo">
							<span class="fas fa-eye"></span>
						</button>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<!-- esta parte se edita en bootstrap-4 de pagination -->
		<div class="d-flex justify-content-center">
			{{ $activos->links() }}
		</div>
	</div><!-- /.panel-body -->
</div><!-- /.panel panel-default -->
@endsection
