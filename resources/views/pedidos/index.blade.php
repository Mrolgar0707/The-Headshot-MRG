@extends('layouts.plantilla')

@section('title', 'Lista de Pedidos')

@section('content')
<div class="container">
    <h1 class="my-4">Lista de Pedidos</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha del Pedido</th>
                <th>Fecha del Envío</th>
                <th>Total</th>
                <th>Usuario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->id }}</td>
                <td>{{ $pedido->fecha_pedido }}</td>
                <td>{{ $pedido->fecha_envio }}</td>
                <td>{{ $pedido->total }}</td>
                <td>{{ $pedido->usuario->nombre }}</td>
                <td>
                    <a href="{{ route('pedidos.show', $pedido->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este pedido?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
