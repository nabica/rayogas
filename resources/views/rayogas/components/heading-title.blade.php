<link rel="stylesheet" href="{{ asset('css/rayogas/rates/title.css') }}">
<div class="heading-title-rates">
    <div class="title-rates-container">
        <h1 class="title-header-rates">{{ $title }}</h1>
        @isset($description)
        <p class="description-header-rates">{!! $description !!}</p>
        @endisset
        @isset($action_title)
        <div class="button-action-header-rates">
            <a href="{{ $action_url ?? asset('pdfs/politica-integral.pdf') }}" target="blank">{{ $action_title }}</a>
        </div>
        @endisset
    </div>
</div>