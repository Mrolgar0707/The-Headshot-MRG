@extends('layouts.plantilla')

@section('title', 'Registro')

@section('content')
<div class="container">
    <h1>Registro</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label for="usuario">Usuario</label>
            <input id="usuario" type="text" class="form-control @error('usuario') is-invalid @enderror" name="usuario" value="{{ old('usuario') }}" required autofocus>
            @error('usuario')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="contraseña">Contraseña</label>
            <input id="contraseña" type="password" class="form-control @error('contraseña') is-invalid @enderror" name="contraseña" required>
            @error('contraseña')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password-confirm">Confirmar Contraseña</label>
            <input id="password-confirm" type="password" class="form-control" name="contraseña_confirmation" required>
        </div>

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required>
            @error('nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ old('apellidos') }}">
            @error('apellidos')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="calle">Calle</label>
            <input id="calle" type="text" class="form-control @error('calle') is-invalid @enderror" name="calle" value="{{ old('calle') }}">
            @error('calle')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="codigo_postal">Código Postal</label>
            <input id="codigo_postal" type="text" class="form-control @error('codigo_postal') is-invalid @enderror" name="codigo_postal" value="{{ old('codigo_postal') }}">
            @error('codigo_postal')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="numero_calle">Número de Calle</label>
            <input id="numero_calle" type="text" class="form-control @error('numero_calle') is-invalid @enderror" name="numero_calle" value="{{ old('numero_calle') }}">
            @error('numero_calle')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
</div>
@endsection
