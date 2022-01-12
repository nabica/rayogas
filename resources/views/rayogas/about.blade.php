@extends('rayogas.layouts.master')
@section('content')

@component('rayogas.components.banner')
    @slot('id')banner-about @endslot
    @slot('title')Somos una empresa 100% colombiana con un cálido compromiso @endslot
    @slot('description')Nos dedicamos a la comercialización y distribución de gas licuado de petróleo (GLP) para usuarios residenciales, comerciales e industriales en el país. @endslot
@endcomponent

<!-- About Team -->
<section class="section" id="about-team">
    <div class="container">
        @component('rayogas.components.heading-title')
            @slot('title')Nuestro equipo profesional está totalmente capacitado para asesorarte de principio a fin @endslot
        @endcomponent

        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/web/about/nosotros_img_principal.png') }}" class="img-fluid" alt="nuestro equipo">
            </div>
            <div class="col-md-6">
                <div class="description">
                    <p>En <strong>Rayogas</strong>, está nuestro equipo en constante formación para <strong>fortalecer su conocimiento</strong> y ampliar su posibilidad de crecer profesionalmente.</p>
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
                                <h4>El servicio que brindamos se enfoca en el cumplimiento</h4>
                            </div>
                            <div class="text-description">
                                <p>El buen servicio y cumplimiento de las expectativas de nuestros clientes es uno de nuestro grandes objetivos, dedicándonos a brindarles acompañamiento durante todo el proceso de compra hasta su instalación y mantenimiento.</p>
                            </div>
                        </div>

                        <div class="image">
                            <div>
                            <img src="{{ asset('images/web/about/nosotros_img_cilindros.png') }}" class="img-flui" alt="cilindros">
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
            @slot('description')Aplicamos cada uno de nuestros valores entendiendo su importancia y lo que significan en cada una de los clientes y colaboradores. @endslot
        @endcomponent

        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/web/about/values/icn_nosotros_valores_liderazgo.png') }}" class="img-fluid" alt="">
                <h3>Liderazgo en el servicio</h3>
                <p>Con espíritu colaborativo escuchamos y conocemos a nuestros clientes y relacionados. Trabajamos de manera empoderada para generar soluciones que superen sus expectativas.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/web/about/values/icn_nosotros_valores_innovacion.png') }}" class="img-fluid" alt="">
                <h3>Innovación</h3>
                <p>Buscamos permanentemente nuevas formas de desarrollar nuestro negocio con creatividad y mente abierta, respondiendo de manera flexible y ágil a la dinámica del entorno.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/web/about/values/icn_nosotros_valores_respeto.png') }}" class="img-fluid" alt="">
                <h3>Respeto</h3>
                <p>Aceptamos y promovemos las diferencias individuales, valoramos la complementariedad del equipo para el logro de metas comunes y obramos según los acuerdos y políticas establecidas.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/web/about/values/icn_nosotros_valores_confiabilidad.png') }}" class="img-fluid" alt="">
                <h3>Confiabilidad</h3>
                <p>Le apostamos al uso eficiente de los recursos disponibles, estando comprometidos con la sobriedad y garantizando la optimización de nuestros procesos, hacia la plena satisfacción de nuestros clientes.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/web/about/values/icn_nosotros_valores_austeridad.png') }}" class="img-fluid" alt="">
                <h3>Austeridad</h3>
                <p>Generamos credibilidad por la transparencia en nuestro actuar, la seguridad integral en todos nuestros procesos y el cumplimiento de los acuerdos.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/web/about/values/icn_nosotros_valores_aprendizaje.png') }}" class="img-fluid" alt="">
                <h3>Aprendizaje permanente</h3>
                <p>Promovemos la generación de conocimiento desde el ser y el hacer, lo incorporamos, lo compartimos y aprovechamos nuestras vivencias como fuente de aprendizaje.</p>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-4 col-md-push-2 text-center">
                <img src="{{ asset('images/web/about/values/icn_nosotros_valores_transparencia.png') }}" class="img-fluid" alt="">
                <h3>Transparencia</h3>
                <p>A través de la honestidad se construye la confianza y nos conocemos mejora para crecer cada día.</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/web/about/values/icn_nosotros_valores_pasion.png') }}" class="img-fluid" alt="">
                <h3>Pasión</h3>
                <p>Amamos y disfrutamos intensamente lo que hacemos; con entusiasmo y alegría logramos que las cosas pasen.</p>
            </div>
        </div>
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
                <img src="{{ asset('images/web/about/choosing/nosotros_glprayogas_abastecimiento.png') }}" class="img-fluid" alt="">
                <h3>Seguridad en abastecimiento</h3>
                <p>Contamos con nuestro aliado estratégico Almagas, comercializadora mayorista, garantizando el abastecimiento seguro.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/web/about/choosing/nosotros_glprayogas_carrotanques.png') }}" class="img-fluid" alt="">
                <h3>Carro tanques y Cisternas</h3>
                <p>Nuestros carro tanques cuentan con control de suministro de líquido, garantizando la entrega precisa y correcta a cada usuario. Contamos con más de 200 vehículos repartidores y transportadores de GLP.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/web/about/choosing/nosotros_glprayogas_sustancias.png') }}" class="img-fluid" alt="">
                <h3>Manejo de Sustancias</h3>
                <p>Nuestro personal cuentan con la experiencia y capacitación en el manejo adecuado de sustancias peligrosas.</p>
            </div>
        </div>
    </div>
</section>
<!-- End About Choosing -->
@endsection

