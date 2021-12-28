@extends('rayogas.layouts.master')
@section('content')

<!-- Banner -->
<section>
    <div class="banner" id="banner-home">
        <div class="container">
            <div class="banner-content">
                <h1>Somos energía que mueve un país</h1>
                <p>Somos empresa 100% colombiana que vive la diversidad de nuestro país en cada recorrido distribuyendo GLP como solución energética.</p>
                <a href="">Conocer más de Rayogas</a>
            </div>
        </div>
    </div>
</section>
<!-- End Banner -->

<!-- Team -->
<div class="container">
    <section class="section">
        <div class="heading-title">
            <h2>Contamos con un equipo humano profesional y especializado para acompañarte</h2>
        </div>

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
        <div class="heading-title">
            <h2>Nuestros servicios</h2>
            <p>Contamos con un <strong>amplio portafolio de GLP en cilindros y a granel</strong> para nuestros clientes residenciales, comerciales e industriales, <strong>adaptándonos a sus necesidades</strong> específicas.</p>
        </div>

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
        <div class="heading-title">
            <h2>Nuestra Cobertura</h2>
            <p>Encuentra nuestro servicio en las principales ciudades del país. ¡Pregúntanos por la tuya!</p>
        </div>

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
@endsection

