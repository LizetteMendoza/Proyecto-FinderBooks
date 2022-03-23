<x-layout>
    <h1 class='text-center text-info'><img src="{{asset('img/edit.png')}}" alt=""> Editar libro</h1>
    <div class="container p-5">
    <form action="/libros/{{$libro->id}}" method="POST" class="px-4 py-3"> {{--Editar--}} 
        @method('PATCH')
        @csrf
        <div class="form-group p-4">
            <label for="titulo">Titulo</label><br>
            <input type="text" class="form-control" name="titulo" value="{{isset($libro)? $libro->titulo:''}}{{old('titulo')}}"><br>
            @error('titulo')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror <br>
        </div>
        <div class="form-group p-4">
            <label for="autor" >Autor</label><br>
            <input type="text" class="form-control" name="autor" value="{{isset($libro)? $libro->autor: ''}}{{old('autor')}}"><br>
            @error('autor')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror <br>
        </div>
        <div  class="input-group mb-4 p-4">
            <label class="input-group-text btn-info" for="genero" >Genero</label><br>
            <select class="form-select" name="genero_id">
                @foreach ($generos as $genero)
                  <option value="{{$genero->id}}"{{isset($generos)&& array_search($genero->id, $libro->generos->pluck('id')->toArray())!== false ? 'selected': ''}}>{{$genero->genero}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group p-4">
            <label  for="year">Año</label><br>
            <input type="text" class="form-control" name="year" value="{{isset($libro)? $libro->year: ''}}{{old('year')}}"><br>
            @error('year')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div  class="input-group mb-4 p-4">
            <label  class="input-group-text btn-info"  for="puntaje">Puntaje</label><br>
            <select class="form-select"  name="puntaje" id="puntaje"><br>
                <option value="1" {{isset($libro)&& $libro->puntaje=='1' ? 'selected': ''}}>1</option>
                <option value="2" {{isset($libro)&& $libro->puntaje=='2' ? 'selected': ''}}>2</option>
                <option value="3" {{isset($libro)&& $libro->puntaje=='3' ? 'selected': ''}}>3</option>
                <option value="4" {{isset($libro)&& $libro->puntaje=='4' ? 'selected': ''}}>4</option>
                <option value="5" {{isset($libro)&& $libro->puntaje=='5' ? 'selected': ''}}>5</option>
                <option value="6" {{isset($libro)&& $libro->puntaje=='6' ? 'selected': ''}}>6</option>
                <option value="7" {{isset($libro)&& $libro->puntaje=='7' ? 'selected': ''}}>7</option>
                <option value="8" {{isset($libro)&& $libro->puntaje=='8' ? 'selected': ''}}>8</option>
                <option value="9" {{isset($libro)&& $libro->puntaje=='9' ? 'selected': ''}}>9</option>
                <option value="10" {{isset($libro)&& $libro->puntaje=='10' ? 'selected': ''}}>10</option>
            </select><br>
        </div>
        <div class="form-group p-4">
            <label for="comentario">Comentario</label><br>
            <textarea class="form-control"  name="comentario" id="comentario" cols="30" rows="10">{{isset($libro) ? $libro->comentario  : ''}}</textarea><br>
            @error('comentario')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror <br>
            <button type="submit" class="btn btn-primary active">Actualizar</button>
        </div>
    </form>
    </div>
</x-layout>