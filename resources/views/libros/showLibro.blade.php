<x-layout>
    <h1 class="text-center text-info fw-bold"><img src="{{asset('img/det.png')}}" alt=""> Especificaciones del libro</h1>
    <h3 class="text-primary ms-4">Usuario: {{$libro->user->name}}</h3>
    <!--<a href="/libros">Inicio</a>-->
    <div class="container-fluid px-4 justify-content-center">
       <!-- <table class="table">
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
        <img width="300px" src="{{Storage::url($libro->portada)}}">-->

        <table class="table border border-5 border-primary rounded w-75">
            <tr>
                <th class="p-3 mb-2 bg-primary  bg-opacity-75 text-white">Titulo</th>
                <td class="p-3 mb-2 ">{{$libro->titulo}}</td> 
            </tr>
            <tr >
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">Autor</th>
                <td class="p-3 mb-2 ">{{$libro->autor}}</td> 
            </tr>
            <tr >
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">Año</th>
                <td class="p-3 mb-2 ">{{$libro->year}}</td> 
            </tr>
            <tr >
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">Genero</th>
                <td class="p-3 mb-2 ">
                    @foreach ($libro->generos as $genero)
                        {{$genero->genero}} <br>
                    @endforeach    
                </td> 
            </tr>
            <tr >
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">Puntaje</th>
                <td class="p-3 mb-2 ">{{$libro->puntaje}}</td> 
            </tr>
            <tr >
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">Comentario</th>
                <td class="p-3 mb-2  ">{{$libro->comentario}}</td> 
            </tr>
            <tr >
                <th class="p-3 mb-2 bg-primary bg-opacity-75 text-white">Image</th>
                <td class="p-3 mb-2  "><img width="40%" src="{{Storage::url($libro->portada)}}"></td> 
            </tr>

        </table>
    </div>
</x-layout>