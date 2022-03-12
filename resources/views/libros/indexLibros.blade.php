<x-layout>
    <h1 class="p-4"><img src="{{asset('img/list2.png')}}" alt="icono libro"> Listado de libros</h1>
<!--<a href="libros/create">Añadir libro</a> <a href="index">Inicio</a>-->
    <div class="conteiner-fluid">
    <div class="card-body">
    <div class="table-responsive">
        <table class="table mb-0">
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
                <td><a href="libros/{{$libro->id}}" class="btn btn-success text-white m-1">Detalles</a>
                    <a href="libros/{{$libro->id}}/edit" class="btn btn-primary text-white  m-1">Editar</a>
                    <form action="libros/{{$libro->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger active" value="Borrar">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    </div>
    </div>
</x-layout>