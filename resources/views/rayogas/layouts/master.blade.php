<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light" data-size="medium">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('metatags_facebook')
    @yield('metatags_seo')
    <title>@yield('title')</title>

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="{{ mix('./css/rayogas/app.css') }}"> --}}
    <link rel="stylesheet" href="https://www.rayogas.com/rayogas-pruebas/public/css/rayogas/app.css">
</head>

<body>
    @include('rayogas.components.menu',['navbar'=>'true'])
    @yield('content')
    @include('rayogas.components.footer',['upButton'=> 'true'])
    {{-- <script src="{{ mix('./js/rayogas/app.js') }}"></script> --}}
    <link rel="stylesheet" href="https://www.rayogas.com/rayogas-pruebas/public/js/rayogas/app.js">
</body>

</html>
