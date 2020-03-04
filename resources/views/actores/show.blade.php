

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Actor elegido</div>

                <div class="card-body">
                    <h1>El mejor actor es {{ $actor->nombre }}</h1>
                    <a href="{{ route('actores.index')}}">todos los actores</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
