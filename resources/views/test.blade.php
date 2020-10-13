<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

	<title>test</title>
</head>
<body>


	<div class="container">
		<h1>Areas</h1>
		<div class="table-responsive">
			<table id="foca" class="table table-sm table-hover">
				<thead class="thead-light">
					<tr>
						<th>id</th>
						<th>area</th>
						<th>coordinacion</th>
						<th>Acciones</th>
					</tr>
				</thead>

			</table>
		</div>
	</div>

	<footer>
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

		<!-- para tooltip-->

	</footer>


	<script>
		$(document).ready(function() {


			var table = $('#foca').DataTable({
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
					"serverSide":true,
					"ajax": "{{ url('api/areas') }}",
					"columns": [

					//para ocultar https://datatables.net/examples/basic_init/hidden_columns.html
					{data: 'id_area',"visible": false},
					{data: 'nombre_area'},
					{data: 'id_coord'},
					{data: 'botones'},

                        //{data: 'coordinacion->nombre_coord', name: 'coordinacion->nombre_coord'},
                        //{data: 'usuario_pk->nombre_coord', name: 'usuario_pk->name'},
                        ],

                    });

			$('#foca tbody').on( 'click', '.btn', function () {
				var dataFx = table.row( $(this).parents('tr') ).data();
				console.log(dataFx);
				alert("id de área"+dataFx.id_area+"\nArea: "+dataFx.nombre_area+'\n'+"Coordinación"+dataFx.id_coord);
			} );


		});
	</script>

	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();   
		});
	</script>
</body>
</html>