<x-layout>
    <h1>Especificaciones del libro</h1>
    <h3>Usuario: {{$libro->user->name}}</h3>
    <a href="/libros">Inicio</a>
    <div class="container-fluid px-4">
        <table class="table">
            <tr class="p-3 mb-2 bg-info text-white">
                <th>ID</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Año</th>
                <th>Genero</th>
                <th>Puntaje</th>
                <th>Comentario</th>
            </tr>
            <tr>
                <td>{{$libro->id}}</td>
                <td>{{$libro->titulo}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->year}}</td>
                <td>{{$libro->genero}}</td>
                <td>{{$libro->puntaje}}</td>
                <td>{{$libro->comentario}}</td>
            </tr>
        </table>
    </div>
</x-layout>