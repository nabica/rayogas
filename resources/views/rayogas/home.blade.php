@extends('rayogas.layouts.master')
@section('metatags_facebook')
  <meta property="og:title" content="{{ config('app.name') }} | Somos energía que mueve a un país - GLP">
  <meta property="og:site_name" content="{{ config('app.name') }}">
  <meta property="og:url" content="{{ Request::url() }}">
  <meta property="og:description" content="En Rayogas contamos con un amplio portafolio de gas LP en cilindros y a granel, para clientes residenciales, comerciales e industriales.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="{{ $homeBanner->image_url }}">
@endsection
@section('metatags_seo')
    <meta name="title" content="{{ config('app.name') }} | Somos energía que mueve a un país - GLP">
    <meta name="description" content="En Rayogas contamos con un amplio portafolio de gas LP en cilindros y a granel, para clientes residenciales, comerciales e industriales.">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Spanish">
    <meta name="revisit-after" content="30 days">
    <meta name="author" content="{{ config('app.name') }}">
@endsection
@section('title', config('app.name') . ' | Somos energía que mueve a un país - GLP')

@section('content')

@component('rayogas.components.banner')
@slot('id')banner-home @endslot
@isset($homeBanner->image)
@slot('image'){{ $homeBanner->image_url }} @endslot
@endisset
@slot('title'){{ $homeBanner->title }} @endslot
@slot('description'){{ $homeBanner->description }} @endslot
@slot('buttonLink'){{ $homeBanner->button_link }} @endslot
@slot('buttonText'){{ $homeBanner->button_text }} @endslot
@endcomponent

