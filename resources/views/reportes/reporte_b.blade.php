<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte B</title>
	<style type="text/css">
		<?php include(public_path().'/css/activofijo/reportes.css');?>
	</style>
</head>
<body>
	<div class="img-container-block">
		<img style="display: block; align-content: center;" src="https://test20212x.000webhostapp.com/logo_reporte.png" alt="logo" height="100px">
	</div>
	<h4 class="text-center">MINISTERIO DE SALUD 
		<br>UNIDAD DE ACTIVO FIJO
		<br>FORMULARIO MOVIMIENTO DE ACTIVO INTERNO (Formulario B)
		<br>ÁREAS DIFERENTES
	</h4>
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
				<br><br><br><br><br><br>
				<br><br><br><br><br><br>
			</td>
			<td>
				PRODUCTO:   
				<br>MARCA:      
				<br>MODELO:     
				<br>SERIE:      
				<br>
			</td>
			<td> </td>
			<td> </td>
			<td> </td>
		</tr>
	</table>
	<table>
		<tr>
			<td>
				<b>&nbsp;ENTREGA</b><br><br>  
				&nbsp;F. <br><br>
				<br>&nbsp;Nombre:      
				<br>&nbsp;Cargo:<br>
			</td>
			<td><b>&nbsp;RECIBE</b><br><br>   
				&nbsp;F. <br><br>
				<br>&nbsp;Nombre:      
				<br>&nbsp;Cargo:<br>
			</td>
		</tr>
		<tr>
			<td>
				<b>&nbsp;Autoriza Coordinación de Área que entrega:</b><br><br>  
				&nbsp;F. <br><br>
				<br>&nbsp;Nombre:      
				<br>&nbsp;Cargo:<br>
			</td>
			<td><b>&nbsp;Autoriza Coordinación de Área que recibe:
			</b><br><br>   
			&nbsp;F. <br><br>
			<br>&nbsp;Nombre:      
			<br>&nbsp;Cargo:<br>
		</td>
	</tr>
</table>

</body>
</html>