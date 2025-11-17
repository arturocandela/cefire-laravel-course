@extends('landing.layouts.landing')
@section('title', 'Servicios')

@section('header')
    <h1>Servicios</h1>
@endsection

@section('content')

<div class="container py-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">

    <x-card title="Japón: Tokio, Hakone y Hiroshima" image="assets/images/hakone.jpg" price="1.899 €" days="10"
        url="https://www.japan.travel/es/es/" linkText="Información turística de Japón">
        Ruta completa por Japón: el Tokio moderno, baños termales *onsen* en Hakone y un viaje a Hiroshima en el tren bala Shinkansen.
    </x-card>

    <x-card title="Nueva York: Ruta Friends" image="assets/images/newyork.jpg" price="1.450 €" days="7"
        url="https://www.friends-experience.com/" linkText="The Friends Experience">
        Visita el famoso Central Perk, localizaciones de la serie y disfruta de un recorrido completo por Manhattan.
    </x-card>

    <x-card title="Argentina: Buenos Aires" image="assets/images/buenosaires.jpg" price="1.200 €" days="8"
        url="https://turismo.buenosaires.gob.ar/es" linkText="Turismo Buenos Aires">
        Descubre la ciudad del tango, la gastronomía y la arquitectura histórica de una de las capitales más vibrantes del mundo.
    </x-card>

    <x-card title="Holanda: Ámsterdam" image="assets/images/amsterdam.jpg" price="999 €" days="5"
        url="https://www.iamsterdam.com/en" linkText="Guía oficial de Ámsterdam">
        Canales, bicicletas, museos y un ambiente relajado hacen de Ámsterdam la capital europea del buen rollo.
    </x-card>

    </div>
</div>

@endsection
