@extends('template.app')

@section('css')
    <link rel="stylesheet" href="/css/program.css">
@endsection

@section('main')
    <section class="w-100 p-5 banner-page">
        <h1 class="text-center text-white">Magang</h1>
    </section>
    <section class="container p-5">
        <div class="row row-cols-md-4 gy-4">
            @for ($i = 0; $i < 10; $i++)
                <div class="col-md">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/program/105455705_20210105_095155.png" class="card-img-top" alt="image card">
                        <div class="card-body">
                            <p class="card-text">Bisnis dan Manajemen</p>
                            <button class="btn btn-warning w-100 text-white py-1 fw-bold">Daftar magang</button>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </section>
@endsection