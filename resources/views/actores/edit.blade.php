@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
            <div class="card-header navbar">
                Edita actor {{ $actor->name }}
            </div>

            <div class="card-body">
                <p>Edite los campos necesarios</p>
                <form method="POST" action="{{ route('actores.update',$actor) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>

                        <div class="col-md-6">
                            <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                                value="{{ old('nombre', $actor->nombre) }}" required autocomplete="nombre" autofocus>

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
                                value="{{ old('edad', $actor->edad) }}" required autocomplete="edad" autofocus>

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
                                value="{{ old('foto') }}"  autocomplete="foto" autofocus>

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
