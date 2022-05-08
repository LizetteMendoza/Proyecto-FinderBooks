<x-layout>
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/js/bootstrap-select.min.js"></script>

    <h1 class="text-info text-center"><img src="{{asset('img/add.png')}}" alt="">Agregar libro</h1>
    <div class="container p-5 border border-3 rounded w-75">
      <form action="/libros" enctype="multipart/form-data" method="POST"> {{--Crear--}}
          @csrf
          <div class="form-group p-4">
            <label for="titulo" class="input-group-text btn-primary  bg-opacity-50">Titulo</label>
            <input type="text" class="form-control" name="titulo" value="{{old('titulo')}}" required>
            @error('titulo')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>
          <div class="form-group p-4">
            <label for="autor" class="input-group-text btn-primary  bg-opacity-50">Autor</label>
            <input type="text" class="form-control" name="autor" value="{{old('autor')}}" required>
            @error('autor')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>
          <div  class="input-group mb-4 p-4">
            <label class="input-group-text btn-primary  bg-opacity-50" for="genero_id">Genero</label>
            <select name="genero_id[]" class="selectpicker form-select" multiple data-live-search="true" required>
                <option value=""></option>
                @foreach ($generos as $genero)
                  <option value="{{$genero->id}}">{{$genero->genero}}</option>
                @endforeach

            </select>
          </div>
          <div class="form-group p-4">
            <label for="year" class="input-group-text btn-primary  bg-opacity-50">Año</label>
            <input type="text" class="form-control" name="year" value="{{old('year')}}" required>
            @error('year')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>
          <div  class="input-group mb-4 p-4">
            <label class="input-group-text btn-primary" for="puntaje">Puntaje</label>
            <select class="form-select" name="puntaje" id="puntaje" required>
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
          </div>

          <div class="form-group p-4">
            <label for="imagen"class="input-group-text btn-primary  bg-opacity-50">Imagen</label>
            <input accept="image/*" type="file" class="form-control" name="imagen">
            @error('imagen')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>

          <div class="form-group p-4">
            <label for="comentario" class="input-group-text btn-primary  bg-opacity-50">Comentario</label>
            <textarea class="form-control" required name="comentario" id="comentario" cols="30" rows="10">{{old('comentario')}}</textarea>
            @error('comentario')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror <br>
            <button type="submit" class="btn btn-primary active">Enviar</button>
          </div>
      </form>
    </div>
    <script type="text/javascript">
      $(document).ready(function() {
          $('select').selectpicker();
      });
    </script>
</x-layout>
