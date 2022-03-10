<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <title>Formulario</title>
</head>
<body>

    <h1>Agregar libro</h1>
    <div class="container p-4">
      <form action="/libros" method="POST"> {{--Crear--}}
          @csrf
          <div class="form-group p-4">
            <label for="titulo">Titulo</label><br>
            <input type="text" class="form-control" name="titulo" value="{{old('titulo')}}">
            @error('titulo')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror 
          </div>
          <div class="form-group p-4">
            <label for="autor">Autor</label><br>
            <input type="text" class="form-control" name="autor" value="{{old('autor')}}">
            @error('autor')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror 
          </div>
          <div  class="input-group mb-4 p-4">
            <label class="input-group-text btn-info" for="genero">Genero</label>
            <select class="form-select" name="genero" id="genero">
                <option value="Novela">Novela</option>
                <option value="Academico">Académico</option>
                <option value="Ficcion">Ficción</option>
                <option value="Fantasia">Fantasia</option>
                <option value="Historia">Historico</option>
                <option value="Filosofia">Filosofia</option>
            </select>
          </div>
          <div class="form-group p-4">
            <label for="year">Año</label>
            <input type="text" class="form-control" name="year" value="{{old('year')}}">
            @error('year')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
          </div>
          <div  class="input-group mb-4 p-4">
            <label class="input-group-text btn-info" for="puntaje">Puntaje</label>
            <select class="form-select" name="puntaje" id="genero">
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
            <label for="comentario">Comentario</label>
            <textarea class="form-control" name="comentario" id="comentario" cols="30" rows="10">{{old('comentario')}}</textarea>
            @error('comentario')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror <br>
            <button type="submit" class="btn btn-primary active">Enviar</button>
          </div>
      </form>
    </div>
</body>
</html>