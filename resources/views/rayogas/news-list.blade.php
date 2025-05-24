@extends('rayogas.layouts.master')
@section('metatags_facebook')
<meta property="og:title" content="{{ config('app.name') }} | Blog - ¡Artículos que te interesan sobre el GLP!">
<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:description"
    content="Descubre datos interesantes sobre el GLP (Gas Licuado de Petróleo), como noticas, casos de éxito, avances, y más temas de este gas y su impacto en el país.">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ $blogBanner->image_url }}">
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

@component('rayogas.components.banner')
@slot('id')banner-blog @endslot
@isset($blogBanner->image)
@slot('image'){{ $blogBanner->image_url }} @endslot
@endisset
@slot('title'){{ $blogBanner->title }} @endslot
@slot('description'){{ $blogBanner->description }} @endslot
@endcomponent

<section class="blog-list">
    <div class="container">
        <div class="row">
            @foreach($blogPosts as $blogPost)
            <a href="{{$blogPost->link}}" class="col-lg-4 col-md-6 col-12 blog-list__item">
                <img src="{{ isset($blogPost->thumb_image) ? asset($blogPost->thumb_image_url) : asset('images/web/blog/img_blog_preview_1.png') }}"
                    alt="" class="w-100">
                <div class="blog-list__item-description">
                    <div class="blog-list__item-title">
                        <h3>{{ Str::limit($blogPost->title, 100, $end = '...') }}</h3>
                        <hr>
                    </div>
                    <p class="blog-list__item-text">{{ $blogPost->excerpt_description }}</p>
                </div>
            </a>
            @endforeach


        </div>
        <nav aria-label="Page navigation" class="blog-list__pagination">
            {{ $blogPosts->links() }}
        </nav>
    </div>
</section>

@endsection