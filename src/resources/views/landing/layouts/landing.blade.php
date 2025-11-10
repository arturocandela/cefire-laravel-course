<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>
        @yield('title')
    </title>
</head>
<body>
    <header>
        @include('_partials.nav')
        @yield('header')
    </header>

    <main>
        @yield('content')
    </main>

    @include('_partials.footer')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</body>
</html>
