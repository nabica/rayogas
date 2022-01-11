@extends('rayogas.layouts.master')
@section('content')
@include('rayogas.components.banner-general', ['title' => "El GLP es la clave en los procesos de generación", 'text' =>
"Para el proceso de formalización del gas propano, el sector ha realizado una reingeniería de su distribución con una
estructura empresarial sólida.", 'image'=> '/images/web/blog/blog_banner_main.png'])
<section class="blog">
    <div class="container">
        <div class="blog__image">

            <img src="{{asset('images/web/placeholders/612X351.png')}}" alt="" class="img-fluid">
        </div>
        <div class="blog__text">
            <p>Desde enero del 2010 el sector del Gas Licuado de Petróleo (GLP), más conocido como gas propano está en
                un proceso de formalización. Así mismo, durante los últimos seis meses (enero-junio 2016) estuvo en un
                proceso de regulación para su actividad.

                <br>
                Las empresas colombianas que operan con socios extranjeros en la distribución del gas propano están
                reunidas en el gremio Gasnova, que preside Nicolás Botero-Páramo Gaviria

                <br>
                Gasnova no solo afirma que en el negocio hay mucho camino por recorrer, sino que, además, para el corto
                y mediano plazo será tan rentable como el de la gasolina o el gas natural.

                ¿Cuáles son los beneficios que traerá para el sector el proceso de regulación del GLP?

                <br>
                La regulación terminará por abrir la válvula para fortalecer la penetración del gas propano en el
                segmento residencial, y de paso llevar el negocio a otros niveles como el del transporte de carga o de
                pasajeros, el transporte náutico, actividades agroindustriales, incluso para la generación de energía en
                zonas no interconectadas.

                <br>
                Desde el 2010 el negocio del GLP entró en un proceso de formalización, ¿cuál ha sido el aporte de las
                empresas extranjeras al sector?


            </p>
        </div>

    </div>
</section>
<section class='highlights'>
    <div class="highlights__header">
        <h3>Últimas Noticias</h3>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <a href="#" class="col-lg-4 col-md-6 col-12 blog-list__item">
                <img src="{{asset('images/web/blog/img_blog_preview_1.png')}}" alt="" class="w-100">
                <div class="blog-list__item-description">
                    <div class="blog-list__item-title">
                        <h3>Ecopetrol subastará el 90% de GLP que produce en el país</h3>
                        <hr>
                    </div>
                    <p class="blog-list__item-text">El próximo viernes Ecopetrol asignará, para los siguientes seis
                        meses, la distribución nacional del volumen total de Gas Licuado de Propano (GLP), que produce
                        en las refinerías de Cartagena y Barrancabermeja, así como en los campos de Cusiana y Apiay, y
                        en la planta de Dina.</p>
                </div>
            </a>
            <a href="#" class="col-lg-4 col-md-6 col-12 blog-list__item">
                <img src="{{asset('images/web/blog/img_blog_preview_2.png')}}" alt="" class="w-100">
                <div class="blog-list__item-description">
                    <div class="blog-list__item-title">
                        <h3>Esfuerzo oficial no alcanzó para cubrir consumo de Gas Licuado de
                            Propano</h3>
                        <hr>
                    </div>
                    <p class="blog-list__item-text">Aunque la entrada en funcionamiento de Reficar y Termoyopal ayudó a
                        resolver la crisis por el desabastecimiento de Gas Licuado de Propano (GLP) en el país, aún
                        existen problemas para que la oferta pueda atender debidamente la creciente demanda de este
                        combustible.</p>
                </div>
            </a>
            <a href="#" class="col-lg-4 col-md-6 col-12 blog-list__item">
                <img src="{{asset('images/web/blog/img_blog_preview_3.png')}}" alt="" class="w-100">
                <div class="blog-list__item-description">
                    <div class="blog-list__item-title">
                        <h3>¿Por qué el GLP es una buena alternativa de combustible para el
                            país?</h3>
                        <hr>
                    </div>
                    <p class="blog-list__item-text">El GLP se ajusta a la realidad económica de los hogares tanto en
                        costo como en beneficio. Solo basta con ver en el mundo a los vehículos que utilizan gas propano
                        y que tienen un rendimiento mucho mayor con relación al número de kilómetros que recorren.</p>
                </div>
            </a>
        </div>
    </div>
</section>
@include('rayogas.components.footer')
@endsection
