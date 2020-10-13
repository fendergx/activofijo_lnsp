@extends('base.base')
@section('title')
Administrar áreas
@endsection
@section('extraJS')
<script type="text/javascript" src="{{ asset('js/area.js') }}"></script>
<script type="text/javascript">
	//#Para subir el formulario
	$(document).ready(function(){

		$('.ir-arriba').click(function(){
			$('body, html').animate({
				scrollTop: '0px'
			}, 350);
		});

		$(window).scroll(function(){
			if( $(this).scrollTop() > 0 ){
				$('.ir-arriba').slideDown(500);
			} else {
				$('.ir-arriba').slideUp(500);
			}
		});

	});

//para subir con botones el formulario
function topFunction() {
	$('body, html').animate({
		scrollTop: '0px'
	}, 500);
}
</script>
@endsection

@section('extraHead')
<style type="text/css">
	/* para boton*/ 
	.ir-arriba {
		display:none;
		padding:17px;
		background:#024959;
		font-size:18px;
		font-style: bold;
		/* letra blanca
		colro:#fff;*/
		color:#fff;
		cursor:pointer;
		position: fixed;
		bottom:35px;
		right:15px;
	}

	/* extra*/
	.ir-arriba{
		border-radius: 79px 79px 79px 79px;
		-moz-border-radius: 79px 79px 79px 79px;
		-webkit-border-radius: 79px 79px 79px 79px;
		border: 0px solid #000000;


		-webkit-box-shadow: 11px 11px 5px -1px rgba(0,0,0,0.62);
		-moz-box-shadow: 11px 11px 5px -1px rgba(0,0,0,0.62);
		box-shadow: 11px 11px 5px -1px rgba(0,0,0,0.62);
	}
</style>
@endsection
@section('contenido')
<h2 class="text-center">Administrar Áreas</h2>
<br />

<div class="panel panel-default"><span class="ir-arriba icon-arrow-up2">Subir</span>
	<div class="panel-heading">
		<ul>
			<button class="add-modal btn btn-primary"><span class="fas fa-plus">&nbsp;</span>Agregar área</button>
		</ul>
	</div>
	<div class="panel-body">
		<table class="table table-hover table-sm" id="postTable">
			<thead class="thead-light">
				<tr>
					<th>AREA</th>
					<th>COORDINACIÓN</th>
					<th>ACCIONES</th>
				</tr>
				{{ csrf_field() }}
			</thead>
			<tbody>
				@if(count($areas)<=0)
				<script type="text/javascript">
					window.onload = function() {
						toastr.clear();
						toastr.info('No hay areas registradas', 'Información', {timeOut: 7000});
					};
				</script>
				@endif
				@foreach($areas as $indexKey => $area)
				<tr class="itemArea{{$area->id_area}}">
					<td>{{$area->nombre_area}}</td>
					<td>{{$area->coordinacion->nombre_coord}}</td>
					<td>
						<button class="edit-modal btn btn-info btn-sm" data-id="{{$area->id_area}}" data-area="{{$area->nombre_area}}" data-coordinacion="{{$area->coordinacion->nombre_coord}}" data-coord_id="{{$area->coordinacion->id_coord}}">
							<span class="fas fa-edit"></span>&nbsp;<!--Editar-->Editar</button>
							<button class="delete-modal btn btn-danger btn-sm" data-id="{{$area->id_area}}" title="Eliminar">
								<span class="fas fa-trash"></span>&nbsp;<!--Eliminar-->Eliminar</button>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<div class="d-flex justify-content-center">
					{!! $areas->links() !!}
				</div>
			</div><!-- /.panel-body -->
		</div><!-- /.panel panel-default -->

		<!-- Modales para registrar, editar y eliminar-->

		@endsection
