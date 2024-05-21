@extends('layouts.plantilla')

@section('title', 'Editar Detalle de Pedido')

@section('content')
<div class="container">
    <h1>Editar Detalle de Pedido</h1>
    <form action="{{ route('detalles_pedido.update', $detalle_pedido->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ $detalle_pedido->cantidad }}" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio" value="{{ $detalle_pedido->precio }}" required>
        </div>
        <div class="form-group">
            <label for="producto_id">ID Producto</label>
            <input type="number" class="form-control" id="producto_id" name="producto_id" value="{{ $detalle_pedido->producto_id }}" required>
        </div>
        <div class="form-group">
            <label for="pedido_id">ID Pedido</label>
            <input type="number" class="form-control" id="pedido_id" name="pedido_id" value="{{ $detalle_pedido->pedido_id }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
