<x-layout>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 text-info"><img src="{{asset('img/book3.png')}}" alt=""> FinderBook </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">La plataforma para los amantes de los libros</li>
                        </ol>
                        <div class="container-fluid border border-1 ps-4 mb-4 mt-4">
                            <div class="row">
                            <div class=" text-white rounded-3 mb-4 mt-4  p-4 col-xl-4 col-md-6 fw-bold bg-info">
                              Esta platafroma te permitirá compartir los datos de tus libros favoritos,
                              tus reseñas y puntuaciones atribuidas a estos. Podras consultar las aportaciones
                              de los demás integrantes de la comunidad y contactarlos.
                            </div>
                            <div class="card-body text-primary col-xl-3 col-md-6 text-center fw-bold">
                                <img src="{{asset('img/books3.png')}}" class="img-fluid" alt="libros y lentes">
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white">
                                    <div class="card-body">Agrega libros</div>
                                </div>
                                <div class="card bg-info text-primary bg-opacity-25 mb-4">
                                    <div class="card-body">Podras añadir tantos libros como quieras</div>
                                    <div><img src="{{asset('img/book5.png')}}" alt="libros"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white">
                                    <div class="card-body">Editar libros</div>
                                </div>
                                <div class="card bg-warning bg-opacity-25 text-warning mb-4">
                                    <div class="card-body">Podras modificar los datos de los libros que hayas ingresado</div>
                                    <div><img src="{{asset('img/edit2.png')}}" alt="lapiz"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white">
                                    <div class="card-body">Borrar libros</div>
                                </div>
                                <div class="card bg-success bg-opacity-25 text-success mb-4">
                                    <div class="card-body">Elimina libros que no quieras seguir compartiendo</div>
                                    <div><img src="{{asset('img/delete2.png')}}" alt="eliminar"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white">
                                    <div class="card-body">Libro en detalle</div>
                                </div>
                                <div class="card bg-danger bg-opacity-25 text-danger mb-4">
                                    <div class="card-body">Muestra a detalle los datos de un libro</div>
                                    <div><img src="{{asset('img/details1.png')}}" alt="lista-datos"><br></div>
                                    <br>
                                </div>
                            </div>
                        </div>
                </main>
</x-layout>              