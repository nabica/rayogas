<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Rayogas</title>

        <!-- Styles -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="{{ mix('css/admin/app.css') }}" rel="stylesheet" type="text/css" />
    </head>

    @yield('content')
</html>
