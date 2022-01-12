@extends('rayogas.layouts.master')
@section('content')

@component('rayogas.components.banner')
    @slot('id')banner-products @endslot
    @slot('title')Somos energía para tu empresa @endslot
    @slot('description')Contamos con un amplio portafolio de servicios que se adaptan a las necesidades específicas de tu industria, empresa u hogar. @endslot
@endcomponent

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
                        <a href="" >Cilindros</a>
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
                                    <div style="position: relative; margin-left: -200px;">
                                        <img src="{{ asset('images/web/products/services/servicios_img_cilindros.png') }}" class="img-flui" alt="cilindros">
                                    </div>
                                </div>
                                <div class="text">
                                    <div class="title">
                                        <h4>Cilindros</h4>
                                        <h5>Gas envasado</h5>
                                    </div>
                                    <div class="text-description">
                                        <p>Acompañamos los mejores momentos en el hogar con GLP versátil para usar en diferentes presentaciones: <strong>5Kl, 7Kl, 9Kl, 15 Kl, 18Kl, 36Kl, 45Kl.</strong></p>
                                        <br>
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


@include('rayogas.components.map')
@include('rayogas.components.request-service')

@endsection

