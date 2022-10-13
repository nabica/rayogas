@extends('rayogas.layouts.master')
@section('metatags_facebook')
<meta property="og:title" content="{{ config('app.name') }} | {{ $blogPost->title }}">
<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:description" content="{{ $blogPost->excerpt_description }}">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ $blogPost->image_url }}">
@endsection
@section('metatags_seo')
<meta name="title" content="{{ config('app.name') }} | {{ $blogPost->title }}">
<meta name="description" content="{{ $blogPost->excerpt_description }}">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="Spanish">
<meta name="revisit-after" content="30 days">
<meta name="author" content="{{ config('app.name') }}">
@endsection
@section('title', config('app.name') . ' | ' . $blogPost->title)
@section('content')

@component('rayogas.components.banner')
@slot('id')banner-blog @endslot
@isset($blogPost->image)
@slot('image'){{ $blogPost->image_url }} @endslot
@endisset
@slot('title'){{ $blogPost->title }} @endslot
@slot('description'){{ $blogPost->excerpt_description }} @endslot
@endcomponent

<section class="blog">
    <div class="container">
        <div class="blog__container">
            {{--  <div class="blog__image">
     
                 <img src="{{asset('images/web/placeholders/612X351.png')}}" alt="" class="img-fluid">
        </div> --}}
        <div class="blog__text">
            {!! $blogPost->description !!}
        </div>
    </div>

    </div>
</section>
@include('rayogas.components.blog-highlights')
@endsection