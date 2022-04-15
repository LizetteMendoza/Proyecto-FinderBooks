<x-layout>
    <h1 class="p-4 text-info text-center"><img src="{{asset('img/list2.png')}}" alt="icono libro"> Mi listado de libros</h1>
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
                <td>
                    @foreach ($libro->generos as $genero)
                        {{$genero->genero}} <br>
                    @endforeach
                    </td>
                <td>{{$libro->puntaje}}</td>
                <td>{{$libro->comentario}}</td>
                <td><a href="libros/{{$libro->id}}" class="btn btn-success text-white m-1">Detalles <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-stars" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5z"/>
                    <path d="M2.242 2.194a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.277.277 0 0 0-.094.3l.173.569c.078.256-.213.462-.423.3l-.417-.324a.267.267 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.277.277 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.271.271 0 0 0 .259-.194l.162-.53zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.277.277 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.267.267 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.277.277 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.271.271 0 0 0 .259-.194l.162-.53zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.277.277 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.267.267 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.277.277 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.271.271 0 0 0 .259-.194l.162-.53z"/>
                  </svg></a>
                    <a href="libros/{{$libro->id}}/edit" class="btn btn-primary text-white  m-1">Editar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                      </svg></a>
                    <form id="Borrar" action="libros/{{$libro->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" id="formSubmit" class="btn btn-danger active" value="Borrar"> 
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('eliminar')=='ok')
    <script>
        Swal.fire(
        'Eliminado!',
        'Tu libro se eliminó con éxito',
        'success')
    </script>
    @endif
    
    @if(session('editar')=='ok')
    <script>
        Swal.fire(
        'Editado!',
        'Tu libro se actualizó con éxito',
        'success')
    </script>
    @endif

    
    @if(session('crear')=='ok')
    <script>
        Swal.fire(
        'Registro completo!',
        'Tu libro se creó con éxito',
        'success')
    </script>
    @endif

    <script>
        formSubmit.addEventListener("click", function(event){
            event.preventDefault(); 

            Swal.fire({
            title: '¿Está seguro?',
            text: "Este libro se eliminará definitivamente!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar!',
            cancelButtonText: 'Cancelar',
            }).then((result) => {
            if (result.isConfirmed) {
                Borrar.submit();
            }
            })
        });
    </script>
    
</x-layout>


