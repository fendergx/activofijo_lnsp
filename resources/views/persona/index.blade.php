@extends('base.base')
@section('title')
Administrar Personas
@endsection
@section('extraJS')
<script type="text/javascript" src="{{ asset('js/persona.js') }}"></script>
@endsection
@section('contenido')
<h2 class="text-center">Administrar Personas Responsables</h2>
<br />

<div class="panel panel-default">
	<div class="panel-heading">
		<ul>
			<button class="add-modal btn btn-primary"><span class="fas fa-plus">&nbsp;</span>Agregar persona</button>
		</ul>
	</div>
	<div class="panel-body">
		<table class="table table-hover" id="postTable">
			<thead class="thead-light">
				<tr>
					<th>PERSONA RESPONSABLE</th>
					<th>DUI</th>
					<th>CLIENTE </th>
					<th>ACCIONES</th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>
				@if(count($personas)<=0)
				<script type="text/javascript">
					window.onload = function() {
						toastr.clear();
						toastr.info('No hay personas registradas', 'Información', {timeOut: 7000});
					};
				</script>
				@endif
				@foreach($personas as $indexKey => $persona)
				<tr class="itemPersona{{$persona->id_persona}}">
					<td>{{$persona->nombre_persona}} {{$persona->apellido_persona}}</td>
					<td>{{$persona->dui}}</td>
					<td>{{$persona->cliente_preparaduria->nombre_cliente}}</td>

					<td>
						<button class="edit-modal btn btn-info" data-id="{{$persona->id_persona}}" data-nombre="{{$persona->nombre_persona}}" data-apellido="{{$persona->apellido_persona}}" data-dui="{{$persona->dui}}" data-clienteid="{{$persona->id_cliente}}">
							<span class="fas fa-edit"></span>&nbsp;<!--Editar-->Editar</button>
						<button class="delete-modal btn btn-danger" data-id="{{$persona->id_persona}}" title="Eliminar">
							<span class="fas fa-trash"></span>&nbsp;<!--Eliminar-->Eliminar</button>
					</td>
				</tr>
				@endforeach
				
			</tbody>
		</table>
	</div>
</div>

@include('persona.modal-registro-persona')	
@include('persona.modal-editar-persona')
@include('persona.modal-eliminar-persona')
@endsection
