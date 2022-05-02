<x-layout>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 text-info"><img src="{{asset('img/book3.png')}}" alt="book"> FinderBook </h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">La plataforma para los amantes de los libros</li>
                        </ol>
                        <!--Sección del carrusel-->
                        <div class="container-fluid border border-1 ps-4 mb-4 mt-4">
                            
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-indicators">
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                    </div>
                                    <div class="carousel-inner ">
                                      <div class="carousel-item active "> 
                                        <img src="{{asset('img/portada.png')}}"  class="d-block w-100 center" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="{{asset('img/portada2.png')}}"  class="d-block w-100 center" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="{{asset('img/portada3.png')}}"  class="d-block w-100 center" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="{{asset('img/portada4.png')}}"  class="d-block w-100 center" alt="...">
                                      </div>
                                      <div class="carousel-item">
                                        <img src="{{asset('img/portada5.png')}}"  class="d-block w-100 center" alt="...">
                                      </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="visually-hidden">Next</span>
                                    </button>
                                  </div>
                        </div>
                        <!--Sección con card de colores-->
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