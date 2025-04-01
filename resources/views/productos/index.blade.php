@extends('layouts.app')

@section('content')
    <h1>Lista de Productos</h1>
    <a href="{{ route('productos.create') }}">Crear Producto</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Acciones</th>
        </tr>
        @foreach ($productos as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->precio }}</td>
            <td>{{ $producto->stock }}</td>
            <td>
                <a href="{{ route('productos.edit', $producto) }}">Editar</a>
                <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
