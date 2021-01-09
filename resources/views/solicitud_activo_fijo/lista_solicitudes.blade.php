@extends('base.base')
@section('title')
Administrar áreas
@endsection
@section('extraJS')
<script type="text/javascript" src="{{ asset('js/area.js') }}"></script>
@endsection
@section('contenido')
<h2 class="text-center">Administrar Solicitudes</h2>
<br />

<div class="panel panel-default">
	<div class="panel-heading">

	</div>
	<div class="panel-body">
		<table class="table table-hover" id="postTable">
			<thead class="thead-light">
				<tr>
					<th>Fecha</th>
					<th>Solicita</th>
					<th>Coordinación</th>
					<th>Area</th>
					<th>Activo</th>
					<th>Estado</th>
					<th>Acciones</th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>
				<script type="text/javascript">
					window.onload = function() {
						toastr.clear();
						toastr.info('No hay solicitudes en este momento', 'Información', {timeOut: 7000});
					};
				</script>
			</tbody>
		</table>
	</div><!-- /.panel-body -->
</div><!-- /.panel panel-default -->
@endsection
