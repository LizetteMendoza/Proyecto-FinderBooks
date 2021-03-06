<x-layout>

<h1 class="mt-4 text-info text-center fw-bold p-4"><img src="{{asset('img/email.png')}}" alt="" > Contactanos</h1>

<div  class="container p-5 border border-3   border-primary rounded-3 w-75">
    <h1 class=" rounded mt-4 text-white text-center fw-bold p-4 bg-primary">Ponte en contacto con nosotros</h1>
    <form action="{{route('contacto.store')}}" method="POST">
        @csrf
        <div class="form-group p-4">
            <label class="text-primary fw-bold fs-4">
                Nombre
                <input type="text" class="form-control"  name="name"  value="{{old('name')}}" required>
            </label>
            @error('name')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group p-4">
            <label class="text-primary fw-bold fs-4">
                Correo
                <input type="text" class="form-control"  name="correo"  value="{{old('correo')}}" required>
            </label>
            @error('correo')
            <div class="alert alert-danger">{{$message}}</div>
        @enderror
        </div>
        <div class="form-group p-4">
            <label class="text-primary fw-bold fs-4">
                Asunto
                <input type="text" class="form-control"  name="asunto"  value="{{old('asunto')}}" required>
            </label>
            @error('asunto')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group p-4 ">
            <label class="text-primary fw-bold fs-4">
                Mensaje
                <textarea name="mensaje" class="form-control" rows="7" required>{{old('mensaje')}}</textarea>
            </label>
            @error('mensaje')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary fw-bold active m-2">Enviar</button>
    </form>
        @if (session('info'))
            <script>
                alert("{{session('info')}}");
            </script>
        @endif
</div>
</x-layout>