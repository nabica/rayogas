@extends('rayogas.layouts.master')
@section('content')

@component('rayogas.components.banner')
@slot('id')banner-products @endslot
@isset($productsBanner->image)
@slot('image'){{ $productsBanner->image_url }} @endslot
@endisset
@slot('title'){{ $productsBanner->title }} @endslot
@slot('description'){{ $productsBanner->description }} @endslot
@endcomponent

<!-- Services -->
<div class="container">
    <section class="section services">
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
                        <button class="nav-link active" id="services-1" data-bs-toggle="tab"
                            data-bs-target="#service-content-1" type="button" role="tab"
                            aria-controls="service-content-1" aria-selected="true">Cilindros</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="services-2" data-bs-toggle="tab"
                            data-bs-target="#service-content-2" type="button" role="tab"
                            aria-controls="service-content-2" aria-selected="false">Gas a granel</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="services-3" data-bs-toggle="tab"
                            data-bs-target="#service-content-3" type="button" role="tab"
                            aria-controls="service-content-3" aria-selected="false">Soporte Técnico</button>
                    </li>
                </ul>

            </div>
            <div class="tabs-content tab-content" id="servicesTabContent">
                <div class="tab-pane fade show active" id="service-content-1" role="tabpanel"
                    aria-labelledby="services-1">
                    <div class="service-design">
                        <div class="content">
                            <div class="image H253">
                                <img src="{{ asset('images/web/products/services/servicios_img_cilindros.png') }}"
                                    class="img-fluid" alt="cilindros">
                            </div>
                            <div class="text">
                                <div class="title">
                                    <h4>Cilindros</h4>
                                    <h5>Gas envasado</h5>
                                </div>
                                <div class="text-description">
                                    <p>Acompañamos los mejores momentos en el hogar con GLP versátil para usar
                                        en
                                        diferentes presentaciones: <strong>5Kl, 7Kl, 9Kl, 15 Kl, 18Kl, 36Kl,
                                            45Kl.</strong></p>

                                    <p>También puedes acceder a <strong>cilindros especializados
                                            montacarga</strong>
                                        en presentaciones de <strong>15Kl, 18Kl, 22Kl.</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="service-content-2" role="tabpanel" aria-labelledby="services-2">

                    <div class="service-design">
                        <div class="content">
                            <div class="image">
                                <img src="{{ asset('images/web/products/services/servicios_img_granel.png') }}"
                                    class="img-fluid" alt="cilindros">
                            </div>
                            <div class="text">
                                <div class="title">
                                    <h4>Tanques</h4>
                                    <h5>Gas a granel</h5>
                                </div>
                                <div class="text-description">
                                    <p class="F20">Desde 120 hasta con 30.000 galones te brindamos diferentes
                                        tanques según
                                        el requerimiento para tu negocio, local, empresa o industria. </p>

                                    <p class="F20">Realizamos estudios y diseños de las instalaciones de acuerdo
                                        a los
                                        requerimientos técnicos y la normatividad vigente. </strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="service-content-3" role="tabpanel" aria-labelledby="services-3">

                    <div class="service-design">
                        <div class="content">
                            <div class="image L500">
                                <img src="{{ asset('images/web/products/services/servicios_img_soporte.png') }}"
                                    class="img-fluid" alt="cilindros">
                            </div>
                            <div class="text">
                                <div class="title">
                                    <h4>Soporte técnico</h4>

                                </div>
                                <div class="text-description">
                                    <p>Recibe mantenimiento de sistemas de Almacenamiento y Redes de
                                        Distribución. Nuestros ingenieros especializados realizan las revisiones
                                        y pruebas necesarias para garantizar su óptimo funcionamiento.</p>

                                    <ul class="list-general">
                                        <li>
                                            Limpieza y pintura exterior del tanque.
                                        </li>
                                        <li>
                                            Inspecciones o cambio de accesorios internos y externos.
                                        </li>
                                        <li>
                                            Examen de espesores por medios no destructivos.
                                        </li>
                                        <li>
                                            Pruebas hidráulicas e hidrostáticas.
                                        </li>
                                        <li>
                                            Pruebas de hermeticidad a las redes de distribución.
                                        </li>
                                        <li>
                                            Instalación, mantenimiento y suministro de partes para sistemas de
                                            medición y regulación de gas.
                                        </li>
                                    </ul>
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
<section class="section bg-section products">
    <div class="container">
        @component('rayogas.components.heading-title')
        @slot('title')Un producto a tu medida @endslot
        @slot('description')Elige la opción que mejor se adapte a tu sector, industria u hogar. Nosotros te asesoramos
        para una adecuación completa. @endslot
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
            <div class="tab-content tabs-content" id="productsTabContent">
                <div class="tab-pane fade show active" id="products-content-1" role="tabpanel"
                    aria-labelledby="products-1">
                    <div class="product-design">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('images/web/products/products/images/servicios_img_hogar.png') }}"
                                    class="img-fluid" alt="cilindros">
                            </div>
                            <div class="col-md-6">
                                <div class="content">
                                    <div class="text-content">
                                        <h4>Energía para tu hogar</h4>
                                        <p>Con GLP Rayogas le puedes dar la bienvenida a una nueva forma de vida en tu
                                            hogar
                                            y casa de recreo al contar con un sistema de producción de calor realmente
                                            versátil. </p>

                                        <p>El uso de GLP te permite de manera sencilla y económica, sin infraestructuras
                                            complicadas, obtener confort para tu familia y simultáneamente contribuir a
                                            mejorar la calidad del aire que los miembros de tu familia e invitados
                                            respiran.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features">
                            <div class="row">
                                <div class="col-md-4 text-left">
                                    <img src="{{ asset('images/web/products/products/icons/icn_servicios_hogar_cocina.png') }}"
                                        class="img-fluid" alt="">
                                    <h3>Cocina</h3>
                                    <p>Con nuestros cilindros en tu hogar, cuenta con rendimiento, calidad y cuidado
                                        para
                                        tus preparaciones diarias.</p>

                                    <p>Encuentra presentaciones que se adaptan a tu necesidad de uso.</p>
                                </div>
                                <div class="col-md-4 text-left">
                                    <img src="{{ asset('images/web/products/products/icons/icn_servicios_hogar_calefactor.png') }}"
                                        class="img-fluid" alt="">
                                    <h3>Calentadores de ambiente</h3>
                                    <p>Una excelente alternativa para la calefacción, pues se convierte en una opción
                                        económica y factible aún fuera de la ciudad. Disfruta de una cómoda temperatura
                                        al
                                        exterior de tu casa aprovechando los exteriores para congregar a tu familia y
                                        tus
                                        amigos al utilizarlo en calefactores para terrazas.</p>
                                </div>
                                <div class="col-md-4 text-left">
                                    <img src="{{ asset('images/web/products/products/icons/icn_servicios_hogar_calentador.png') }}"
                                        class="img-fluid" alt="">
                                    <h3>Calentadores de agua</h3>
                                    <p>Uno de los usos más populares del GLP Rayogas en los hogares y casas de Recreo.
                                        Su
                                        poder de calentar el agua de forma inmediata se constituye en una comodidad
                                        tangible
                                        para cada miembro del hogar, sin depender del fluido eléctrico o la espera de
                                        varias
                                        horas para alcanzar la temperatura ideal.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 text-left">
                                    <img src="{{ asset('images/web/products/products/icons/icn_servicios_hogar_piscina.png') }}"
                                        class="img-fluid" alt="">
                                    <h3>Climatización para piscinas</h3>
                                    <p>¡Logra la temperatura ideal de tu piscina! Tanto en interiores como exteriores,
                                        la
                                        propiedad del GLP de calentar de manera rápida el agua, te permite disfrutar de
                                        tu
                                        piscina obteniendo una excelente eficiencia energética.</p>
                                </div>
                                <div class="col-md-4 text-left">
                                    <img src="{{ asset('images/web/products/products/icons/icn_servicios_hogar_bbq.png') }}"
                                        class="img-fluid" alt="">
                                    <h3>Cilindros para asadores</h3>
                                    <p>Úsalo en el asador del patio de tu casa con tranquilidad. El GLP es libre de
                                        impurezas y cuando se usa no libera partículas, olores o cenizas permitiéndote
                                        obtener resultados increíbles en tus preparaciones.</p>
                                </div>
                                <div class="col-md-4 text-left">
                                    <img src="{{ asset('images/web/products/products/icons/icn_servicios_hogar_chimenea.png') }}"
                                        class="img-fluid" alt="">
                                    <h3>Chimeneas</h3>
                                    <p>Disfruta de un buen momento al lado de una chimenea sin tener que quemar leña que
                                        ocasiona erosión. Ahora puedes usar chimeneas alimentadas con GLP Rayogas que
                                        proporciona calor y ambiente a un lugar frío y ¡cuida el medio ambiente!</p>
                                </div>
                            </div>
                        </div>

                        <div class="buttons">
                            <a href="" class="btn btn-primary--green">Solicitar asesoría</a>
                            <a href="" class="btn btn-primary">Solicitar servicio</a>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="products-content-2" role="tabpanel" aria-labelledby="products-2">
                    <div class="product-design">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('images/web/products/products/images/servicios_img_industria.png') }}"
                                    class="img-fluid" alt="cilindros">
                            </div>
                            <div class="col-md-6">
                                <div class="content">
                                    <div class="text-content">
                                        <h4>Somos un aliado para tus proyectos</h4>
                                        <p>Con el GLP de Rayogas accede a una energía flexible, limpia y segura. Además,
                                            es un producto ecológico, que cuida el medio ambiente.
                                        </p>

                                        <p>Su poder calorífico lo convierte en una opción rentable para toda la cadena
                                            de producción de cualquier industria, al ser mayor que la del gas natural.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features">
                            <div class="row">
                                <div class="col-md-4 text-left">
                                    <img src="{{ asset('images/web/products/products/icons/icn_servicios_industria_metalurgia.png') }}"
                                        class="img-fluid" alt="">
                                    <h3>Industria Metalurgíca</h3>
                                    <p>El GLP reduce los tiempos de fusión, agilizando notablemente los tiempos de
                                        producción, con baja producción de NOX.</p>
                                    <p>Entre las operaciones más frecuentes de uso del GLP se encuentran:<br>
                                        • Las operaciones de fusión.<br>
                                        • El calentamiento de moldes y los recipientes de colada.<br>
                                        • La regeneración de las arenas.</p><br>
                                </div>
                                <div class="col-md-4 text-left">
                                    <img src="{{ asset('images/web/products/products/icons/icn_servicios_industria_superficie.png') }}"
                                        class="img-fluid" alt="">
                                    <h3>Industria Tratamientos de Superficie</h3>
                                    <p>El GLP se utiliza en numerosas etapas de la cadena de tratamiento para proteger a
                                        los metales contra la oxidación, o bien para dar a estos un aspecto
                                        estético.</p>
                                    <p>
                                        El GLP, por su flexibilidad en la utilización, su elevado rendimiento y
                                        homogeneidad en las temperaturas, es una solución ideal en procesos y hornos de
                                        galvanización, galvanoplastía, esmaltado y cadenas de pintura.</p>
                                </div>
                                <div class="col-md-4 text-left">
                                    <img src="{{ asset('images/web/products/products/icons/icn_servicios_hogar_calentador.png') }}"
                                        class="img-fluid" alt="">
                                    <h3>Papel</h3>
                                    <p>La elaboración de pasta, papel y cartones requiere un gran consumo de energía.
                                        Por eso el GLP se utiliza especialmente para el secado y la aplicación de
                                        plásticos termocontraíbles en la industria del papel, con un alto grado de
                                        rendimiento. </p>
                                </div>
                            </div>

                        </div>

                        <div class="buttons">
                            <a href="" class="btn btn-primary--green">Solicitar asesoría</a>
                            <a href="" class="btn btn-primary">Solicitar servicio</a>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="products-content-3" role="tabpanel" aria-labelledby="products-3">
                    <div class="product-design">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('images/web/products/products/images/servicios_img_agro.png') }}"
                                    class="img-fluid" alt="cilindros">
                            </div>
                            <div class="col-md-6">
                                <div class="content">
                                    <div class="text-content">
                                        <h4>Agro</h4>
                                        <p>Optimiza tus procesos de producción de alimentos y animales en granjas con el
                                            poder del GLP Rayogas. Una alternativa flexible para cuidar el paso a paso
                                            en tu producción y obtener mejores resultados.
                                        </p>



                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features">
                            <div class="row">
                                <div class="col-md-4 text-left">
                                    <img src="{{ asset('images/web/products/products/icons/icn_servicios_agro_alimentos.png') }}"
                                        class="img-fluid" alt="">
                                    <h3>Agroindustria de alimentos</h3>
                                    <p>En cada una de las actividades productivas, el GLP a granel es la energía ideal
                                        por su gran poder calorífico, superior al Gas Natural, lo que implica mayor
                                        rapidez de calentamiento por logar una combustión perfecta sin producir
                                        contaminación, ni hollín y por no modificarse ante variables climáticas. La
                                        calidad y uniformidad del Gas Licuado facilita la regulación de la combustión.
                                    </p>

                                </div>
                                <div class="col-md-4 text-left">
                                    <img src="{{ asset('images/web/products/products/icons/icn_servicios_agro_secado.png') }}"
                                        class="img-fluid" alt="">
                                    <h3>Secado</h3>
                                    <p>Mayor control en la operación de secado de cereales, arroz, madera, frutas,
                                        forrajes, tabaco, con instalaciones acorde a las necesidades de todo tipo de
                                        productores. El secado es el método más común para conservar las cosechas, y el
                                        GLP ocupa un lugar clave en esta actividad, dado que se puede ubicar lo más
                                        cerca posible de las zonas de producción.</p>
                                </div>
                                <div class="col-md-4 text-left">
                                    <img src="{{ asset('images/web/products/products/icons/icn_servicios_agro_agroindustria.png') }}"
                                        class="img-fluid" alt="">
                                    <h3>Agroindustria Saladeros, molinos, bebidas</h3>
                                    <p>Para todo tipo de industria relacionado con los alimentos, el GLP es una
                                        excelente opción en energía y rendimiento. Potencia tus procesos de cocción,
                                        secado, ahumado, panadería, conserva, elaboración de bebidas. </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 text-left">
                                    <img src="{{ asset('images/web/products/products/icons/icn_servicios_agro_frigorificos.png') }}"
                                        class="img-fluid" alt="">
                                    <h3>Frigoríficos</h3>
                                    <p>Este tipo de industria requiere una gran cantidad de agua caliente tanto para la
                                        limpieza del establecimiento y materiales, como para la esterilización.
                                        El GLP permite mantener una temperatura estable y contar con una gran
                                        disponibilidad de agua caliente.
                                    </p>

                                </div>
                                <div class="col-md-4 text-left">
                                    <img src="{{ asset('images/web/products/products/icons/icn_servicios_agro_granjas.png') }}"
                                        class="img-fluid" alt="">
                                    <h3>Granjas y criaderos</h3>
                                    <p>Para el levante y cuidado de aves de corral, cerdos y peces.</p>
                                </div>
                                <div class="col-md-4 text-left">
                                    <img src="{{ asset('images/web/products/products/icons/icn_servicios_agro_invernaderos.png') }}"
                                        class="img-fluid" alt="">
                                    <h3>Agroindustria Invernaderos, Tambores</h3>
                                    <p>Mantén temperaturas constantes y estables durante todo el año para espacios o
                                        agua y cuidar tus plantaciones, procesos de esterilización, pasteurización,
                                        calderas, entre otros en tu industria. </p>
                                </div>
                            </div>

                        </div>

                        <div class="buttons">
                            <a href="" class="btn btn-primary--green">Solicitar asesoría</a>
                            <a href="" class="btn btn-primary">Solicitar servicio</a>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="products-content-4" role="tabpanel" aria-labelledby="products-4">
                    <div class="product-design">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ asset('images/web/products/products/images/servicios_img_horeca.png') }}"
                                    class="img-fluid" alt="cilindros">
                            </div>
                            <div class="col-md-6">
                                <div class="content">
                                    <div class="text-content">
                                        <h4>Hoteles, restaurantes y casinos</h4>
                                        <p>¡Haz que tu cliente quede satisfecho con la experiencia en tu hotel,
                                            restaurante o spa! Con un uso rápido y eficiente, brinda una atención única
                                            a tus usuarios en cada lugar de tu negocio.
                                        </p>
                                        <p>
                                            También optimiza los espacios al usar poca infraestructura volviendo más
                                            eficientes los espacios.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="features">
                            <div class="row">
                                <div class="col-md-4 text-left">
                                    <img src="{{ asset('images/web/products/products/icons/icn_servicios_horeca_estufas.png') }}"
                                        class="img-fluid" alt="">
                                    <h3>Estufas industriales</h3>
                                    <p>El consumo energético y la rapidez en la cocción de los alimentos son puntos
                                        decisivos para la cocina de tu negocio. Por esa razón, GLP Rayogas te ofrece
                                        rapidez para obtener la temperatura adecuada y agilizar los tiempos de servicio
                                        de tus comensales, y por lo tanto ampliar tu capacidad, sin desperdicios de
                                        energía adicionales esperando a que tus equipos logren la temperatura adecuada.
                                    </p>

                                </div>
                                <div class="col-md-4 text-left">
                                    <img src="{{ asset('images/web/products/products/icons/icn_servicios_hogar_calefactor.png') }}"
                                        class="img-fluid" alt="">
                                    <h3>Calefactores de ambiente y chimeneas</h3>
                                    <p>Los calefactores de ambiente con GLP Rayogas son hoy en día una excelente
                                        alternativa para ampliar sus espacios de servicio y confort hacia las terrazas y
                                        exteriores de hoteles y restaurantes. Así como las chimeneas como un gran
                                        atractivo para quienes quieren pasar un rato agradable, con impacto ecológico
                                        positivo sin exponerse a daños y contaminaciones de ambiente.</p>
                                </div>
                                <div class="col-md-4 text-left">
                                    <img src="{{ asset('images/web/products/products/icons/icn_servicios_hogar_piscina.png') }}"
                                        class="img-fluid" alt="">
                                    <h3>Climatización para piscinas</h3>
                                    <p>Lograr la temperatura ideal de las piscinas, sean interiores o exteriores, es una
                                        realidad con GLP Rayogas. La propiedad del GLP de calentar de manera rápida el
                                        agua, le permite a tus huéspedes disfrutar de la piscina obteniendo la mejor
                                        eficiencia energética, independientemente de su tamaño o localización.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 text-left">
                                    <img src="{{ asset('images/web/products/products/icons/icn_servicios_agro_agroindustria.png') }}"
                                        class="img-fluid" alt="">
                                    <h3>Hornos para panaderías y calderas de agua caliente</h3>
                                    <p>Usa en hornos para el secado de harinas, secado de pastas, de sémolas entre otros
                                        y panadería en general. También accede a una gran capacidad de reserva con una
                                        temperatura constante y con un caudal regular para la alimentar a satisfacción
                                        habitaciones, zonas húmedas y cocinas con agua caliente.
                                    </p>

                                </div>
                                <div class="col-md-4 text-left">
                                    <img src="{{ asset('images/web/products/products/icons/icn_servicios_horeca_zonas.png') }}"
                                        class="img-fluid" alt="">
                                    <h3>Calentamiento de zonas húmedas</h3>
                                    <p>En hoteles, clubes o spas, el GLP puede suplir tus necesidades de calentamiento
                                        de zonas húmedas de cualquier dimensión sin requerimientos complicados de
                                        infraestructura. Además su combustión limpia crea un menor impacto en el medio
                                        ambiente lo cual es importante para la responsabilidad social de tu negocio.</p>
                                </div>
                                <div class="col-md-4 text-left">
                                    <img src="{{ asset('images/web/products/products/icons/icn_servicios_horeca_lavanderia.png') }}"
                                        class="img-fluid" alt="">
                                    <h3>Lavandería </h3>
                                    <p>Para una instalación independiente o centralizada, el propano así mismo y eficaz
                                        optimiza el funcionamiento de las máquinas lavadoras automáticas, de los
                                        secadores rotativos y de las planchadoras. </p>
                                </div>
                            </div>

                        </div>

                        <div class="buttons">
                            <a href="" class="btn btn-primary--green">Solicitar asesoría</a>
                            <a href="" class="btn btn-primary">Solicitar servicio</a>
                        </div>

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
