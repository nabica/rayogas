@extends('rayogas.layouts.master')
@section('content')
@include('rayogas.components.banner-general', ['title' => "Ponte al día sobre todo lo relacionado al GLP", 'text' =>
"Descubre datos interesantes sobre el GLP (Gas Licuado de Petróleo), noticas, casos de éxito, avances, entre otros temas
que sabemos te interesan.", 'image'=> 'images/web/blog/blog_banner_main.png'])
<section class="blog-list">
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
            <a href="#" class="col-lg-4 col-md-6 col-12 blog-list__item">
                <img src="{{asset('images/web/blog/img_blog_preview_4.png')}}" alt="" class="w-100">
                <div class="blog-list__item-description">
                    <div class="blog-list__item-title">
                        <h3>El GLP es la clave en los procesos de generación</h3>
                        <hr>
                    </div>
                    <p class="blog-list__item-text">Desde enero del 2010 el sector del Gas Licuado de Petróleo (GLP),
                        más conocido como gas propano está en un proceso de formalización. Así mismo, durante los
                        últimos seis meses (enero-junio 2016) estuvo en un proceso de regulación para su actividad. </p>
                </div>
            </a>
            <a href="#" class="col-lg-4 col-md-6 col-12 blog-list__item">
                <img src="{{asset('images/web/blog/img_blog_preview_5.png')}}" alt="" class="w-100">
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
                <img src="{{asset('images/web/blog/img_blog_preview_6.png')}}" alt="" class="w-100">
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
        <nav aria-label="Page navigation" class="blog-list__pagination">
            <ul class="pagination">
                <!--                 <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li> -->
                <li class="page-item "><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</section>
@include('rayogas.components.footer')
@endsection