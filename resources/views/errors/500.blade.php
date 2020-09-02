<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>Error 500</title>
	<link rel="stylesheet" href="{{ asset('css/error-javier.css') }}">
</head>
<body>
	<div class="container">			
			<h2>Oops! Algo salió mal... :(</h2>
			<h1>500</h1>
			<p>Se produjo un error interno de parte del servidor. Su solicitud no se pudo completar.</p>
			<a href="{{route('inicio.admin')}}">REGRESAR A PÁGINA PRINCIPAL</a>	
	</div>
</body>
</html>