@extends('landing.layouts.landing')
@section('title', 'Servicios')

@section('header')
    <h1>Servicios</h1>
@endsection

@section('content')

<div class="container py-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">

    <x-card title="Japó: Tokio, Hakone i Hiroshima" image="assets/images/hakone.jpg" price="1.899 €" days="10"
        url="https://www.japan.travel/es/es/" linkText="Informació turística de Japó">
        Ruta completa per Japó: Tokio modern, banys termals *onsen* a Hakone i un viatge a Hiroshima amb tren bala
        Shinkansen.
    </x-card>


    <x-card title="Nova York: Ruta Friends" image="assets/images/newyork.jpg" price="1.450 €" days="7"
        url="https://www.friends-experience.com/" linkText="The Friends Experience">
        Visita el famós Central Perk, localitzacions de la sèrie i gaudeix d'un recorregut complet per Manhattan.
    </x-card>

    <x-card title="Argentina: Buenos Aires" image="assets/images/buenosaires.jpg" price="1.200 €" days="8"
        url="https://turismo.buenosaires.gob.ar/es" linkText="Turisme Buenos Aires">
        Descobreix la ciutat del tango, la gastronomia i l'arquitectura històrica d'una de les capitals més vibrants del
        món.
    </x-card>

    <x-card title="Holanda: Amsterdam" image="assets/images/amsterdam.jpg" price="999 €" days="5"
        url="https://www.iamsterdam.com/en" linkText="Guia oficial d'Amsterdam">
        Canals, bicicletes, museus i un ambient relaxat fan d’Amsterdam la capital europea del bon rotllo.
    </x-card>

    </div>
</div>

@endsection
