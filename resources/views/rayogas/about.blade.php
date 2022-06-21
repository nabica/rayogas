@extends('rayogas.layouts.master')
@section('metatags_facebook')
<meta property="og:title" content="{{ config('app.name') }} | Conoce más acerca de nosotros y nuestros servicios">
<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:description"
    content="Somos una empresa 100% colombiana con presencia en las principales zonas del país, que cuenta con un equipo altamente capacitado para apoyarte.">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ $aboutBanner->image_url }}">
@endsection
@section('metatags_seo')
<meta name="title" content="{{ config('app.name') }} | Conoce más acerca de nosotros y nuestros servicios">
<meta name="description"
    content="Somos una empresa 100% colombiana con presencia en las principales zonas del país, que cuenta con un equipo altamente capacitado para apoyarte.">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="Spanish">
<meta name="revisit-after" content="30 days">
<meta name="author" content="{{ config('app.name') }}">
@endsection
@section('title', config('app.name') . ' | Conoce más acerca de nosotros y nuestros servicios')
@section('content')

@component('rayogas.components.banner')
@slot('id')banner-about @endslot
@isset($aboutBanner->image)
@slot('image'){{ $aboutBanner->image_url }} @endslot
@endisset
@slot('title'){{ $aboutBanner->title }} @endslot
@slot('description'){{ $aboutBanner->description }} @endslot
@endcomponent

<!-- About Team -->
<section class="section" id="about-team">
    <div class="container">
        @component('rayogas.components.heading-title')
        @slot('title'){{ $aboutFeatures[0]->title }} @endslot
        @endcomponent

        <div class="row">
            <div class="col-md-6">
                <img src="{{ isset($aboutFeatures[0]->image) ? $aboutFeatures[0]->image_url : asset('images/web/about/nosotros_img_principal.png') }}"
                    class="img-fluid" alt="nuestro equipo">
            </div>
            <div class="col-md-6">
                <div class="description">
                    {!! $aboutFeatures[0]->description !!}
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End About Team -->

<!-- About Services -->
<section class="section" id="about-team">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="about-services">
                    <div class="content">
                        <div class="text">
                            <div class="title">
                                <h4>{{ $aboutFeatures[1]->title }}</h4>
                            </div>
                            <div class="text-description">
                                {!! $aboutFeatures[1]->description !!}
                            </div>
                        </div>

                        <div class="image">
                            <div>
                                <img src="{{ isset($aboutFeatures[1]->image) ? $aboutFeatures[1]->image_url :  asset('images/web/about/nosotros_img_cilindros.png') }}"
                                    class="img-flui" alt="cilindros">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Services -->

