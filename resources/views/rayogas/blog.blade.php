@extends('rayogas.layouts.master')
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
       {{--  <div class="blog__image">

            <img src="{{asset('images/web/placeholders/612X351.png')}}" alt="" class="img-fluid">
        </div> --}}
        <div class="blog__text">
            {!! $blogPost->description !!}
        </div>

    </div>
</section>
@include('rayogas.components.blog-highlights')
@endsection
