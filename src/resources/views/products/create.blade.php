@extends('layouts.app')

@section('title', 'Crear producto')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <p class="text-muted mb-1">Inventario</p>
            <h1 class="h3 mb-0 fw-bold">Nuevo producto</h1>
        </div>
        <a href="{{ route('product.index') }}" class="btn btn-outline-secondary">Volver al listado</a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <h6 class="alert-heading mb-2">Revisa la información</h6>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('product.store') }}" method="POST" class="row g-3">
                @csrf

                <div class="col-12">
                    <label for="name" class="form-label fw-semibold">Nombre</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
                </div>

                <div class="col-12">
                    <label for="description" class="form-label fw-semibold">Descripción</label>
                    <textarea id="description" name="description" rows="3" class="form-control" required>{{ old('description') }}</textarea>
                </div>

                <div class="col-md-6">
                    <label for="price" class="form-label fw-semibold">Precio</label>
                    <div class="input-group">
                        <span class="input-group-text">€</span>
                        <input type="number" id="price" name="price" class="form-control" step="0.01" min="0"
                            value="{{ old('price') }}" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="stock" class="form-label fw-semibold">Stock</label>
                    <input type="number" id="stock" name="stock" class="form-control" min="0"
                        value="{{ old('stock', 0) }}" required>
                </div>

                <div class="col-12 d-flex justify-content-end gap-2 mt-3">
                    <a href="{{ route('product.index') }}" class="btn btn-outline-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar producto</button>
                </div>
            </form>
        </div>
    </div>
@endsection