<!-- About Our Values -->
<section class="section bg-section" id="about-our-values">
    <div class="container">
        @component('rayogas.components.heading-title')
        @slot('title')Nuestros valores nos definen @endslot
        @slot('description')Aplicamos cada uno de nuestros valores entendiendo su importancia y lo que significan en
        cada una de los clientes y colaboradores. @endslot
        @endcomponent

        <div class="row">
            @foreach($aboutValues as $aboutValue)
            <div class="col-md-4 text-center">
                <img src="{{ isset($aboutValue->image) ? $aboutValue->image_url : asset('images/web/about/values/icn_nosotros_valores_liderazgo.png') }}"
                    class="img-fluid" alt="">
                <h3>{{ $aboutValue->title }}</h3>
                <p>{{ $aboutValue->description }}</p>
            </div>
            @endforeach
        </div>

        {{--<div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/web/about/values/icn_nosotros_valores_liderazgo.png') }}" class="img-fluid"
        alt="">
        <h3>Liderazgo en el servicio</h3>
        <p>Con espíritu colaborativo escuchamos y conocemos a nuestros clientes y relacionados. Trabajamos de manera
            empoderada para generar soluciones que superen sus expectativas.</p>
    </div>
    <div class="col-md-4 text-center">
        <img src="{{ asset('images/web/about/values/icn_nosotros_valores_innovacion.png') }}" class="img-fluid" alt="">
        <h3>Innovación</h3>
        <p>Buscamos permanentemente nuevas formas de desarrollar nuestro negocio con creatividad y mente abierta,
            respondiendo de manera flexible y ágil a la dinámica del entorno.</p>
    </div>
    <div class="col-md-4 text-center">
        <img src="{{ asset('images/web/about/values/icn_nosotros_valores_respeto.png') }}" class="img-fluid" alt="">
        <h3>Respeto</h3>
        <p>Aceptamos y promovemos las diferencias individuales, valoramos la complementariedad del equipo para el logro
            de metas comunes y obramos según los acuerdos y políticas establecidas.</p>
    </div>
    </div>
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/web/about/values/icn_nosotros_valores_confiabilidad.png') }}" class="img-fluid"
                alt="">
            <h3>Confiabilidad</h3>
            <p>Le apostamos al uso eficiente de los recursos disponibles, estando comprometidos con la sobriedad y
                garantizando la optimización de nuestros procesos, hacia la plena satisfacción de nuestros clientes.</p>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/web/about/values/icn_nosotros_valores_austeridad.png') }}" class="img-fluid"
                alt="">
            <h3>Austeridad</h3>
            <p>Generamos credibilidad por la transparencia en nuestro actuar, la seguridad integral en todos nuestros
                procesos y el cumplimiento de los acuerdos.</p>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/web/about/values/icn_nosotros_valores_aprendizaje.png') }}" class="img-fluid"
                alt="">
            <h3>Aprendizaje permanente</h3>
            <p>Promovemos la generación de conocimiento desde el ser y el hacer, lo incorporamos, lo compartimos y
                aprovechamos nuestras vivencias como fuente de aprendizaje.</p>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-4 col-md-push-2 text-center">
            <img src="{{ asset('images/web/about/values/icn_nosotros_valores_transparencia.png') }}" class="img-fluid"
                alt="">
            <h3>Transparencia</h3>
            <p>A través de la honestidad se construye la confianza y nos conocemos mejora para crecer cada día.</p>
        </div>
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/web/about/values/icn_nosotros_valores_pasion.png') }}" class="img-fluid" alt="">
            <h3>Pasión</h3>
            <p>Amamos y disfrutamos intensamente lo que hacemos; con entusiasmo y alegría logramos que las cosas pasen.
            </p>
        </div>
    </div> --}}
    </div>
</section>
<!-- End About Our Values -->

<!-- About Choosing -->
<section class="section" id="about-choosing">
    <div class="container">
        @component('rayogas.components.heading-title')
        @slot('title')¿Por qué elegir GLP Rayogas? @endslot
        @slot('description')Estamos preparados para atenderte. @endslot
        @endcomponent

        <div class="row">
            <div class="col-md-4">
                <img src="{{ isset($aboutWhyChooseFeature[0]->image) ? $aboutWhyChooseFeature[0]->image_url : asset('images/web/about/choosing/nosotros_glprayogas_abastecimiento.png') }}"
                    class="w-100" alt="">
                <h3>{{ $aboutWhyChooseFeature[0]->title }}</h3>
                <p>{!! $aboutWhyChooseFeature[0]->description !!}</p>
            </div>
            <div class="col-md-4">
                <img src="{{ isset($aboutWhyChooseFeature[1]->image) ? $aboutWhyChooseFeature[1]->image_url : asset('images/web/about/choosing/nosotros_glprayogas_carrotanques.png') }}"
                    class="w-100" alt="">
                <h3>{{ $aboutWhyChooseFeature[1]->title }}</h3>
                <p>{!! $aboutWhyChooseFeature[1]->description !!}</p>
            </div>
            <div class="col-md-4">
                <img src="{{ isset($aboutWhyChooseFeature[2]->image) ? $aboutWhyChooseFeature[2]->image_url : asset('images/web/about/choosing/nosotros_glprayogas_sustancias.png') }}"
                    class="w-100" alt="">
                <h3>{{ $aboutWhyChooseFeature[2]->title }}</h3>
                <p>{!! $aboutWhyChooseFeature[2]->description !!}</p>
            </div>
        </div>
    </div>
</section>
<!-- End About Choosing -->
@endsection