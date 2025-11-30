@extends('layouts.app')

@section('title', 'Productos')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 fw-bold">Listado de Productos</h1>
        <a href="{{ route('product.create') }}" class="btn btn-primary">Crear producto</a>
    </div>

    @if ($products->isEmpty())
        <div class="alert alert-info text-center mb-0">No hay productos disponibles.</div>
    @else 
        <div class="table-responsive shadow-sm bg-white rounded">
            <table class="table table-hover align-middle mb-0">
                <caption class="text-center fw-semibold">
                    Productos disponibles ({{ $products->count() }})
                </caption>
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th class="text-end">Precio</th>
                        <th class="text-end">Stock</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td class="text-end">${{ number_format($product->price, 2) }}</td>
                            <td class="text-end">{{ $product->stock }}</td>
                            <td class="text-center text-nowrap">
                                <a href="{{ route('product.edit', $product) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                <form action="{{ route('product.destroy', $product) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                        onclick="return confirm('¿Deseas eliminar este producto?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    @endif
@endsection
