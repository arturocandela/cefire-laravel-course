@extends('landing.layouts.landing')

@section('title', 'Inicio')

@section('header')
    <h1>Última Llamada Viajes ✈️</h1>
@endsection

@section('content')
    <p>Bienvenido a <strong>Última Llamada Viajes</strong>, tu agencia para descubrir el mundo sin esperar al próximo vuelo.</p>

    <p>Explora nuestras ofertas, vive nuevas aventuras y recuerda... ¡siempre hay tiempo para la última llamada!</p>

    <div class="text-center my-4">
    <img src="{{ asset('assets/images/ultima-llamada-logo.png') }}" alt="Última Llamada Viajes" class="img-fluid" style="max-width: 400px;">
    </div>


@endsection
