<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Error 400</title>
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
        <div><br>
        <img class="imgerror" src="{{ asset('img/errorr400.png') }}"><br>
        </div>
        <div>
            <h1>¡Ha ocurrido un error!</h1>
            <p>
                Petición denegada, Su cliente ha emitido una solicitud incorrecta o ilegal.      
            </p>
            <a type="button" class="btn btn-secondary" href="{{route('inicio.admin')}}">Ir a la pagina de inicio</a>
        </div>
    </div>
</body>
</html>