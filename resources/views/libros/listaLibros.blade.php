<x-layout>
    <main>
        <h1 class="mt-4 text-info text-center p-4" ><img src="{{asset('img/details1.png')}}" alt="icono libro"> Listado general de libros</h1>
        <!--<a href="libros/create">Añadir libro</a> <a href="index">Inicio</a>-->
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
                    <th>Contacto</th>
                </tr>
                @foreach ($libros as $libro)
                <tr>
                    <td>{{$libro->id}}</td>
                    <td>{{$libro->user->correo_usuario}}</td> <!--Llama al metodo para mostrar el correo-->
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
                    <td><a class="btn btn-primary active"  href="{{route('contacto', $libro->user->id)}}">Contactar</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </main>
    </x-layout>