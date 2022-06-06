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
            <a href="{{ route('rayogas.blog.show', $blogPost->slug) }}"
                class="col-lg-4 col-md-6 col-12 blog-list__item">
                <img src="{{ isset($blogPost->thumb_image) ? $blogPost->thumb_image_url : asset('images/web/blog/img_blog_preview_1.png') }}"
                    alt="" class="w-100">
                <div class="blog-list__item-description">
                    <div class="blog-list__item-title">
                        <h3>{{ $blogPost->title }}</h3>
                        <hr>
                    </div>
                    <p class="blog-list__item-text">{{ $blogPost->excerpt_description }}</p>
                </div>
            </a>
            @endforeach

            {{-- <a href="#" class="col-lg-4 col-md-6 col-12 blog-list__item">
                <img src="{{asset('images/web/blog/img_blog_preview_1.png')}}" alt="" class="w-100">
            <div class="blog-list__item-description">
                <div class="blog-list__item-title">
                    <h3>Ecopetrol subastará el 90% de GLP que produce en el país</h3>
                    <hr>
                </div>
                <p class="blog-list__item-text">El próximo viernes Ecopetrol asignará, para los siguientes seis
                    meses, la distribución nacional del volumen total de Gas Licuado de Propano (GLP), que produce
                    en las refinerías de Cartagena y Barrancabermeja, así como en los campos de Cusiana y Apiay, y
                    en la planta de Dina.</p>
            </div>
            </a>
            <a href="#" class="col-lg-4 col-md-6 col-12 blog-list__item">
                <img src="{{asset('images/web/blog/img_blog_preview_2.png')}}" alt="" class="w-100">
                <div class="blog-list__item-description">
                    <div class="blog-list__item-title">
                        <h3>Esfuerzo oficial no alcanzó para cubrir consumo de Gas Licuado de
                            Propano</h3>
                        <hr>
                    </div>
                    <p class="blog-list__item-text">Aunque la entrada en funcionamiento de Reficar y Termoyopal ayudó a
                        resolver la crisis por el desabastecimiento de Gas Licuado de Propano (GLP) en el país, aún
                        existen problemas para que la oferta pueda atender debidamente la creciente demanda de este
                        combustible.</p>
                </div>
            </a>
            <a href="#" class="col-lg-4 col-md-6 col-12 blog-list__item">
                <img src="{{asset('images/web/blog/img_blog_preview_3.png')}}" alt="" class="w-100">
                <div class="blog-list__item-description">
                    <div class="blog-list__item-title">
                        <h3>¿Por qué el GLP es una buena alternativa de combustible para el
                            país?</h3>
                        <hr>
                    </div>
                    <p class="blog-list__item-text">El GLP se ajusta a la realidad económica de los hogares tanto en
                        costo como en beneficio. Solo basta con ver en el mundo a los vehículos que utilizan gas propano
                        y que tienen un rendimiento mucho mayor con relación al número de kilómetros que recorren.</p>
                </div>
            </a>
            <a href="#" class="col-lg-4 col-md-6 col-12 blog-list__item">
                <img src="{{asset('images/web/blog/img_blog_preview_4.png')}}" alt="" class="w-100">
                <div class="blog-list__item-description">
                    <div class="blog-list__item-title">
                        <h3>El GLP es la clave en los procesos de generación</h3>
                        <hr>
                    </div>
                    <p class="blog-list__item-text">Desde enero del 2010 el sector del Gas Licuado de Petróleo (GLP),
                        más conocido como gas propano está en un proceso de formalización. Así mismo, durante los
                        últimos seis meses (enero-junio 2016) estuvo en un proceso de regulación para su actividad. </p>
                </div>
            </a>
            <a href="#" class="col-lg-4 col-md-6 col-12 blog-list__item">
                <img src="{{asset('images/web/blog/img_blog_preview_5.png')}}" alt="" class="w-100">
                <div class="blog-list__item-description">
                    <div class="blog-list__item-title">
                        <h3>Esfuerzo oficial no alcanzó para cubrir consumo de Gas Licuado de
                            Propano</h3>
                        <hr>
                    </div>
                    <p class="blog-list__item-text">Aunque la entrada en funcionamiento de Reficar y Termoyopal ayudó a
                        resolver la crisis por el desabastecimiento de Gas Licuado de Propano (GLP) en el país, aún
                        existen problemas para que la oferta pueda atender debidamente la creciente demanda de este
                        combustible.</p>
                </div>
            </a>
            <a href="#" class="col-lg-4 col-md-6 col-12 blog-list__item">
                <img src="{{asset('images/web/blog/img_blog_preview_6.png')}}" alt="" class="w-100">
                <div class="blog-list__item-description">
                    <div class="blog-list__item-title">
                        <h3>¿Por qué el GLP es una buena alternativa de combustible para el
                            país?</h3>
                        <hr>
                    </div>
                    <p class="blog-list__item-text">El GLP se ajusta a la realidad económica de los hogares tanto en
                        costo como en beneficio. Solo basta con ver en el mundo a los vehículos que utilizan gas propano
                        y que tienen un rendimiento mucho mayor con relación al número de kilómetros que recorren.</p>
                </div>
            </a> --}}
        </div>
        <nav aria-label="Page navigation" class="blog-list__pagination">
            {{ $blogPosts->links() }}
        </nav>
    </div>
</section>

@endsection