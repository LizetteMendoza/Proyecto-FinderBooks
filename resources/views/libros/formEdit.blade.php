<x-layout>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>


    <h1 class='text-center text-info'><img src="{{asset('img/edit.png')}}" alt=""> Editar libro</h1>
    <div class="container p-5  border border-3 rounded w-75">
    <form action="/libros/{{$libro->id}}" enctype="multipart/form-data" method="POST" class="px-4 py-3"> {{--Editar--}}
        @method('PATCH')
        @csrf
        <div class="form-group p-4">
            <label for="titulo" class="input-group-text btn-primary">Titulo</label>
            <input type="text" class="form-control" name="titulo" value="{{isset($libro)? $libro->titulo:''}}{{old('titulo')}}" required>
            @error('titulo')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group p-4">
            <label for="autor" class="input-group-text btn-primary">Autor</label>
            <input type="text" class="form-control" name="autor" value="{{isset($libro)? $libro->autor: ''}}{{old('autor')}}" required>
            @error('autor')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div  class="input-group mb-4 p-4">
            <label class="input-group-text btn-primary" for="genero">Genero</label>
            <select class="selectpicker form-select" name="genero_id[]" multiple>
                <option value=""></option>
                    @foreach ($generos as $genero)
                  <option value="{{$genero->id}}"{{isset($generos)&& array_search($genero->id, $libro->generos->pluck('id')->toArray())!== false ? 'selected': ''}}>{{$genero->genero}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group p-4">
            <label  for="year" class="input-group-text btn-primary">Año</label>
            <input type="text" class="form-control" name="year" value="{{isset($libro)? $libro->year: ''}}{{old('year')}}" required><br>
            @error('year')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div  class="input-group mb-4 p-4">
            <label  class="input-group-text btn-primary"  for="puntaje">Puntaje</label><br>
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
            <img width="300px" src="{{Storage::url($libro->portada)}}"><br>
            <br><label for="imagen" class="input-group-text btn-primary">Imagen</label>
            <input accept="image/*" type="file" class="form-control" name="imagen">
            @error('imagen')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group p-4">
            <label for="comentario" class="input-group-text btn-primary">Comentario</label>
            <textarea class="form-control"  name="comentario" id="comentario" cols="30" rows="10">{{isset($libro) ? $libro->comentario  : ''}}</textarea><br>
            @error('comentario')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <button type="submit" class="btn btn-primary active">Actualizar</button>
        </div>
    </form>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('select').selectpicker();
        });
      </script>
</x-layout>
