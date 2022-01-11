@extends('rayogas.layouts.master')
@section('content')
@include('rayogas.components.banner-general', ['title' => "El GLP una alternativa ideal", 'text' => "El GLP o Gas
Licuado de Petróleo es un combustible producto de una mezcla de hidrocarburos, principalmente propano y/o butano, que se
encuentra en estado gaseoso a presión atmosférica normal.", 'image'=> 'images/web/glp/glp_banner_main.png'])

<section class="glp glp-properties">
    <div class="container">

        <div class="glp-properties__header">
            <h3>Propiedades</h3>
            <hr>
            <p>Su propiedad de licuado permite que el GLP sea almacenado y transportado como líquido y utilizado como
                gas. De esta manera, se puede aprovechar el poco espacio que se requiere para su almacenamiento en
                estado líquido e igualmente aprovechar la calidad de combustión en su estado gaseoso.</p>
        </div>
        <div class="glp-properties__body row">
            <div class="col-12 col-md-6">
                <img src="{{ asset('images/web/glp/glp_img_principal.png') }}" alt="glp properties" class="w-100">
            </div>
            <div class="col-12 col-md-6 glp-properties__body-description">
                <h3 class="glp-properties__body-description-title">
                    ¿Por qué elegirlo?
                </h3>
                <p class="glp-properties__body-description-text">Es un combustible limpio ya que no deja residuos,
                    cenizas, ni olor, por estar libre de plomo, azufre
                    y otros productos contaminantes.</p>
                <div class="row glp-properties__body-bullet-container">

                    <div class=" col-12 glp-properties__body-bullet">

                        <img src="{{ asset('images\web\common\icn_glp_flame.png') }}" alt="">

                        <p>El poder calorífico del GLP es aproximadamente 2,5 veces mayor que el del gas natural,
                            convirtiéndose en una alternativa energética altamente eficiente.</p>
                    </div>
                    <div class=" col-12 glp-properties__body-bullet">
                        <img src="{{ asset('images\web\common\icn_glp_flame.png') }}" alt="">

                        <p>El GLP es realmente portátil al ser fácilmente transportable en las cantidades requeridas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="glp glp-recommendations">
    <div class="container">

        <h3>Recomendaciones para su uso seguro</h3>
        <hr>
        <div class="glp-recommendations__container row">
            <div class="col-12 col-md-6">
                <ul class="glp-recommendations__list">
                    <li>
                        <img src="{{ asset('images\web\common\icn_glp_bullet.png') }}" alt="alert">
                        <p>

                            Solo abre y cierra las llaves de paso. Para cualquier otra operación llámanos, 01 8000
                            959595.
                        </p>
                    </li>
                    <li><img src="{{ asset('images\web\common\icn_glp_bullet.png') }}" alt="alert">
                        <p>Solicita anualmente revisiones técnicas de conexiones, aparatos y almacena los
                            cilindros de
                            forma vertical.</p>
                    </li>
                    <li><img src="{{ asset('images\web\common\icn_glp_bullet.png') }}" alt="alert">
                        <p>Usa las mangueras o equipos especialmente diseñados para GLP.</p>
                    </li>
                    <li>
                        <img src="{{ asset('images\web\common\icn_glp_bullet.png') }}" alt="alert">
                        <p>Ten espacios abiertos y ventilados. No olvides contenidos al fuego que puedan derramarse y
                            apagar los quemadores.</p>
                    </li>
                    <li><img src="{{ asset('images\web\common\icn_glp_bullet.png') }}" alt="alert">
                        <p>No olvides el color de la llama azul parejo, sin rastros amarillentos, si los
                            identificas
                            comunícate con nosotros.</p>
                    </li>
                    <li><img src="{{ asset('images\web\common\icn_glp_bullet.png') }}" alt="alert">
                        <p>Mantén limpios los conductos de evacuación del gas.</p>
                    </li>
                    <li><img src="{{ asset('images\web\common\icn_glp_bullet.png') }}" alt="alert">
                        <p>Ante cualquier duda comunícate con nosotros a la línea 01 8000 959595.</p>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center">
                <div class="glp-recommendations__documents">
                    <ul class="glp-recommendations__documents-list">
                        <li>
                            <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                            <p>
                                Manual de seguridad del usuario.
                            </p>
                            <div>
                                <a href="" download=""> <img src="{{ asset('images\web\common\icn_download.png') }}"
                                        alt="download"></a>
                            </div>
                        </li>
                        <li> <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                            <p>Plegable montacarga</p>
                            <div>
                                <a href="" download=""> <img src="{{ asset('images\web\common\icn_download.png') }}"
                                        alt="download"></a>
                            </div>
                        </li>
                        <li> <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                            <p>Plegable usuario</p>
                            <div>
                                <a href="" download=""> <img src="{{ asset('images\web\common\icn_download.png') }}"
                                        alt="download"></a>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                            <p>Plegable granel</p>
                            <div>
                                <a href="" download=""> <img src="{{ asset('images\web\common\icn_download.png') }}"
                                        alt="download"></a>
                            </div>
                        </li>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="glp glp-about">
    <div class="container">
        <div class="row glp-about__container">
            <div class="col-12 col-md-6">
                <h3>Estudio y diseño de instalaciones para GLP</h3>
                <ul class="list-general  glp-about__list">
                    <li>RAYOGAS realiza estudios y diseños de las instalaciones de acuerdo a los requerimientos técnicos
                        y la normatividad vigente.</li>
                    <li>Análisis de consumos, determinación de la capacidad del sistema.</li>
                    <li>Diseño de redes de distribución e instalaciones internas.</li>
                    <li>Diseño de sistema de regulación y medición.</li>
                    <li>Diseño de sistemas de respaldo para gas natural, con vaporizadores y/o plantas de aire
                        propanado.</li>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <h3 class="full-w">Construcción de instalaciones de acuerdo a las necesidades del cliente</h3>
                <ul class="list-general   glp-about__list--m1">
                    <li>Conversión de equipos y sistemas de combustión para su funcionamiento con gas natural o gas
                        propano, asegurando adecuación y montaje de sistemas de seguridad de equipos y partes.</li>
                    <li>Propanoductos que requieran: obras civiles de excavación, rotura de andenes, cruces de vías,
                        prueba y puesta en servicio de la tubería y ejecución de instalaciones internas y conexión del
                        servicio a residencias.</li>
                    <li>Líneas de acero para conducción de gas.</li>
                    <li>Estaciones de medición y regulación.
                    </li>
                    <li>Instalación de recipientes de almacenamiento para GLP garantizando seguridad y confiabilidad en
                        su sistema de abastecimiento.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="glp glp-information">
    <div class="container">
        <div class="row glp-information__container">
            <div class="col-12 col-md-6">
                <h3>Instalación y almacenamiento rayogas</h3>
                <p>RAYOGAS suministra e instala la totalidad de recipientes de almacenamiento de GLP, incluyendo tanques
                    y accesorios requeridos, de manera que usted esté tranquilo de la seguridad del procedimiento.
                    De manera responsable nuestra empresa realiza el diseño, instalación, prueba y puesta en servicio de
                    plantas de almacenamiento y envasado de recipientes GLP RAYOGAS.
                    Así mismo, RAYOGAS se encarga del diseño y ejecución de las obras civiles complementarias, tales
                    como vías de acceso, plataformas de llenado, bases para tanques o cualquier otro montaje específico
                    que se requiera para cada caso de almacenamiento.</p>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{asset('images\web\glp\glp_img_instalacion.png')}}" alt="" class="w-100">
            </div>

        </div>
    </div>
</section>
<section class="glp glp-faq">
    <div class="container">

        <h3>Preguntas frecuentes </h3>
        <hr>
        <div class="glp-faq__container row mx-0 d-none d-md-flex" id="faqAccordionDesk">
            <div class="col-6 glp-faq__tabs">

                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                    data-bs-parent="#faqAccordionDesk" data-bs-target="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne">
                    <span>1.</span> ¿Cuáles son las capacidades de almacenamiento que manejamos en Rayogas?.
                </button>
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" data-bs-parent="#faqAccordionDesk" aria-expanded="false"
                    aria-controls="collapseTwo">
                    <span>2.</span> ¿Cuáles son nuestras ubicaciones en el país?
                </button>
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" data-bs-parent="#faqAccordionDesk aria-expanded=" false"
                    aria-controls="collapseThree">
                    <span>3.</span> ¿Qué diferencia hay entre el GLP y el GN?
                </button>
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" data-bs-parent="#faqAccordionDesk aria-expanded=" false"
                    aria-controls="collapseFour">
                    <span>4.</span> ¿En dónde puedo usar GLP Rayogas?
                </button>
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" data-bs-parent="#faqAccordionDesk aria-expanded=" false"
                    aria-controls="collapseFive">
                    <span>5.</span> ¿Cuáles son nuestros canales de atención?
                </button>
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSix" data-bs-parent="#faqAccordionDesk aria-expanded=" false"
                    aria-controls="collapseSix">
                    <span>6.</span>¿Qué debo hacer en caso de fuga?
                </button>
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSeven" data-bs-parent="#faqAccordionDesk aria-expanded=" false"
                    aria-controls="collapseSeven">

                    <span>7.</span>¿Qué debo hacer en caso de incendio?
                </button>




            </div>
            <div class="col-6 glp-faq__content">

                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#faqAccordionDesk">
                    <div class="accordion-body">
                        <ul class="list-general">
                            <li>
                                Cierra la válvula de alimentación del tanque o cilindro estacionario.
                            </li>
                            <li>
                                No busques fugas encendiendo fósforos.
                            </li>
                            <li>
                                Cierra las llaves de los quemadores que tenga encendidos.
                            </li>
                            <li>
                                Ventila las habitaciones de inmediato.
                            </li>
                            <li>
                                No enciendas apagadores, luces, ni aparatos eléctricos.
                            </li>
                            <li>
                                No realices llamadas telefónicas.
                            </li>
                            <li>
                                Sal de la casa o edificio.
                            </li>
                            <li>
                                Llama Bomberos: #119, Policía Local: 123 o Línea de Emergencia: 018000 959595.
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#faqAccordionDesk">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                    </div>
                </div>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#faqAccordionDesk">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                    </div>
                </div>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#faqAccordionDesk">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                    </div>
                </div>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#faqAccordionDesk">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                    </div>
                </div>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#faqAccordionDesk">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                    </div>
                </div>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                    data-bs-parent="#faqAccordionDesk">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis inventore perspiciatis
                            officia sapiente cumque ullam quidem dolor alias vel, consequatur illo animi tempora, earum
                            maiores possimus dolores voluptates quisquam esse.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="glp-faq__container row m-0 accordion accordion-flush d-md-none" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <span>1. </span> ¿Cuáles son las capacidades de almacenamiento que manejamos en Rayogas?.
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul class="list-general">
                            <li>
                                Cierra la válvula de alimentación del tanque o cilindro estacionario.
                            </li>
                            <li>
                                No busques fugas encendiendo fósforos.
                            </li>
                            <li>
                                Cierra las llaves de los quemadores que tenga encendidos.
                            </li>
                            <li>
                                Ventila las habitaciones de inmediato.
                            </li>
                            <li>
                                No enciendas apagadores, luces, ni aparatos eléctricos.
                            </li>
                            <li>
                                No realices llamadas telefónicas.
                            </li>
                            <li>
                                Sal de la casa o edificio.
                            </li>
                            <li>
                                Llama Bomberos: #119, Policía Local: 123 o Línea de Emergencia: 018000 959595.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <span>2. </span> ¿Cuáles son nuestras ubicaciones en el país?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In accusamus ratione vel eum itaque
                            quae,
                            est esse consequuntur aspernatur? Aut fuga inventore expedita, iste laudantium adipisci
                            repudiandae
                            corporis voluptatibus cum.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In accusamus ratione vel eum itaque
                            quae,
                            est esse consequuntur aspernatur? Aut fuga inventore expedita, iste laudantium adipisci
                            repudiandae
                            corporis voluptatibus cum.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In accusamus ratione vel eum itaque
                            quae,
                            est esse consequuntur aspernatur? Aut fuga inventore expedita, iste laudantium adipisci
                            repudiandae
                            corporis voluptatibus cum.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <span>3. </span> ¿Qué diferencia hay entre el GLP y el GN?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eveniet alias adipisci
                            commodi
                            nihil
                            harum, dignissimos reiciendis explicabo at! Nihil, sapiente praesentium eveniet temporibus
                            possimus
                            sit tempore voluptate et. Nulla?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eveniet alias adipisci
                            commodi
                            nihil
                            harum, dignissimos reiciendis explicabo at! Nihil, sapiente praesentium eveniet temporibus
                            possimus
                            sit tempore voluptate et. Nulla?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eveniet alias adipisci
                            commodi
                            nihil
                            harum, dignissimos reiciendis explicabo at! Nihil, sapiente praesentium eveniet temporibus
                            possimus
                            sit tempore voluptate et. Nulla?</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        <span>4. </span> ¿En dónde puedo usar GLP Rayogas?
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eveniet alias adipisci
                            commodi
                            nihil
                            harum, dignissimos reiciendis explicabo at! Nihil, sapiente praesentium eveniet temporibus
                            possimus
                            sit tempore voluptate et. Nulla?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eveniet alias adipisci
                            commodi
                            nihil
                            harum, dignissimos reiciendis explicabo at! Nihil, sapiente praesentium eveniet temporibus
                            possimus
                            sit tempore voluptate et. Nulla?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eveniet alias adipisci
                            commodi
                            nihil
                            harum, dignissimos reiciendis explicabo at! Nihil, sapiente praesentium eveniet temporibus
                            possimus
                            sit tempore voluptate et. Nulla?</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        <span>5. </span> ¿Cuáles son nuestros canales de atención?
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eveniet alias adipisci
                            commodi
                            nihil
                            harum, dignissimos reiciendis explicabo at! Nihil, sapiente praesentium eveniet temporibus
                            possimus
                            sit tempore voluptate et. Nulla?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eveniet alias adipisci
                            commodi
                            nihil
                            harum, dignissimos reiciendis explicabo at! Nihil, sapiente praesentium eveniet temporibus
                            possimus
                            sit tempore voluptate et. Nulla?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eveniet alias adipisci
                            commodi
                            nihil
                            harum, dignissimos reiciendis explicabo at! Nihil, sapiente praesentium eveniet temporibus
                            possimus
                            sit tempore voluptate et. Nulla?</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                        <span>6. </span>¿Qué debo hacer en caso de fuga?
                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eveniet alias adipisci
                            commodi
                            nihil
                            harum, dignissimos reiciendis explicabo at! Nihil, sapiente praesentium eveniet temporibus
                            possimus
                            sit tempore voluptate et. Nulla?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eveniet alias adipisci
                            commodi
                            nihil
                            harum, dignissimos reiciendis explicabo at! Nihil, sapiente praesentium eveniet temporibus
                            possimus
                            sit tempore voluptate et. Nulla?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eveniet alias adipisci
                            commodi
                            nihil
                            harum, dignissimos reiciendis explicabo at! Nihil, sapiente praesentium eveniet temporibus
                            possimus
                            sit tempore voluptate et. Nulla?</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                        <span>7. </span>¿Qué debo hacer en caso de incendio?
                    </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eveniet alias adipisci
                            commodi
                            nihil
                            harum, dignissimos reiciendis explicabo at! Nihil, sapiente praesentium eveniet temporibus
                            possimus
                            sit tempore voluptate et. Nulla?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eveniet alias adipisci
                            commodi
                            nihil
                            harum, dignissimos reiciendis explicabo at! Nihil, sapiente praesentium eveniet temporibus
                            possimus
                            sit tempore voluptate et. Nulla?</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eveniet alias adipisci
                            commodi
                            nihil
                            harum, dignissimos reiciendis explicabo at! Nihil, sapiente praesentium eveniet temporibus
                            possimus
                            sit tempore voluptate et. Nulla?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@include('rayogas.components.footer')
@endsection