@extends('template.app')

@section('css')
    <link rel="stylesheet" href="/css/program.css">
@endsection

@section('main')
    <section class="w-100 p-5 banner-page">
        <h1 class="text-center text-white">Karir</h1>
    </section>
    <section class="container p-5">
        <div class="row row-cols-md-4 gy-4">
            @for ($i = 0; $i < 10; $i++)
                <div class="col-md">
                    <div class="card">
                        <img src="https://www.educastudio.com/uploads/program/1209476234_20230301_173448.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Jr Business Development GAMELAB.ID </p>
                            <button class="btn btn-warning w-100 text-white py-1 fw-bold">Lamar pekerjaan</button>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </section>
@endsection
