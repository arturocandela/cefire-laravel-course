<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

        <a class="navbar-brand" href="{{ route('home') }}">
            Última Llamada Viajes
        </a>

        <!-- Botón hamburguesa -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
            aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Items del menú -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Sobre nosotros</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('services') }}">Servicios</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
                </li>

            </ul>
        </div>

    </div>
</nav>
