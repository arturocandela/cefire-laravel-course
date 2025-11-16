@props([
    'title',
    'image',        // Ruta de la imatge
    'price',        // Preu del viatge
    'days',         // Duració en dies
    'url',          // Enllaç d'interés
    'linkText' => 'Més informació',
])

<div class="card mb-4" style="width: 22rem;">
    <img src="{{ asset($image) }}" class="card-img-top" alt="{{ $title }}">

    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>

        <p class="card-text">
            <strong>Preu:</strong> {{ $price }}<br>
            <strong>Duració:</strong> {{ $days }} dies
        </p>

        <p class="card-text">
            {{ $slot }}
        </p>

        <a href="{{ $url }}" target="_blank" class="btn btn-primary">
            {{ $linkText }}
        </a>
    </div>
</div>

