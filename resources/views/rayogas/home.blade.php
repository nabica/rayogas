@extends('rayogas.layouts.master')
@section('content')

@component('rayogas.components.banner')
    @slot('id')banner-home @endslot
    @slot('title')Somos energía que mueve un país @endslot
    @slot('description')Somos empresa 100% colombiana que vive la diversidad de nuestro país en cada recorrido distribuyendo GLP como solución energética. @endslot
    @slot('buttonLink')# @endslot
    @slot('buttonText')Conocer más de Rayogas @endslot
@endcomponent

<!-- Team -->
<div class="container">
    <section class="section">
        @component('rayogas.components.heading-title')
            @slot('title')Contamos con un equipo humano profesional y especializado para acompañarte @endslot
        @endcomponent

        <div class="row">
            <div class="col-md-6">
                <p>
                    Año tras año hemos crecido en <strong>liderazgo y posicionamiento</strong> en el país, <strong>apoyando</strong> a miles de personas y proyectos con productos que cuentan con los <strong>mayores estándares de calidad</strong> y seguridad en todas las fases de envasado e instalación, asegurando un <strong>menor riesgo</strong> en su uso.
                </p>
            </div>
            <div class="col-md-6">
                <div id="home-main-image">
                    <img src="{{ asset('images/web/home/home_img_principal.png') }}" class="img-fluid" alt="más de 50 años">
                    <div class="content">
                        <p>Más de 50 años llevando energía a los rincones del país</p>
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
            @slot('description')Contamos con un <strong>amplio portafolio de GLP en cilindros y a granel</strong> para nuestros clientes residenciales, comerciales e industriales, <strong>adaptándonos a sus necesidades</strong> específicas. @endslot
        @endcomponent

        <div class="tabs">
            <div class="tabs-menu">
                <ul>
                    <li class="no-border">
                        <a href="hogar">Hogar</a>
                    </li>
                    <li class="active">
                        <a href="industria">Industria</a>
                    </li>
                    <li >
                        <a href="agro">Agro</a>
                    </li>
                    <li >
                        <a href="horeca">Horeca</a>
                    </li>
                </ul>
            </div>

            <div class="tabs-content">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('images/web/home/services/home_servicios_hogar_1.png') }}" class="img-fluid" alt="">
                        <h3>Energía para tu hogar</h3>
                        <p>Con el GLP tienes una alternativa de producción de calor muy versátil, de manera sencilla, económica y sin estructuras complicadas obtienes confort para tu familia o para quienes te visiten.

                        Además de obtener un espacio con mejor calidad de aire para una tranquilidad mayor. </p>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/web/home/services/home_servicios_hogar_2.png') }}" class="img-fluid" alt="">
                        <h3>Energía para tu hogar</h3>
                        <p>Con el GLP tienes una alternativa de producción de calor muy versátil, de manera sencilla, económica y sin estructuras complicadas obtienes confort para tu familia o para quienes te visiten.

                        Además de obtener un espacio con mejor calidad de aire para una tranquilidad mayor. </p>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('images/web/home/services/home_servicios_hogar_3.png') }}" class="img-fluid" alt="">
                        <h3>Energía para tu hogar</h3>
                        <p>Con el GLP tienes una alternativa de producción de calor muy versátil, de manera sencilla, económica y sin estructuras complicadas obtienes confort para tu familia o para quienes te visiten.

                        Además de obtener un espacio con mejor calidad de aire para una tranquilidad mayor. </p>
                    </div>
                </div>
                <div class="container-button-interest">
                    <a href="" class="btn btn-primary">Me interesa</a>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End Services -->

@include('rayogas.components.map', ['backgroundSectionActive' => true])
@include('rayogas.components.request-service')

<!-- Home rates -->
<section class="section" id="bg-home-rates">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Nuestras tarifas</h3>
            </div>
            <div class="col-md-6 text-center mt-1">
                <a href="" class="btn">Octubre 2021</a>
                <a href="" class="btn">Noviembre 2021</a>
            </div>
        </div>
    </div>
</section>
<!-- Home rates end -->

@include('rayogas.components.last-news')
@endsection

