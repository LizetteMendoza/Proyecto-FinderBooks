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
    
    <h1>Editar libro</h1>
    <div class="container p-4">
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
            <select class="form-select" name="genero" id="genero"><br>
                <option value="Novela"{{isset($libro)&& $libro->genero=='Novela' ? 'selected': ''}}>Novela</option>
                <option value="Academico"{{isset($libro)&& $libro->genero=='Academico' ? 'selected': ''}}>Académico</option>
                <option value="Ficcion"{{isset($libro)&& $libro->genero=='Ficcion' ? 'selected': ''}}>Ficción</option>
                <option value="Fantasia"{{isset($libro)&& $libro->genero=='Fantasia' ? 'selected': ''}}>Fantasia</option>
                <option value="Historia"{{isset($libro)&& $libro->genero=='Historia' ? 'selected': ''}}>Historico</option>
                <option value="Filosofia"{{isset($libro)&& $libro->genero=='Filosofia' ? 'selected': ''}}>Filosofia</option>
            </select><br>
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
            <select class="form-select"  name="puntaje" id="genero"><br>
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
</body>
</html>