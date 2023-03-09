@extends('adminlte::page')

@section('title', 'Profile')

@section('content_header')
    <h1>Profile</h1>
@endsection

@section('content')
    <ul>
        <li>Student ID  : {{ $id }}</li>
        <li>Name        : Argya Wicaksana</li>
        <li>Class       : TI-2E</li>
    </ul>
@endsection

@section('footer')
    <p class="text-center">
        2141720134 | <a class="text-body" href="https://github.com/argyaWicaksana">Argya Wicaksana</a>
    </p>
@endsection
