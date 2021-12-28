<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light" data-size="medium">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('metatags_facebook')
        @yield('metatags_seo')
        <title>@yield('title')</title>

        <!-- Fonts -->


        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body >
        @include('rayogas.components.menu')
        @yield('content')
    </body>
</html>
