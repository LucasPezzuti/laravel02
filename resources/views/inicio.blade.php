@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listando el pedido</div>

                <div class="card-body">
                <h2>Hola {{ $nombre }}</h2>
                <p>Este es tu pedido:</p>
                <ul>
                    @foreach ($array as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
