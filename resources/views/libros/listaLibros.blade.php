<x-layout>
    <main>
        <h1 class="mt-4 text-info text-center p-4" ><img src="{{asset('img/details1.png')}}" alt="icono libro"> Listado general de libros</h1>
        <!--<a href="libros/create">Añadir libro</a> <a href="index">Inicio</a>-->
        <div class="container p-4">
            <table class="table">
                <tr class="p-3 mb-2 bg-info text-white">
                    <th>Usuario</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Año</th>
                    <th>Genero</th>
                    <th>Puntaje</th>
                    <th>Portada</th>
                    <th>Comentario</th>
                    <th>Acciones</th>
                </tr>
                @foreach ($libros as $libro)
                <tr>
                    <td>{{$libro->user->name}}</td> <!--Llama al metodo para mostrar el correo-->
                    <td>{{$libro->titulo}}</td>
                    <td>{{$libro->autor}}</td>
                    <td>{{$libro->year}}</td>
                    <td>
                        @foreach ($libro->generos as $genero)
                            {{$genero->genero}} <br>
                        @endforeach
                        </td>
                    <td>{{$libro->puntaje}}</td>
                    <td><img width="70px" src="{{Storage::url($libro->portada)}}"></td>
                    <td>{{$libro->comentario}}</td>
                    <td>
                        <a href="libros/{{$libro->id}}" class="btn btn-success text-white m-1">Detalles <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-stars" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                            <path d="M2.242 2.194a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.277.277 0 0 0-.094.3l.173.569c.078.256-.213.462-.423.3l-.417-.324a.267.267 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.277.277 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.271.271 0 0 0 .259-.194l.162-.53zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.277.277 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.267.267 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.277.277 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.271.271 0 0 0 .259-.194l.162-.53zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.277.277 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.267.267 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.277.277 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.271.271 0 0 0 .259-.194l.162-.53z"/>
                          </svg></a>
                        <a class="btn btn-primary active"  href="{{route('contacto', $libro->user->id)}}">Contactar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 16 16">
                            <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                            <path d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1H1Zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1V2Z"/>
                          </svg></a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </main>
    </x-layout>