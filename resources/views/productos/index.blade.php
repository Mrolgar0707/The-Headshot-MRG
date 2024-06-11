@extends('layouts.plantilla')

@section('title', 'Productos')

@section('content')
<div class="container">
    <h1>Productos</h1>
    <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Crear Producto</a>
    <!-- Aquí va el listado de productos -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>PVP</th>
                <th>Stock</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->pvp }}</td>
                    <td>{{ $producto->stock }}</td>
                    <td>
                        <img src="{{ asset('img/' . $producto->imagen) }}" alt="{{ $producto->descripcion }}" width="100">

                    </td>
                    <td>
                        <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                        <a href="{{ route('productos.comprar', $producto->id) }}" class="btn btn-primary">Comprar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
