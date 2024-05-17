@extends('layouts.app')

@section('title', 'Editar Pedido')

@section('content')
<div class="container">
    <h1>Editar Pedido</h1>
    <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="fecha_pedido">Fecha del Pedido</label>
            <input type="date" class="form-control" id="fecha_pedido" name="fecha_pedido" value="{{ $pedido->fecha_pedido }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_envio">Fecha de Envío</label>
            <input type="date" class="form-control" id="fecha_envio" name="fecha_envio" value="{{ $pedido->fecha_envio }}" required>
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input type="number" class="form-control" id="total" name="total" value="{{ $pedido->total }}" required>
        </div>
        <div class="form-group">
            <label for="usuario_id">Usuario</label>
            <input type="number" class="form-control" id="usuario_id" name="usuario_id" value="{{ $pedido->usuario_id }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
