@extends('layouts.app')

@section('title', 'Detalle del producto')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-muted mb-1">Inventario</p>
            <h1 class="h3 mb-0 fw-bold">Detalle del producto</h1>
        </div>
        <a href="{{ route('product.index') }}" class="btn btn-outline-secondary">Volver al listado</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-12">
                    <p class="text-muted mb-1 fw-semibold">Nombre</p>
                    <p class="fs-5 mb-0">{{ $product->name }}</p>
                </div>

                <div class="col-12">
                    <p class="text-muted mb-1 fw-semibold">Descripción</p>
                    <p class="mb-0">{{ $product->description }}</p>
                </div>

                <div class="col-md-6">
                    <p class="text-muted mb-1 fw-semibold">Precio</p>
                    <p class="fs-5 mb-0">€{{ number_format($product->price, 2) }}</p>
                </div>

                <div class="col-md-6">
                    <p class="text-muted mb-1 fw-semibold">Stock</p>
                    <p class="fs-5 mb-0">{{ $product->stock }}</p>
                </div>
            </div>

            <div class="d-flex justify-content-end gap-2 mt-4">
                <a href="{{ route('product.edit', $product) }}" class="btn btn-outline-primary">Editar</a>
                <a href="{{ route('product.index') }}" class="btn btn-outline-secondary">Volver</a>
            </div>
        </div>
    </div>
@endsection
