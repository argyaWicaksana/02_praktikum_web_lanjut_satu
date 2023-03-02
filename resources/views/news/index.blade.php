@extends('template.app')

@section('css')
    <link rel="stylesheet" href="/css/edu-games.css">
@endsection

@section('main')
    <section class="w-100 p-5 banner-page">
        <h1 class="text-center text-white">Berita</h1>
    </section>
    <section class="container p-5">
        <div class="mb-4 d-flex gap-3">
            <input type="text" class="w-100" placeholder="Search...">
            <button type="submit" class="btn btn-warning">Search</button>
        </div>
        <div class="row row-cols-lg-4 gy-4">
            @for ($i = 0; $i < 10; $i++)
                <div class="col-md">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/news/1738003843_20230223_100823.png" class="card-img-top" alt="..." loading="lazy">
                        <div class="card-body">
                            <a class="card-text text-decoration-none h5 pe-auto" href="/news/semangat-belajarmu-menurun-ini-solusinya">Semangat Belajarmu Menurun? Ini Solusinya! </a>
                            <h6 class="card-subtitle mb-2 text-muted mt-1">24 Feb 2023 | Edukasi</h6>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis qui officiis dignissimos, sunt...</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </section>
@endsection
