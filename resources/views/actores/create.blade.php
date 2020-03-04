@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
            <div class="card-header navbar">
                Crear actor
                {{-- <ul class="nav  ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('actores.edit',$actor)}}">Editar Actor</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('actores.destroy',$actor) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-link" type="submit">Borrar Actor</a>
                    </form>
                </li>
                </ul> --}}
            </div>

            <div class="card-body">
                <p>Complete los datos para un nuevo actor</p>
                <form method="POST" action="{{ route('actores.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>

                        <div class="col-md-6">
                            <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                                value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                            @error('nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group row">
                        <label for="edad" class="col-md-4 col-form-label text-md-right">Edad</label>
                        <div class="col-md-6">
                            <input id="edad" type="number" class="form-control @error('edad') is-invalid @enderror" name="edad"
                                value="{{ old('edad') }}" required autocomplete="edad" autofocus>

                            @error('edad')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-md-4 col-form-label text-md-right">Foto</label>
                        <div class="col-md-6">
                            <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto"
                                value="{{ old('foto') }}" required autocomplete="foto" autofocus>

                            @error('foto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Crear Actor
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
