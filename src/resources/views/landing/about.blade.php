@extends('landing.layouts.landing')

@section('title', 'Sobre nosotros')

@section('header')
    <div class="bg-light py-5 mb-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">

                    <h1 class="display-5 fw-bold mb-3">Sobre nosotros</h1>

                    <p class="lead mb-0">
                        Conoce la historia, los valores y el equipo de Última Llamada Viajes.
                    </p>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <p class="fs-5">
                    En <strong>Última Llamada Viajes</strong> somos una agencia apasionada por crear experiencias
                    únicas alrededor del mundo. Nuestro objetivo es ayudarte a descubrir nuevos destinos,
                    vivir aventuras inolvidables y disfrutar del viaje desde el primer momento.
                </p>

                <p class="fs-5">
                    Desde escapadas de fin de semana hasta grandes rutas internacionales, seleccionamos
                    cuidadosamente cada destino para ofrecerte comodidad, seguridad y el mejor precio.
                </p>

                <p class="fs-5">
                    Nuestro equipo está formado por profesionales del sector turístico con años de experiencia,
                    dedicados a asesorarte y convertir tus sueños de viaje en realidad ✈️.
                </p>

                <div class="text-center my-4">
                    <img
                        src="{{ asset('assets/images/equipo-viajes.jpg') }}"
                        alt="Nuestro equipo"
                        class="img-fluid rounded shadow-sm"
                        style="max-width: 600px;">
                </div>

                <div class="text-center mt-4">
                    <a href="{{ route('services') }}" class="btn btn-primary btn-lg">
                        Explorar destinos
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
