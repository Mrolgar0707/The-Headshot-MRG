@extends('layouts.plantilla')

@section('title', 'Detalles del Pedido')

@section('content')
<div class="container">
    <h1>Detalles del Pedido</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $pedido->id }}</td>
        </tr>
        <tr>
            <th>Fecha del Pedido</th>
            <td>{{ $pedido->fecha_pedido }}</td>
        </tr>
        <tr>
            <th>Fecha de Envío</th>
            <td>{{ $pedido->fecha_envio }}</td>
        </tr>
        <tr>
            <th>Total</th>
            <td>{{ $pedido->total }}</td>
        </tr>
        <tr>
            <th>Usuario</th>
            <td>{{ $pedido->usuario->nombre }}</td>
        </tr>
    </table>
    <a href="{{ route('pedidos.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
