@extends('template.app')

@section('main')
    <section id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.educastudio.com/uploads/home_banner/update_20230301_093012.png" class="d-block w-100"
                    alt="..." loading="lazy">
            </div>
            <div class="carousel-item">
                <img src="https://www.educastudio.com/uploads/home_banner/update_20230220_111849.png" class="d-block w-100"
                    alt="..." loading="lazy">
            </div>
            <div class="carousel-item">
                <img src="https://www.educastudio.com/uploads/home_banner/update_20230220_112030.png" class="d-block w-100"
                    alt="..." loading="lazy">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </section>
    <section class="container px-5 mb-5">
        <h1 class="text-center underline my-5 text-decoration-underline">Mari Belajar sambil Bermain</h1>
        <div class="row row-cols-md-3 gy-4">
            <div class="col-md">
                <div class="card">
                    <img src="/images/4_20201228_094944.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="/images/55_20201228_094818.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="/images/12_20201228_095009.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
