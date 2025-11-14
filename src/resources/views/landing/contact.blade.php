@extends('landing.layouts.landing')

@section('title', 'Contacto')
@section('header')
    <h1>Contacto</h1>
@endsection

@section('content')

    <p class="mb-4">
        Si necessites posar-te en contacte amb nosaltres, ací tens tota la informació necessària.
        Estarem encantats d’atendre’t.
    </p>

    <!-- Mapa -->
    <div class="text-center my-4">
        <img
            src="{{ asset('assets/images/map.png') }}"
            alt="Ubicación CIPFP Batoi"
            class="img-fluid rounded shadow"
            style="max-width: 600px;">
    </div>

    <!-- Datos de contacto -->
    <div class="card shadow-sm">
        <div class="card-body">

            <h5 class="card-title mb-3">Datos de contacto</h5>

            <p class="mb-2">
                <strong>Teléfono:</strong>
                <a href="tel:+34966524340">966 524 340</a>
            </p>

            <p class="mb-2">
                <strong>Email:</strong>
                <a href="mailto:03012165@edu.gva.es">03012165@edu.gva.es</a>
            </p>

            <p class="mb-2">
                <strong>Dirección:</strong><br>
                Avinguda Cervantes, 6<br>
                03804 Alcoi (Alacant), España
            </p>

        </div>
    </div>

@endsection

