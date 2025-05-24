@extends('rayogas.layouts.master')
<link rel="stylesheet" href="{{ asset('css/rayogas/blogs-detail.scss') }}">
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

<section class="section blog-content">
    <h2 class="tittle-principal">Lorem commodo dui.<br>volutpat id lacus Ut</h2>

    <div class="blog_detail">
        <h6 class="blog_date">
            <img src="{{ asset('images/web/blog/icn_calendar.png') }}" class="icn-calendar" alt="logo calendar">
            {{ $date }}
        </h6>

        <img src="{{ asset('uploads/blog/' . $blog->id . '/' . $blog->card_image) }}" class="img_blog" alt="Img del blog">

        <p class="blog_description"> {{ $blog->description }} </p>
    </div>
</section>
<section class="section blog-cards-grid">
    <div class="parent_next_blog">
        @foreach ($next_blogs as $next_blog)
        <div class="next_blog">
            <img class="img_next" src="{{ asset('uploads/blog/' . $next_blog->id . '/' . $next_blog->card_image) }}" alt="Img card blog">
            <h3 class="title_next">{{ $next_blog->title }}</h3>
            <a href="" class="btn">Ver más</a>
        </div>
        @endforeach
    </div>
</section>


@endsection