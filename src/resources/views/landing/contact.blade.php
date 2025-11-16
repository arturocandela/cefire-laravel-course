@extends('landing.layouts.landing')

@section('title', 'Contacto')

@section('header')
    <div class="bg-light py-5 mb-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">

                    <h1 class="display-5 fw-bold mb-3">Contacto</h1>

                    <p class="lead mb-0">
                        Si necessites posar-te en contacte amb nosaltres, ací tens tota la informació necessària.
                        Estarem encantats d’atendre’t.
                    </p>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container pb-5">
        <div class="row g-4">

            {{-- Mapa --}}
            <div class="col-12 col-lg-6">
                <div class="text-center">
                    <img
                        src="{{ asset('assets/images/map.png') }}"
                        alt="Ubicació CIPFP Batoi"
                        class="img-fluid rounded shadow-sm"
                    >
                </div>
            </div>

            {{-- Dades de contacte --}}
            <div class="col-12 col-lg-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">

                        <h5 class="card-title mb-3">Dades de contacte</h5>

                        <p class="mb-2">
                            <strong>Telèfon:</strong>
                            <a href="tel:+34966524340">966 524 340</a>
                        </p>

                        <p class="mb-2">
                            <strong>Email:</strong>
                            <a href="mailto:03012165@edu.gva.es">03012165@edu.gva.es</a>
                        </p>

                        <p class="mb-2">
                            <strong>Adreça:</strong><br>
                            Avinguda Cervantes, 6<br>
                            03804 Alcoi (Alacant), Espanya
                        </p>

                        <hr>

                        <p class="small text-muted mb-0">
                            CIPFP Batoi · Cicles formatius d'Informàtica i altres famílies professionals.
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
