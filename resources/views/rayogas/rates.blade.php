@extends('rayogas.layouts.master')
@section('metatags_facebook')
  <meta property="og:title" content="{{ config('app.name') }} | Qué es el GLP, usos, eficiencia y ¡más! ">
  <meta property="og:site_name" content="{{ config('app.name') }}">
  <meta property="og:url" content="{{ Request::url() }}">
  <meta property="og:description" content="El GLP es un combustible nacido de una mezcla de hidrocarburos. Un gas limpio ya que no deja residuos, ni olor, por estar libre de agentes contaminantes.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="">
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
@section('title', config('app.name') . ' | Tarifas')
@section('content')


<section class="section rates">
    <div class="container">

         @component('rayogas.components.heading-title')
            @slot('title')Tarifas @endslot
            @slot('description')Encuentra nuestro servicio en las principales ciudades del país. @endslot
        @endcomponent


        <div class="glp-properties__body row">
            <div class="col-12">
                <div class="download-card">
                    @foreach($ratesRow as $rateRow)

                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="download-card__list">
                            <li>
                                <a href="{{ $rateRow['firstCol']['file'] }}" target="blank">
                                    <div>
                                        <img src="/images/web/common/icn_pdf_download.png" alt="download">
                                        <p>
                                            {{ $rateRow['firstCol']['title'] }}
                                        </p>
                                    </div>
                                    <div>
                                        <i class="icon-download"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="download-card__list">
                            <li>
                                <a href="{{ $rateRow['secondCol']['file'] }}" target="blank">
                                    <div>
                                        <img src="/images/web/common/icn_pdf_download.png" alt="download">
                                        <p>
                                            {{ $rateRow['secondCol']['title'] }}
                                        </p>
                                    </div>
                                    <div>
                                        <i class="icon-download"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
