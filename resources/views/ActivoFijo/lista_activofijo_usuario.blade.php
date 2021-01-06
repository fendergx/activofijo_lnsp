@extends('base.base')
@section('title')
Activos fijos de {{$etiqueta[0]}}
@endsection
@section('contenido')
<h2 class="text-center">Activos fijos de {{$etiqueta[0]}}</h2>
<br />
<div class="panel panel-default">
	<div class="panel-heading">
		<ul>
			<form method="GET" action="{{route('af.usuarios')}}" class="form-inline mt-2 float-right">
				<input class="form-control" type="text" id="codigo" name="codigo" placeholder="Buscar por código" aria-label="Buscar por código">
				<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
			</form>
		</ul>
	</div> <br><br>
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
						<a href="{{route('activofijo.detalle',['id' => $activo->id_af])}} " class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Ver detalles del activo">
							<span class="fas fa-eye"></span>
						</a>
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
