<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autenticación</title>
</head>
<body>
    <h1>Envío de correo de verificación </h1>

    <ul>
        @foreach ($libros as $libro)
            {{$libro->user->correo_usuario}}<br>
        @endforeach
    </ul>

</body>
</html>