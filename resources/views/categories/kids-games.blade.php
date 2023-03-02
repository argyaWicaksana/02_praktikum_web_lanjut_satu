@extends('template.app')

@section('css')
    <link rel="stylesheet" href="/css/edu-games.css">
@endsection

@section('main')
    <section class="w-100 p-5 banner-page">
        <h1 class="text-center text-white">Marbel & Friends - Kids Games</h1>
    </section>
    <section class="container p-5">
        <div class="row row-cols-md-4 gy-4">
            @for ($i = 0; $i < 10; $i++)
                <div class="col-md">
                    <div class="card">
                        <img src="/images/4_20201228_094944.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Marbel Peternakan</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </section>
@endsection
