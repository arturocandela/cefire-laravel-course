@extends('landing.layouts.landing')

@section('title', 'Inicio')

@section('header')
    <div class="bg-light py-5 mb-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold mb-3">
                        Última Llamada Viajes ✈️
                    </h1>
                    <p class="lead mb-0">
                        Tu agencia para descubrir el mundo sin esperar al próximo vuelo.
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
                    Bienvenido a <strong>Última Llamada Viajes</strong>, tu agencia para descubrir el mundo
                    sin esperar al próximo vuelo.
                </p>

                <p class="fs-5">
                    Explora nuestras ofertas, vive nuevas aventuras y recuerda...
                    <strong>¡siempre hay tiempo para la última llamada!</strong>
                </p>

                <div class="text-center my-4">
                    <img
                        src="{{ asset('assets/images/ultima-llamada-logo.png') }}"
                        alt="Última Llamada Viajes"
                        class="img-fluid mx-auto d-block"
                        style="max-width: 400px;">
                </div>

                <div class="text-center">
                    <a href="{{ route('services') }}" class="btn btn-primary btn-lg">
                        Ver ofertas destacadas
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
