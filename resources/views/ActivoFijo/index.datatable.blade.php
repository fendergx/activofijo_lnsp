@extends('base.base')

@section('extraHead')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endsection

@section('title')
Activo Fijo
@endsection

@section('contenido')
<h2 class="text-center">Administrar Activo Fijo</h2>
<br />
<div class="panel panel-default">
	<div class="panel-heading">
		<ul>
			<a class="btn btn-primary" href="{{route('activofijo.create')}}"><span class="fas fa-plus">&nbsp;</span>Registrar nuevo Activo Fijo</a>
		</ul>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table id="tb_activos" class="table table-sm table-hover">
				<thead class="thead-light">
					<tr>
						<th>id</th>
						<th>Codigo</th>
						<th>Serie</th>
						<th>Nombre</th>
						<th>Ubicación</th>
						<th>Responsable</th>
						<th>Acciones</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>


@endsection
@section('extrajsfooter')
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function() {
			var table = $('#tb_activos').DataTable({
					//searching: false,
					//ordering:  false,
					//responsivo
					responsive: true,
					select: true,
					language: {
						url: 'http://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json'
					},
					//scrollY: 350, //muestra 6 registros
					//paging: true, //paginación habilitada
					"serverSide":false, 
					"ajax": "{{ url('api/activos') }}",
					"columns": [
					//para ocultar https://datatables.net/examples/basic_init/hidden_columns.html
					{data: 'id_af',"visible": false},
					{data: 'codigo_af'},
					{data: 'serie_af'},
					{data: 'nombre_af'},
					{data: 'id_ubicacion'},
					{data: 'persona_responsable'},
					{data: 'botones'},
                        //{data: 'coordinacion->nombre_coord', name: 'coordinacion->nombre_coord'},
                        //{data: 'usuario_pk->nombre_coord', name: 'usuario_pk->name'},
                        ],
                    });

		});
	</script>
@endsection
