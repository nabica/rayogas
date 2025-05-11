<link rel="stylesheet" href="{{ asset('css/rayogas/rates/title.css') }}">
<div class="heading-title-rates">
    <div class="title-rates-container">
        <h1 class="title-header-rates">{{ $title }}</h1>
        @isset($description)
        <p class="description-header-rates">{!! $description !!}</p>
        @endisset
    </div>
</div>
