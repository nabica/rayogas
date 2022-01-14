@extends('rayogas.layouts.master')
@section('content')

@component('rayogas.components.banner')
    @slot('id')banner-products @endslot
    @slot('title')Somos energía para tu empresa @endslot
    @slot('description')Contamos con un amplio portafolio de servicios que se adaptan a las necesidades específicas de tu industria, empresa u hogar. @endslot
@endcomponent

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
                    <li class="">
                        <a href="">Cilindros</a>
                    </li>
                    <li class="active">
                        <a href="">Gas a granel</a>
                    </li>
                    <li >
                        <a href="">Soporte técnico</a>
                    </li>
                </ul>
            </div>

            <div class="tabs-content">
                <div class="row justify-content-md-center">
                    <div class="col-md-9">
                        <div class="service-design">
                            <div class="content">
                                <div class="image">
                                    <div class="container-relative">
                                        <img src="{{ asset('images/web/products/services/servicios_img_cilindros.png') }}" class="img-fluid" alt="cilindros">
                                    </div>
                                </div>
                                <div class="text">
                                    <div class="title">
                                        <h4>Cilindros</h4>
                                        <h5>Gas envasado</h5>
                                    </div>
                                    <div class="text-description">
                                        <p>Acompañamos los mejores momentos en el hogar con GLP versátil para usar en diferentes presentaciones: <strong>5Kl, 7Kl, 9Kl, 15 Kl, 18Kl, 36Kl, 45Kl.</strong></p>

                                        <p>También puedes acceder a <strong>cilindros especializados montacarga</strong> en presentaciones de <strong>15Kl, 18Kl, 22Kl.</strong></p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- End Services -->

<!-- Products -->
<section class="section bg-section">
    <div class="container">
        @component('rayogas.components.heading-title')
            @slot('title')Un producto a tu medida @endslot
            @slot('description')Elige la opción que mejor se adapte a tu sector, industria u hogar. Nosotros te asesoramos para una adecuación completa. @endslot
        @endcomponent

        <div class="tabs">
            <div class="tabs-menu">
                <ul>
                    <li class="">
                        <a href="">Hogar</a>
                    </li>
                    <li class="active">
                        <a href="">Industria</a>
                    </li>
                    <li >
                        <a href="">Agro</a>
                    </li>
                    <li >
                        <a href="">Horeca</a>
                    </li>
                </ul>
            </div>

            <div class="tabs-content">
                <div class="product-design">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('images/web/products/products/servicios_img_hogar.png') }}" class="img-fluid" alt="cilindros">
                        </div>
                        <div class="col-md-6">
                            <div class="content">
                                <div class="text-content">
                                    <h4>Energía para tu hogar</h4>
                                    <p>Con GLP Rayogas le puedes dar la bienvenida a una nueva forma de vida en tu hogar y casa de recreo al contar con un sistema de producción de calor realmente versátil. </p>

                                    <p>El uso de GLP te permite de manera sencilla y económica, sin infraestructuras complicadas, obtener confort para tu familia y simultáneamente contribuir a mejorar la calidad del aire que los miembros de tu familia e invitados respiran.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="features">
                        <div class="row">
                            <div class="col-md-4 text-left">
                                <img src="{{ asset('images/web/products/products/home/icn_servicios_hogar_cocina.png') }}" class="img-fluid" alt="">
                                <h3>Cocina</h3>
                                <p>Con nuestros cilindros en tu hogar, cuenta con rendimiento, calidad y cuidado para tus preparaciones diarias.</p>

                                <p>Encuentra presentaciones que se adaptan a tu necesidad de uso.</p>
                            </div>
                            <div class="col-md-4 text-left">
                                <img src="{{ asset('images/web/products/products/home/icn_servicios_hogar_calefactor.png') }}" class="img-fluid" alt="">
                                <h3>Calentadores de ambiente</h3>
                                <p>Una excelente alternativa para la calefacción, pues se convierte en una opción económica y factible aún fuera de la ciudad. Disfruta de una cómoda temperatura al exterior de tu casa aprovechando los exteriores para congregar a tu familia y tus amigos al utilizarlo en calefactores para terrazas.</p>
                            </div>
                            <div class="col-md-4 text-left">
                                <img src="{{ asset('images/web/products/products/home/icn_servicios_hogar_calentador.png') }}" class="img-fluid" alt="">
                                <h3>Calentadores de agua</h3>
                                <p>Uno de los usos más populares del GLP Rayogas en los hogares y casas de Recreo. Su poder de calentar el agua de forma inmediata se constituye en una comodidad tangible para cada miembro del hogar, sin depender del fluido eléctrico o la espera de varias horas para alcanzar la temperatura ideal.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-left">
                                <img src="{{ asset('images/web/products/products/home/icn_servicios_hogar_piscina.png') }}" class="img-fluid" alt="">
                                <h3>Climatización para piscinas</h3>
                                <p>¡Logra la temperatura ideal de tu piscina! Tanto en interiores como exteriores, la propiedad del GLP de calentar de manera rápida el agua, te permite disfrutar de tu piscina obteniendo una excelente eficiencia energética.</p>
                            </div>
                            <div class="col-md-4 text-left">
                                <img src="{{ asset('images/web/products/products/home/icn_servicios_hogar_bbq.png') }}" class="img-fluid" alt="">
                                <h3>Cilindros para asadores</h3>
                                <p>Úsalo en el asador del patio de tu casa con tranquilidad. El GLP es libre de impurezas y cuando se usa no libera partículas, olores o cenizas permitiéndote obtener resultados increíbles en tus preparaciones.</p>
                            </div>
                            <div class="col-md-4 text-left">
                                <img src="{{ asset('images/web/products/products/home/icn_servicios_hogar_chimenea.png') }}" class="img-fluid" alt="">
                                <h3>Chimeneas</h3>
                                <p>Disfruta de un buen momento al lado de una chimenea sin tener que quemar leña que ocasiona erosión. Ahora puedes usar chimeneas alimentadas con GLP Rayogas que proporciona calor y ambiente a un lugar frío y ¡cuida el medio ambiente!</p>
                            </div>
                        </div>
                    </div>

                    <div class="buttons">
                        <a href="" class="btn btn-green">Solicitar asesoría</a>
                        <a href="" class="btn">Solicitar servicio</a>
                    </div>

                </div>
            </div>
        </div>


    </div>

</section>
<!-- End Products -->

@include('rayogas.components.map')
@include('rayogas.components.request-service')

@endsection

