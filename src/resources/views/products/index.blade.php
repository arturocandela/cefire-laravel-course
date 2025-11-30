<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Productos</title>
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3 mb-0 fw-bold">Listado de Productos</h1>
            <a href="{{ route('product.create') }}" class="btn btn-primary">Crear producto</a>
        </div>

        @forelse ($products as $product)
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
                                    <a href="{{ route('product.edit', $product) }}"
                                        class="btn btn-sm btn-outline-secondary">Editar</a>
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
        @empty
            <div class="alert alert-info text-center mb-0">No hay productos disponibles.</div>
        @endforelse
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
