<x-layout>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 text-info"><img src="{{asset('img/book3.png')}}" alt=""> FinderBook </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">La plataforma para los amantes de los libros</li>
                        </ol>
                        <div class="card m-4">
                            <div class="card-body text-danger text-center fw-bold">
                              Te presentamo las diferentes opciones que tendrás
                              <img src="{{asset('img/books2.png')}}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">Agrega libros</div>
                                </div>
                                <div class="card bg-info text-primary bg-opacity-25 mb-4">
                                    <div class="card-body">Podras añadir tantos libros como quieras</div>
                                    <div><img src="{{asset('img/book5.png')}}" alt=""></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white">
                                    <div class="card-body">Editar libros</div>
                                </div>
                                <div class="card bg-warning bg-opacity-25 text-warning mb-4">
                                    <div class="card-body">Podras modificar los datos de los libros que hayas ingresado</div>
                                    <div><img src="{{asset('img/edit2.png')}}" alt=""></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white">
                                    <div class="card-body">Borrar libros</div>
                                </div>
                                <div class="card bg-success bg-opacity-25 text-success mb-4">
                                    <div class="card-body">Elimina libros que no quieras seguir compartiendo</div>
                                    <div><img src="{{asset('img/delete2.png')}}" alt=""></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white">
                                    <div class="card-body">Libro en detalle</div>
                                </div>
                                <div class="card bg-danger bg-opacity-25 text-danger mb-4">
                                    <div class="card-body">Muestra a detalle los datos de un libro</div>
                                    <div><img src="{{asset('img/details1.png')}}" alt=""></div>
                                    <br>
                                </div>
                            </div>
                        </div>
                </main>
</x-layout>              