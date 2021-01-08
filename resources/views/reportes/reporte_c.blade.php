<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reporte C</title>
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
		<br>FORMULARIO MOVIMIENTO DE ACTIVO INTERNO PARA DESCARGO (Formulario C)
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
				<b>Clase de Movimiento: </b><br>Para trámite de descargo
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
				<b>&nbsp;Sección que entrega:</b><br><br>  
				&nbsp;F. <br><br>
				<br>&nbsp;Nombre:      
				<br>&nbsp;Cargo:<br>
			</td>
			<td><b>&nbsp;Recibe en administración:
			</b><br><br>   
			&nbsp;F. <br><br>
			<br>&nbsp;Nombre:      
			<br>&nbsp;Cargo:<br>
		</td>
	</tr>
	<tr>
		<td>
			<b>&nbsp;Autoriza coordinación de área que entrega:</b>
			<br><br>  
			&nbsp;F. <br><br>
			<br>&nbsp;Nombre:      
			<br>&nbsp;Cargo:<br>
		</td>
		<td><b>&nbsp;Visto bueno:
		</b><br><br>   
		&nbsp;F. <br><br>
		<br>&nbsp;Nombre:      
		<br>&nbsp;Cargo:<br>
	</td>
</tr>
</table>

</body>
</html>