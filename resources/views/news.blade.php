@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Hello</h1>
        <p>this is News page</p>
        <p>Keyword: {{ $data }}</p>
    </div>
</div>
@endsection