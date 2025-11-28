<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleados</title>
</head>

<body>
    <h1>Listado de Empleados</h1>
    @if ($employees->isEmpty())
    <p>No hay empleados disponibles.</p>
    @else

    <table>
        <thead>
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


</body>

</html>