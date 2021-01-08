<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
		table {
			width: 100%;
			border: 1px solid #000;
			border-collapse: collapse;
		}
		th, tr, td {
			width: 25%;
			vertical-align: top;
			border: 1px solid #000;
		}
		.text-center{
			text-align: center;
		}
		.img-container-block {
			text-align: center;
		}
		.img-container-inline {
			text-align: center;
			display: block;
		}
		.table td:first-child {
			width: 120px;
		}
		.table td:nth-child(2) {
			width: 340px;
		}
		.table td:nth-child(3) {
			width: 75px;
		}
		.table td:nth-child(4) {
			width: 75px;
		}
		.table td:last-child {
			width: 100px;
		}
	</style>
</head>

<body>
	<div class="img-container-block">
		<img style="display: block; align-content: center;" src="https://test20212x.000webhostapp.com/logo_reporte.png" alt="logo" height="100px">
	</div>
	<h3 class="text-center">MINISTERIO DE SALUD 
		<br>UNIDAD DE ACTIVO FIJO
		<br>FORMULARIO MOVIMIENTO DE ACTIVO INTERNO (Formulario A)
		<br>ENTRE MISMAS ÁREAS
	</h3>
	<table class="table">
		<tr>
			<td> 
				<b> Dependencia que Entrega:</b> <br>insertar nombre 
				<br><br>
			</td>
			<td> 
				<b>Lugar y fecha: </b><br> LNSP, {{\Carbon\Carbon::now()->format('d/m/Y')}} 
			</td>
		</tr>
		<tr>
			<td>
				<b>Dependencia que Recibe: </b><br>insertar nombre 
				<br><br>
			</td>
			<td>
				<b>Clase de Movimiento: </b><br>insertar 
			</td>
		</tr>
	</table>
	<br>
	<table>
		<tr> 
			<th>Inventario No.</th>
			<th>Descripción.</th>
			<th>Estado actual</th>
			<th>Precio($)</th>
			<th>Observaciones</th>
		</tr>
		<tr>
			<td>
				(código)
				<br><br><br><br><br><br><br><br>
				<br><br><br><br><br><br><br><br>
			</td>
			<td>PRODUCTO:   <br>MARCA:      <br>MODELO:     <br>SERIE:      <br></td>
			<td> </td>
			<td> </td>
			<td> </td>
		</tr>
	</table>
	<br>
	<table>
		<tr>
			<td>
				<b>&nbsp;ENTREGA</b><br><br>  
				&nbsp;F. <br><br><br><br>
				<br>&nbsp;Nombre:      
				<br>&nbsp;Cargo:<br>
			</td>
			<td><b>&nbsp;RECIBE</b><br><br>   
				&nbsp;F. <br><br><br><br>
				<br>&nbsp;Nombre:      
				<br>&nbsp;Cargo:<br>
			</td>
			<td>
				<b>&nbsp;AUTORIZA</b><br><br> 
				&nbsp;F. <br><br><br><br>
				<br>&nbsp;Nombre:      
				<br>&nbsp;Cargo:<br>
			</td>
		</tr>
	</table>

</body>
</html>