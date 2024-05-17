@extends('layouts.app')

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
    </table>
    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
