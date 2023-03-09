@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <p>Hi, Welcome {{ ':)' }}</p>
@endsection

@section('footer')
    <p class="text-center">
        2141720134 | <a class="text-body" href="https://github.com/argyaWicaksana">Argya Wicaksana</a>
    </p>
@endsection

@section('js')
    <script>
        alert('Welcome :)')
    </script>
@endsection
