@extends('layouts.app')

@section('title', 'Crear Pedido')

@section('content')
<div class="container">
    <h1>Crear Pedido</h1>
    <form action="{{ route('pedidos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="fecha_pedido">Fecha del Pedido</label>
            <input type="date" class="form-control" id="fecha_pedido" name="fecha_pedido" required>
        </div>
        <div class="form-group">
            <label for="fecha_envio">Fecha de Envío</label>
            <input type="date" class="form-control" id="fecha_envio" name="fecha_envio" required>
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input type="number" class="form-control" id="total" name="total" required>
        </div>
        <div class="form-group">
            <label for="usuario_id">Usuario</label>
            <input type="number" class="form-control" id="usuario_id" name="usuario_id" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
