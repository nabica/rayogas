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
<link rel="stylesheet" href="{{ asset('css/rayogas/blogs-detail.scss') }}">

<body class="body-blog">
    <div class="tittle-content">
        <h2 class="tittle-principal">Lorem commodo dui.<br>volutpat id lacus Ut</h2>
        <p class="tittle-subtext">Morbi ultrices quam Quisque vel vel orci quis ex luctus viverra turpis porta.</p>

    </div>
    <section class="blog-content">

        <div class="blog_detail">
            <div class="date">
                <p>fecha {{ $date }}</p>
            </div>
            <div class="blog_img">
                <img src="{{ $blog->card_image }}" class="img-fluid" alt="Img del blog">
            </div>
            <div class="blog_description">
                <p> {{ $blog->description }} </p>
            </div>

        </div>
    </section>

</body>
@endsection