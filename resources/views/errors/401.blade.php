<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Error 401</title>
    <style>
        .container-error {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-top: 10px;
            border-radius: 10px;
        }
        .imgerror{
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="container-error">
        <div>
        <img class="imgerror" src="{{ asset('img/errorr401.png') }}">
        </div>
        <div>
            <h1>¡Ha ocurrido un error!</h1>
            <p>Acceso denegado, la solicitud no se ha aplicado porque carece de credenciales de autenticación válidas para el recurso de destino.      
            </p>
            <a type="button" class="btn btn-secondary" href="{{route('inicio.admin')}}">Autentificarse</a>
        </div>
    </div>
</body>
</html>