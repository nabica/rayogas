@extends('rayogas.layouts.master')
<link rel="stylesheet" href="{{ asset('css/rayogas/blogs.css') }}">
@section('metatags_facebook')
<meta property="og:title" content="{{ config('app.name') }} | Blog - ¡Artículos que te interesan sobre el GLP!">
<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:description"
    content="Descubre datos interesantes sobre el GLP (Gas Licuado de Petróleo), como noticas, casos de éxito, avances, y más temas de este gas y su impacto en el país.">
<meta property="og:type" content="website">
@endsection
@section('metatags_seo')
<meta name="title" content="{{ config('app.name') }} | Blog - ¡Artículos que te interesan sobre el GLP!">
<meta name="description"
    content="Descubre datos interesantes sobre el GLP (Gas Licuado de Petróleo), como noticas, casos de éxito, avances, y más temas de este gas y su impacto en el país.">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="Spanish">
<meta name="revisit-after" content="30 days">
<meta name="author" content="{{ config('app.name') }}">
@endsection
@section('title', config('app.name') . ' | Blog - ¡Artículos que te interesan sobre el GLP!')
@section('content')
<link rel="stylesheet" href="{{ asset('css/rayogas/blogs.scss') }}">

<body class="body-blog">
    <div class="tittle-content">
        <h2 class="tittle-principal">Lorem commodo dui.<br>volutpat id lacus Ut</h2>
        <p class="tittle-subtext">Morbi ultrices quam Quisque vel vel orci quis ex luctus viverra turpis porta.</p>
    </div>

    <section class="blog-list">
        <div class="parent-blog">
            @foreach ($blogs as $blog)
            <div class="card-blog">
                <img src="{{ $blog->card_image }}" class="img-blog" alt="Img del blog">
                <div class="card-body">
                    <h4 class="card-title">{{ $blog->title }}</h4>
                    <a href="" class="btn-see-more">Ver más</a>
                </div>
            </div>
            @endforeach

        </div>
        <div class="load-more-container">
            <button id="loadMore" class="btn-load-more">Ver más</button>
        </div>
    </section>


    <div class="container footer-blog">
        <div class="logo">
            <img src="{{ asset('images/web/common/img_logo_flame_map.png') }}" class="img-fluid logo-blog"
                alt="logo flama rayogas">
        </div>
        <h2 class="tittle-footer">Lorem commodo dui.<br>volutpat id lacus Ut</h2>
    </div>

     @component('rayogas.components.form-blog')
        <!-- @slot('title')
            Contáctanos
        @endslot
        @slot('description')
            Si tienes alguna pregunta o inquietud, no dudes en ponerte en contacto con nosotros. Estamos aquí para ayudarte.
        @endslot
        @slot('buttonText')
            Enviar
        @endslot -->
       
    @endcomponent
</body>
@endsection