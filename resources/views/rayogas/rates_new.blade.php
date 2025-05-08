@extends('rayogas.layouts.master')
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


<section class="section rates">
    <div class="container">

        @component('rayogas.components.heading-title')
        @slot('title')Encuentra la información de las tarifas de los últimos meses.@endslot
        @slot('description')Encuentra nuestro servicio en las principales ciudades del país. @endslot
        @endcomponent


 
    </div>
</section>
@endsection