@extends('rayogas.layouts.master')
<link rel="stylesheet" href="{{ asset('css/rayogas/rates.css') }}">
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
@slot('title')Tarifas Rayogas @endslot
@slot('description')En Rayogas, reafirmamos nuestro compromiso con la transparencia y el acceso a la información. Podrás encontrar las tarifas vigentes para nuestros servicios de Gas Licuado de Petróleo (GLP), tanto en cilindros como a granel. @endslot
@endcomponent


<section class="section rates">

    <div class="container container-rates">
        @foreach ($groupedRates as $month => $rates)
        <div class="month-section">
            <h3 class="month-title">Tarifas {{ $month }}</h3>
            <div class="rates-list">
                @foreach ($rates as $rate)
                <div class="rate-item {{ str_replace(' ', '_', strtolower($rate['zone_name'])) }}">
                    <p class="zone-name">
                        {{ $rate['zone_name'] }}
                    </p>
                    <a href="{{ asset('uploads/home/rates/' . $rate['file_name']) }}" class="download-link" target="_blank">
                        <img src="{{ asset('images/web/common/icn_download.png') }}" class="img-fluid logo-download"
                            alt="logo download">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection