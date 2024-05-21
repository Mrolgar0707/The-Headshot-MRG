@extends('layouts.plantilla')

@section('title', 'Inicio')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">¡Bienvenido a The Headshot!</h1>
    <p class="lead">Esta es una aplicación para la venta de productos gaming con envío a domicilio.</p>
    <hr class="my-4">
    <p>Comienza explorando nuestros productos y realiza tus pedidos de forma rápida y sencilla.</p>
    <a class="btn btn-primary btn-lg" href="{{ route('productos.index') }}" role="button">Ver productos</a>
</div>
@endsection
