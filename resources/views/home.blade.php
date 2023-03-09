@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <p>Hi, Welcome {{ ':)' }}</p>
@endsection

@section('js')
    <script>
        alert('Welcome :)')
    </script>
@endsection
