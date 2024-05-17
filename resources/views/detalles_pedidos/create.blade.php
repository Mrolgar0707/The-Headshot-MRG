@extends('layouts.app')

@section('title', 'Crear Detalle de Pedido')

@section('content')
<div class="container">
    <h1>Crear Detalle de Pedido</h1>
    <form action="{{ route('detalles_pedido.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio" required>
        </div>
        <div class="form-group">
            <label for="producto_id">ID Producto</label>
            <input type="number" class="form-control" id="producto_id" name="producto_id" required>
        </div>
        <div class="form-group">
            <label for="pedido_id">ID Pedido</label>
            <input type="number" class="form-control" id="pedido_id" name="pedido_id" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
