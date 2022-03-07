<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('metatags_facebook')
        @yield('metatags_seo')
        <title>@yield('title')</title>

        <!-- Styles -->
        {{-- <link rel="shortcut icon" href="assets/images/favicon.ico"> --}}
        <link href="{{ mix('css/admin/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>

        @include('admin.components.menu')

        <div class="container section">
            @yield('content')
        </div>

        <!-- Scripts -->
        <script src="{{ mix('js/admin/app.js') }}" defer></script>
    </body>
</html>
