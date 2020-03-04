@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listando el pedido</div>
                <div class="card-body">
                    <h3>las pelis</h3>
                    @foreach ($peliculas as $item)
                    <h1>{{ $item }}</h1>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
