@extends('layouts.app')

@section('content')
    <h1>Crear Producto</h1>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre">
        <label>Precio:</label>
        <input type="text" name="precio">
        <label>Stock:</label>
        <input type="text" name="stock">
        <button type="submit">Guardar</button>
    </form>
@endsection
