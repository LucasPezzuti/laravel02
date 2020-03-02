
@extends('layout.base')
@section('contenido')

<h3>Actores</h3>
<ul>
    @forelse ($actores as $actor)
<li> <a href="{{route('actores.show',$actor)}}">{{ $actor->nombre }}</a> - ({{$actor->edad }})</li>
    @empty
        <p>Aca no cargaste nada</p>
    @endforelse


</ul>
@endsection
