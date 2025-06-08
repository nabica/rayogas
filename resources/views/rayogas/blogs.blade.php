@extends('rayogas.layouts.master')
<link rel="stylesheet" href="{{ asset('css/rayogas/blogs.scss') }}">
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
        <h2 class="tittle-principal">Conexión Rayogas<br></h2>
        <p class="tittle-subtext">Conéctate con la energía que mueve hogares, negocios y regiones de todo el país.</p>
    </div>

    <section class="blog-list">
        <div class="parent-blog">
            @foreach ($blogs as $blog)
            <div class="card-blog">
                <img src="{{ asset('uploads/blog/' . $blog->id . '/' . $blog->card_image) }}" class="img-blog" alt="Img del blog">
                <div class="card-body">
                    <h4 class="card-title">{{ $blog->title }}</h4>
                    <a href="{{ route('rayogas.blog.show', $blog->id) }}" class="btn-see-more">Ver más</a>
                </div>
            </div>
            @endforeach

        </div>
        <div class="load-more-container">
            @if ($blogs->hasMorePages())
            <a href="{{ $blogs->nextPageUrl() }}" class="btn-load-more" id="loadMore">Ver más</a>
            @endif
        </div>
    </section>


    <div class="container footer-blog">
        <div class="logo">
            <img src="{{ asset('images/web/common/img_logo_flame_map.png') }}" class="img-fluid logo-blog"
                alt="logo flama rayogas">
        </div>
        <h2 class="tittle-footer">Conexión Rayogas<br></h2>
    </div>

    <!-- @component('rayogas.components.form-blog')
    @endcomponent -->
</body>
@endsection