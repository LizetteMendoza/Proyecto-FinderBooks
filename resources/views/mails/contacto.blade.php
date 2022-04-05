<x-layout>

<h1 class="mt-4 text-info text-center p-4">Contacto</h1>

<div  class="container p-5 border border-3 rounded-3">
<form action="{{route('contacto.store')}}" method="POST">
    @csrf
    <div class="form-group p-4">
        <label>
            Nombre:
            <input type="text" class="form-control"  name="name">
        </label>
        @error('name')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group p-4">
        <label>
            Correo:
            <input type="text" class="form-control"  name="correo">
        </label>
        @error('correo')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
    </div>
    <div class="form-group p-4">
        <label>
            Asunto:
            <input type="text" class="form-control"  name="asunto">
        </label>
        @error('asunto')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="form-group p-4">
        <label>
            Mensaje:
            <textarea name="mensaje" class="form-control" rows="6"></textarea>
        </label>
        @error('mensaje')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary active">Enviar</button>
</form>
    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
</div>

</x-layout>