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
@include('rayogas.components.blog-highlights')
@endsection