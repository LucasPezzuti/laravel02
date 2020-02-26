
@extends('layout.base')
@section('css','otro_estilo.css')
@section('contenido')
<h3>las pelis</h3>
@foreach ($peliculas as $item)
<h1>{{ $item }}</h1>
@endforeach


@include('parciales.pie')
@endsection

@section('lateral')
<ul>
    <li>asdas</li>
    <li>asd</li>
    <li>asdad</li>
</ul>
@endsection

@push('css')
<link rel="stylesheet" href="otro_estilo.css">
@endpush
