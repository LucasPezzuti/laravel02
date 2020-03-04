@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de actores</div>

                <div class="card-body">
                    <h3>Actores</h3>
                    <ul>
                        @forelse ($actores as $actor)
                        <li> <a href="{{route('actores.show',$actor)}}">{{ $actor->nombre }}</a> - ({{$actor->edad }})</li>
                        @empty
                        <p>Aca no cargaste nada</p>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
