@extends('layouts.plantilla')

@section('title', 'Editar Producto')

@section('content')
<div class="container">
    <h1>Editar Producto</h1>
    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ $producto->descripcion }}" required>
        </div>
        <div class="form-group">
            <label for="pvp">Precio</label>
            <input type="number" class="form-control" id="pvp" name="pvp" value="{{ $producto->pvp }}" required>
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ $producto->stock }}" required>
        </div>
        <div class="form-group">
            <label for="imagen">Imagen</label>
            <input type="file" class="form-control-file" id="imagen" name="imagen">
            @if ($producto->imagen)
                <div class="mt-2">
                    <img src="{{ asset('storage/' . $producto->imagen) }}" alt="Imagen del producto" width="150">
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
