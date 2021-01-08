@extends('base.base')
@section('title')
Depreciación de activos fijos
@endsection
@section('extraJS')
<script type="text/javascript" src="{{asset('js/activofijo-depreaciacion.js')}}"></script>
@endsection
@section('contenido')
<h2 class="text-center">Depreciación de activos fijos</h2>
<br />
<div class="panel panel-default">
	<div class="panel-heading">
		<ul>
			<form method="GET" action="{{route('activofijo.depreciacion')}}" class="form-inline mt-2 float-right">
				<input class="form-control" type="text" id="codigo" name="codigo" placeholder="Buscar por código" aria-label="Buscar por código">
				<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
			</form>
		</ul>
	</div>
	<div class="panel-body">
		<table class="table table-hover" id="postTable">
			<thead class="thead-light">
				<tr>
					<th>Código</th>
					<th># Serie</th>
					<th>Nombre de activo</th>
					<th>Fecha de adquisión</th>
					<th>Valor adquisición</th>
					<th>Valor actual</th>
					<th>Última depreciación</th>
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
					<td data-toggle="tooltip" data-placement="bottom" title="{{\Carbon\Carbon::parse($activo->fecha_adq_af)->diffForHumans()}}">
						{{\Carbon\Carbon::parse($activo->fecha_adq_af)->format('d/m/Y')}}
					</td>
					<td>$ {{$activo->valor_adq_af}}</td>
					<td>$ {{$activo->valor_actual_af}}</td>
					
					@if($activo->fecha_depreciado =='')
					<td>
						<i>No se ha realizado</i>
					</td>
					@else
					<td data-toggle="tooltip" data-placement="bottom" title="{{\Carbon\Carbon::parse($activo->fecha_depreciado)->diffForHumans()}}">
						{{\Carbon\Carbon::parse($activo->fecha_depreciado)->format('d/m/Y (H:i)')}}
					</td>
					@endif
					<td>
						<button class="modal-depreciacion btn btn-primary" href="#" data-id="{{$activo->id_af}}" data-nombre="{{$activo->nombre_af}}" data-actual="{{$activo->valor_actual_af}}">
							<span class="fas fa-sort-numeric-down-alt"></span>&nbsp;Depreciar
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
@include('ActivoFijo.modal-depreciar-activo-fijo')
@endsection
