<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <title>Index</title>
</head>
<body>
    <h1>Listado de libros</h1>
    <a href="libros/create">Añadir libro</a> <a href="index">Inicio</a>
    <div class="container p-4">
        <table class="table">
            <tr class="p-3 mb-2 bg-info text-white">
                <th>ID</th>
                <th>Usuario</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Año</th>
                <th>Genero</th>
                <th>Puntaje</th>
                <th>Comentario</th>
                <th>Acciones</th>
            </tr>
            @foreach ($libros as $libro)
            <tr>
                <td>{{$libro->id}}</td>
                <td>{{$libro->user->name}}</td>
                <td>{{$libro->titulo}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->year}}</td>
                <td>{{$libro->genero}}</td>
                <td>{{$libro->puntaje}}</td>
                <td>{{$libro->comentario}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>