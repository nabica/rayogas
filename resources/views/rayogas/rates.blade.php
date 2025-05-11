@extends('rayogas.layouts.master')
<link rel="stylesheet" href="{{ asset('css/rayogas/rates/grid.scss') }}">
@section('metatags_facebook')
    <meta property="og:title" content="Rayogas | Infórmate sobre nuestras tarifas">
    <meta property="og:site_name" content="{{ config('app.name') }}">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:description"
        content="Encuentra el servicio que necesitas e infórmate sobre las tarifas para clientes residenciales, comerciales e industriales a nivel nacional">
    <meta property="og:type" content="website">
    <meta property="og:image" content="">
@endsection
@section('metatags_seo')
    <meta name="title" content="Rayogas | Infórmate sobre nuestras tarifas">
    <meta name="description"
        content="Encuentra el servicio que necesitas e infórmate sobre las tarifas para clientes residenciales, comerciales e industriales a nivel nacional">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Spanish">
    <meta name="revisit-after" content="30 days">
    <meta name="author" content="{{ config('app.name') }}">
@endsection
@section('title', config('app.name') . ' | Infórmate sobre nuestras tarifas')
@section('content')
    <!-- Styles -->
    @component('rayogas.components.heading-title')
        @slot('title')
            Tarifas Rayogas
        @endslot
        @slot('description')
            En Rayogas, reafirmamos nuestro compromiso con la transparencia y el acceso a la información. Podrás encontrar las
            tarifas vigentes para nuestros servicios de Gas Licuado de Petróleo (GLP), tanto en cilindros como a granel.
        @endslot
    @endcomponent


    <section class="section container-rates">
        @if(count($groupedRates) > 0)
            <div class="rates-grid-container">
                @foreach ($groupedRates as $month => $rates)
                    <div class="rates-container">
                        <h3 class="rates-title">Tarifas {{ $month }}</h3>
                        <div class="rate-list">
                            @foreach ($rates as $rate)
                                @if($rate['has_file'])
                                    <a href="{{ asset('uploads/home/rates/' . $rate['id'] . '/' . $rate['file_name']) }}"
                                       class="rate-item {{ str_replace(' ', '_', strtolower($rate['zone_name'])) }}"
                                       target="_blank">
                                        <p class="zone-name">
                                            {{ $rate['zone_name'] }}
                                        </p>
                                        <div class="download-link">
                                            <img src="{{ asset('images/web/common/icn_download.png') }}"
                                                class="img-fluid logo-download" alt="logo download">
                                        </div>
                                    </a>
                                @else
                                    <div class="rate-item {{ str_replace(' ', '_', strtolower($rate['zone_name'])) }} disabled">
                                        <p class="zone-name">
                                            {{ $rate['zone_name'] }}
                                        </p>
                                        <div class="download-link">
                                            <img src="{{ asset('images/web/common/icn_download.png') }}"
                                                class="img-fluid logo-download" alt="logo download">
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="no-rates-message">
                <p>No hay tarifas disponibles en este momento. Por favor, vuelve a consultar más tarde.</p>
            </div>
        @endif
    </section>
@endsection
