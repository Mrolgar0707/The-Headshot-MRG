@extends('layouts.plantilla')

@section('title', 'Detalles del Usuario')

@section('content')
<div class="container">
    <h1>Detalles del Usuario</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $usuario->id }}</td>
        </tr>
        <tr>
            <th>Usuario</th>
            <td>{{ $usuario->usuario }}</td>
        </tr>
        <tr>
            <th>Nombre</th>
            <td>{{ $usuario->nombre }}</td>
        </tr>
        <tr>
            <th>Apellidos</th>
            <td>{{ $usuario->apellidos }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $usuario->email }}</td>
        </tr>
        <tr>
            <th>Calle</th>
            <td>{{ $usuario->calle }}</td>
        </tr>
        <tr>
            <th>Código Postal</th>
            <td>{{ $usuario->codigo_postal }}</td>
        </tr>
        <tr>
            <th>Número de Calle</th>
            <td>{{ $usuario->numero_calle }}</td>
        </tr>
    </table>
    <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
