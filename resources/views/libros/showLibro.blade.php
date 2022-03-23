<x-layout>
    <h1 class="text-center text-info"><img src="{{asset('img/det.png')}}" alt=""> Especificaciones del libro</h1>
    <h3 class="text-primary ms-4">Usuario: {{$libro->user->name}}</h3>
    <!--<a href="/libros">Inicio</a>-->
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
                <td>
                    @foreach ($libro->generos as $genero)
                    {{$genero->genero}} <br>
                    @endforeach
                </td>
                <td>{{$libro->puntaje}}</td>
                <td>{{$libro->comentario}}</td>
            </tr>
        </table>
    </div>
</x-layout>