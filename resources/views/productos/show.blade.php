@extends('layouts.plantilla')

@section('title', 'Detalles del Producto')

@section('content')
<div class="container">
    <h1>Detalles del Producto</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $producto->id }}</td>
        </tr>
        <tr>
            <th>Descripción</th>
            <td>{{ $producto->descripcion }}</td>
        </tr>
        <tr>
            <th>Precio</th>
            <td>{{ $producto->pvp }}</td>
        </tr>
        <tr>
            <th>Stock</th>
            <td>{{ $producto->stock }}</td>
        </tr>
        <tr>
            <th>Imagen</th>
            <td>
                <img src="{{ asset('img/' . $producto->imagen) }}" alt="{{ $producto->descripcion }}" width="300">
            </td>
        </tr>
    </table>
    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
