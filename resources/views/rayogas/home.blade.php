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
                        <a href="" >Hogar</a>
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
                    <a href="">Me interesa</a>
                </div>

            </div>
        </div>
    </section>
</div>
<!-- End Services -->

<!-- End Coverage -->
<section class="section bg-section">
    <div class="container">
        @component('rayogas.components.heading-title')
            @slot('title')Nuestra Coberturas @endslot
            @slot('description')Encuentra nuestro servicio en las principales ciudades del país. ¡Pregúntanos por la tuya! @endslot
        @endcomponent

        <div class="map">
            <div class="row">
                <div class="col-md-3">
                    <div class="map-controls">
                        <div class="logo">
                            <img src="{{ asset('images/web/common/img_logo_flame_map.png') }}" class="img-fluid" alt="logo flama rayogas">
                        </div>

                        <form action="">
                            <label for="">Departamento</label>
                            <select name="" id="">
                                <option value="">Seleccionar departamento</option>
                            </select>

                            <label for="">Municipio</label>
                            <select name="" id="">
                                <option value="">Seleccionar municipio</option>
                            </select>
                        </form>

                        <div class="locations">
                            <div class="locations-item">
                                <h4>RayoGas planta Soacha</h4>
                                <p>Soacha, Cundinamarca</p>
                                <p>Carrera 2 # 49-75</p>
                                <p><a href="">(1) 514 0101</a></p>
                            </div>
                            <div class="locations-item">
                                <h4>RayoGas planta Soacha</h4>
                                <p>Soacha, Cundinamarca</p>
                                <p>Carrera 2 # 49-75</p>
                                <p><a href="">(1) 514 0101</a></p>
                            </div>
                            <div class="locations-item">
                                <h4>RayoGas planta Soacha</h4>
                                <p>Soacha, Cundinamarca</p>
                                <p>Carrera 2 # 49-75</p>
                                <p><a href="">(1) 514 0101</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    right
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Coverage -->

<!-- Request Service -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-8">
                <div class="request-service">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="relative-container">
                            <div class="image">
                                <img src="{{ asset('images/web/common/img_formulario_solicitar_servicio.png') }}" class="img-flui" alt="">
                            </div>
                            </div>

                        </div>
                        <div class="col-md-9">
                            <div class="content">
                                <div class="title">
                                    <h4>Solicitar servicio</h4>
                                    <h5>Cilindro o granel</h5>
                                </div>

                                <form action="">
                                    <div class="steps">
                                        <div class="step ">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="">Nombre</label>
                                                    <input type="text" class="form-control" placeholder="Nombre" aria-label="Nombre">
                                                </div>
                                                <div class="col">
                                                    <label for="">Número de contacto</label>
                                                    <input type="text" class="form-control" placeholder="Número de contacto" aria-label="Número de contacto">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="">Tipo de persona</label>
                                                    <select name="" id="">
                                                        <option value="">Tipo de persona</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="">Razón social</label>
                                                    <input type="text" class="form-control" placeholder="Razón social" aria-label="Razón social">
                                                </div>
                                            </div>
                                            <div class="row controls">
                                                <div class="col-md-1">

                                                </div>
                                                <div class="col-md-11">
                                                    <div class="buttons">
                                                        <button class="btn btn-primary">
                                                            >
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="step active">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="">Cilindro o granel</label>
                                                    <select name="" id="">
                                                        <option value="">Cilindro</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <label for="">Cantidad</label>
                                                    <select name="" id="">
                                                        <option value="">1 unidad</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="">Presentación / Volumen</label>
                                                    <select name="" id="">
                                                        <option value="">40 libras</option>
                                                    </select>
                                                </div>
                                                <div class="col">

                                                </div>
                                            </div>
                                            <div class="row controls">
                                                <div class="col-md-1">

                                                </div>
                                                <div class="col-md-11">
                                                    <div class="buttons">
                                                        {{-- <button class="btn btn-primary">
                                                            >
                                                        </button> --}}
                                                        <a href="" class="btn btn-green">
                                                            Solicitar
                                                            <div>Pago en efectivo</div>
                                                        </a>
                                                        <a href="" class="btn">
                                                            Solicitar
                                                            <div>Pago en línea</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row indicators">
                                        <div class="col-md-3">
                                            <div class="dots">
                                                <span class="dots-item active"></span>
                                                <span class="dots-item "></span>
                                            </div>
                                        </div>
                                        <div class="col-md-9">

                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Request Service -->

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

