@extends('layouts.app')

@section('title', 'Detalles del Detalle del Pedido')

@section('content')
<div class="container">
    <h1>Detalles del Detalle del Pedido</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $detalle_pedido->id }}</td>
        </tr>
        <tr>
            <th>Cantidad</th>
            <td>{{ $detalle_pedido->cantidad }}</td>
        </tr>
        <tr>
            <th>Precio</th>
            <td>{{ $detalle_pedido->precio }}</td>
        </tr>
        <tr>
            <th>ID Producto</th>
            <td>{{ $detalle_pedido->producto->descripcion }}</td>
        </tr>
        <tr>
            <th>ID Pedido</th>
            <td>{{ $detalle_pedido->pedido->id }}</td>
        </tr>
    </table>
    <a href="{{ route('detalles_pedido.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
