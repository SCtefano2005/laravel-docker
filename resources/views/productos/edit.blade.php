@extends('layouts.app')

@section('content')
    <h1>Editar Producto</h1>
    <form action="{{ route('productos.update', $producto) }}" method="POST">
        @csrf @method('PUT')
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $producto->nombre }}">
        <label>Precio:</label>
        <input type="text" name="precio" value="{{ $producto->precio }}">
        <label>Stock:</label>
        <input type="text" name="stock" value="{{ $producto->stock }}">
        <button type="submit">Actualizar</button>
    </form>
@endsection
