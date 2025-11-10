@props(['title'])
<div class="card">
    @isset($title)
        <h2>{{ $title }}</h2>
    @endisset
    <div>
        <p>{{ $slot }}</p>
    </div>
</div>
