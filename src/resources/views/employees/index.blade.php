<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Empleados</title>
</head>

<body>
    <h1  class="my-4 text-center fw-bold">Listado de Empleados</h1>
    @if ($employees->isEmpty())
    <p>No hay empleados que cumplan el criterio.</p>
    @else

    <table class="table table-striped table-hover table-bordered align-middle shadow-sm caption-top">
        <caption class="text-center fw-semibold">Listado de Empleados ({{ $employees->count() }})</caption>
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Apellidos</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Fecha de Contratación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->emp_id }}</td>
                <td>{{ $employee->emp_lastname }}</td>
                <td>{{ $employee->emp_firstname }}</td>
                <td>{{ \Carbon\Carbon::parse($employee->emp_birth_date)->age }}</td>
                <td>{{ $employee->emp_hire_date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @endif

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>