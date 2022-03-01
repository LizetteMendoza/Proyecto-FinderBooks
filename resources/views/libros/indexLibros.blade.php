<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h1>Listado de libros</h1>
    <a href="libros/create">Añadir libro</a>
    <table>
        <tr>
            <th>ID</th>
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
            <td>{{$libro->titulo}}</td>
            <td>{{$libro->autor}}</td>
            <td>{{$libro->year}}</td>
            <td>{{$libro->genero}}</td>
            <td>{{$libro->puntaje}}</td>
            <td>{{$libro->comentario}}</td>
            <td><a href="libros/{{$libro->id}}">Ver Detalle</a></td>
            <td><a href="libros/{{$libro->id}}/edit">Editar</a></td>
            <td>
                <form action="libros/{{$libro->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>