<x-layout>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 text-info fw-bold"><img src="{{asset('img/book3.png')}}" alt="book"> FinderBook </h1>
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
                </main>
</x-layout>              