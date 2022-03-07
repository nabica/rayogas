@extends('rayogas.layouts.master')
@section('metatags_facebook')
  <meta property="og:title" content="{{ config('app.name') }} | Qué es el GLP, usos, eficiencia y ¡más! ">
  <meta property="og:site_name" content="{{ config('app.name') }}">
  <meta property="og:url" content="{{ Request::url() }}">
  <meta property="og:description" content="El GLP es un combustible nacido de una mezcla de hidrocarburos. Un gas limpio ya que no deja residuos, ni olor, por estar libre de agentes contaminantes.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="{{ $glpBanner->image_url }}">
@endsection
@section('metatags_seo')
    <meta name="title" content="{{ config('app.name') }} | Qué es el GLP, usos, eficiencia y ¡más! ">
    <meta name="description" content="El GLP es un combustible nacido de una mezcla de hidrocarburos. Un gas limpio ya que no deja residuos, ni olor, por estar libre de agentes contaminantes.">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Spanish">
    <meta name="revisit-after" content="30 days">
    <meta name="author" content="{{ config('app.name') }}">
@endsection
@section('title', config('app.name') . ' | Qué es el GLP, usos, eficiencia y ¡más! ')
@section('content')

@component('rayogas.components.banner')
@slot('id')banner-glp @endslot
@isset($glpBanner->image)
@slot('image'){{ $glpBanner->image_url }} @endslot
@endisset
@slot('title'){{ $glpBanner->title }} @endslot
@slot('description'){{ $glpBanner->description }} @endslot
@endcomponent

<section class="glp glp-properties">
    <div class="container">

        <div class="glp-properties__header">
            @component('rayogas.components.heading-title')
            @slot('title')Propiedades @endslot
            @endcomponent
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
                        <img src="{{ asset('images\web\common\icn_glp_cilindro.png') }}" alt="">

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
        @component('rayogas.components.heading-title')
        @slot('title')Recomendaciones para su uso seguro @endslot
        @endcomponent

        <div class="glp-recommendations__container row">
            <div class="col-12 col-md-6">
                <ul class="glp-recommendations__list">
                    @foreach($glpRecommendationTips as $glpRecommendationTip)
                    <li>
                        <img src="{{ asset('images\web\common\icn_glp_bullet.png') }}" alt="alert">
                        <p>
                            {{ $glpRecommendationTip->title }}
                        </p>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-center">
                <div class="glp-recommendations__documents">
                    <ul class="glp-recommendations__documents-list">
                        @foreach($glpRecommendationPdfs as $glpRecommendationPdf)
                        <li>
                            <a href="{{ $glpRecommendationPdf->file_url}}" target="blank">
                                <div>
                                    <img src="{{ asset('images\web\common\icn_pdf_download.png') }}" alt="download">
                                    <p>
                                        {{ $glpRecommendationPdf->title }}
                                    </p>
                                </div>
                                <div>
                                    <i class="icon-download"></i>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
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
        @component('rayogas.components.heading-title')
        @slot('title')Preguntas frecuentes @endslot
        @endcomponent

        <!-- Accordion Desk -->
        <div class="glp-faq__container row mx-0 d-none d-md-flex" id="faqAccordionDesk">
            <div class="col-6 glp-faq__tabs">
                @foreach($glpFaqs as $glpFaq)
                <button class="accordion-button {{ $loop->index == 0 ? '' : 'collapsed' }}" type="button"
                    data-bs-toggle="collapse" data-bs-parent="#faqAccordionDesk"
                    data-bs-target="#collapse-{{ $glpFaq->id }}" aria-expanded="true"
                    aria-controls="collapse-{{ $glpFaq->id }}">
                    <span>{{ $loop->index + 1 }}. </span> {{ $glpFaq->title }}
                </button>
                @endforeach
            </div>
            <div class="col-6 glp-faq__content">
                @foreach($glpFaqs as $glpFaq)
                <div id="collapse-{{ $glpFaq->id }}"
                    class="accordion-collapse collapse {{ $loop->index == 0 ? 'show' : '' }}"
                    aria-labelledby="headingOne" data-bs-parent="#faqAccordionDesk">
                    <div class="accordion-body">
                        {!! $glpFaq->description !!}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End Accordion Desk -->

        <!-- Accordion Mobile -->
        <div class="glp-faq__container row m-0 accordion accordion-flush d-md-none" id="accordionFlushExample">
            @foreach($glpFaqs as $glpFaq)
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading-{{ $glpFaq->id }}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse-{{ $glpFaq->id }}" aria-expanded="false"
                        aria-controls="flush-collapse-{{ $glpFaq->id }}">
                        <span>{{ $loop->index + 1 }}. </span> {{ $glpFaq->title }}
                    </button>
                </h2>
                <div id="flush-collapse-{{ $glpFaq->id }}" class="accordion-collapse collapse"
                    aria-labelledby="flush-heading-{{ $glpFaq->id }}" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        {!! $glpFaq->description !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- End Accordion Mobile -->
    </div>

</section>

@endsection