<!-- Team -->
<div class="container">
    <section class="section">
        @component('rayogas.components.heading-title')
        @slot('title'){{ $homeFeature->title }} @endslot
        @endcomponent

        <div class="row">
            <div class="col-md-6 d-flex align-items-center">
                {!! $homeFeature->description !!}
            </div>
            <div class="col-md-6">
                <div id="home-main-image">
                    @if(isset($homeFeature->image))
                    <img src="{{ $homeFeature->image_url }}" class="img-fluid"
                        alt="más de 50 años">
                    @else
                    <img src="{{ asset('images/web/home/home_img_principal.png') }}" class="img-fluid"
                        alt="más de 50 años">
                    @endif
                    <div class="content">
                        <p>{{ $homeFeature->image_description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End Team -->

<hr class="section-bottom-separator">

<!-- Services -->
<div class="container">
    <section class="section">
        @component('rayogas.components.heading-title')
        @slot('title')Nuestros servicios @endslot
        @slot('description')Contamos con un <strong>amplio portafolio de GLP en cilindros y a granel</strong> para
        nuestros clientes residenciales, comerciales e industriales, <strong>adaptándonos a sus necesidades</strong>
        específicas. @endslot
        @endcomponent

        <div class="tabs">
            <div class="tabs-menu">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="products-1" data-bs-toggle="tab"
                            data-bs-target="#products-content-1" type="button" role="tab"
                            aria-controls="products-content-1" aria-selected="true">Hogar</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="products-2" data-bs-toggle="tab"
                            data-bs-target="#products-content-2" type="button" role="tab"
                            aria-controls="products-content-2" aria-selected="false">Industria</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="products-3" data-bs-toggle="tab"
                            data-bs-target="#products-content-3" type="button" role="tab"
                            aria-controls="products-content-3" aria-selected="false">Agro</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="products-4" data-bs-toggle="tab"
                            data-bs-target="#products-content-4" type="button" role="tab"
                            aria-controls="products-content-4" aria-selected="false">Horeca</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content tabs-content" id="myTabContent">
                <div class="tab-pane fade show active" id="products-content-1" role="tabpanel"
                    aria-labelledby="products-1">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('images/web/home/services/home_servicios_hogar_1.png') }}" class="w-100"
                                alt="">
                            <h3>Energía para tu hogar</h3>
                            <p>Con el <strong>GLP</strong> tienes una alternativa de <strong>producción de
                                    calor</strong> muy versátil, de manera
                                sencilla, económica y sin estructuras complicadas obtienes confort para tu familia o
                                para quienes te visiten. </p>

                            <p>Además de obtener un espacio con mejor calidad de aire para una tranquilidad mayor. </p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('images/web/home/services/home_servicios_hogar_2.png') }}" class="w-100"
                                alt="">
                            <h3>Diferentes usos</h3>
                            <p>El gran poder calorífico del GLP permite su uso en diferentes lugares del hogar, como:
                                cocina, calefactores de ambiente, calentadores de agua, climatización para piscina,
                                cilindros para asadores, chimeneas, entre otros.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('images/web/home/services/home_servicios_hogar_3.png') }}" class="w-100"
                                alt="">
                            <h3>Cuida tu ambiente</h3>
                            <p>El GLP es un combustible limpio ya que no deja residuos, cenizas, ni olor, por estar
                                libre de plomo, azufre y otros productos contaminantes.</p>

                            <p>Miles de personas lo eligen al ser una alternativa energética limpia y altamente
                                eficiente, que además mantiene los bosques libres de la deforestación ya que evita el uso de leña. </p>
                        </div>
                    </div>
                    {{-- <div class="container-button-interest">
                        <a href="" class="btn btn-primary">Me interesa</a>
                    </div> --}}
                </div>
                <div class="tab-pane fade " id="products-content-2" role="tabpanel" aria-labelledby="products-2">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('images/web/home/services/home_servicios_industria_1.png') }}"
                                class="w-100" alt="">
                            <h3>Un facilitador para tu crecimiento</h3>
                            <p>"Energía flexible, limpia y segura es la que recibes con GLP Rayogas, una oportunidad de evolucionar en tu sector.
                            </p>
                            <p>
                                Puedes utilizarlo en: Corte industrial, carburación montacargas, calderas, fundición, calefacción, gasodomésticos y refrigeración industrial y generación de energía.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('images/web/home/services/home_servicios_industria_2.png') }}"
                                class="w-100" alt="">
                            <h3>Optimiza tus resultados</h3>
                            <p>Usa GLP, un gas con poder aproximadamente 2,5 veces mayor que el gas natural para
                                alcanzar el rendimiento que deseas.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('images/web/home/services/home_servicios_industria_3.png') }}"
                                class="w-100" alt="">
                            <h3>Te acompañamos en el proceso</h3>
                            <p>De inicio a fin estamos contigo, desde la primera asesoría, hasta la instalación y mantenimiento del producto para hacer crecer tu industria. Puedes usarlo para: Construcción, impermeabilización, flamear y usos náuticos. </p>
                        </div>
                    </div>
                    {{-- <div class="container-button-interest">
                        <a href="" class="btn btn-primary">Me interesa</a>
                    </div> --}}
                </div>
                <div class="tab-pane fade " id="products-content-3" role="tabpanel" aria-labelledby="products-3">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('images/web/home/services/home_servicios_agro_1.png') }}" class="w-100"
                                alt="">
                            <h3>Cuida tus procesos</h3>
                            <p>El detalle en tus procesos de producción puede marcar la diferencia. Usa el poder del GLP
                                desde el primer hasta el último proceso. </p>

                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('images/web/home/services/home_servicios_agro_2.png') }}" class="w-100"
                                alt="">
                            <h3>Temperaturas ideales</h3>
                            <p>Logra la temperatura que necesitas en tu producción de manera estable y controlada. </p>
                             <p>Asesoría en el manejo de temperatura adecuada para tu producción.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('images/web/home/services/home_servicios_agro_3.png') }}" class="w-100"
                                alt="">
                            <h3>Para todo tipo de agroindustria</h3>
                            <p>Accede al rendimiento y potencia del GLP en procesos de esterilización, pasteurización,
                                calderas, cocción, secado, conserva, granjas, criaderos y más. </p>
                        </div>
                    </div>
                    {{-- <div class="container-button-interest">
                        <a href="" class="btn btn-primary">Me interesa</a>
                    </div> --}}
                </div>
                <div class="tab-pane fade " id="products-content-4" role="tabpanel" aria-labelledby="products-4">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('images/web/home/services/home_servicios_horeca_1.png') }}" class="w-100"
                                alt="">
                            <h3>Espacios acogedores</h3>
                            <p>Ambienta cada espacio de tu hotel, restaurante, spa, entre otros, con temperaturas
                                ideales que agradarán a tus clientes.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('images/web/home/services/home_servicios_horeca_2.png') }}" class="w-100"
                                alt="">
                            <h3>Sin contaminación</h3>
                            <p>El GLP es un combustible limpio que no deja residuos y está libre de plomo, azufre y
                                otros productos contaminantes.</p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('images/web/home/services/home_servicios_horeca_3.png') }}" class="w-100"
                                alt="">
                            <h3>Funcional para tu negocio</h3>
                            <p>Úsalo en estufas industriales, calefactores, chimeneas, climatización de piscinas,
                                hornos, calderas, lavanderías, zonas húmedas ¡y más! </p>
                        </div>
                    </div>
                    {{-- <div class="container-button-interest">
                        <a href="https://api.whatsapp.com/send?phone=57310%202388245&text=Hola,%20estoy%20interesado%20en%20un%20servicio" target="blank" class="btn btn-primary">Me interesa</a>
                    </div> --}}
                </div>

                <div class="container-button-interest">
                        <a href="{{ route('rayogas.products') }}" class="btn btn-primary">Me interesa</a>
                    </div>

            </div>

        </div>
    </section>
</div>
<!-- End Services -->

@include('rayogas.components.request-service')
@include('rayogas.components.map', ['backgroundSectionActive' => true])

<!-- Home rates -->
<section class="section" id="bg-home-rates">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>Nuestras tarifas</h3>
            </div>
            <div class="col-lg-6 text-center mt-1">
                @foreach($homeRates as $homeRate)
                <a href="{{ $homeRate->file_url }}" target="blank" class="btn btn-primary">{{ $homeRate->button_text }}</a>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Home rates end -->

@include('rayogas.components.blog-highlights')
@endsection
