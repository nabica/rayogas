@extends('rayogas.layouts.master')
@section('content')

@component('rayogas.components.banner')
@slot('id')banner-blog @endslot
@isset($blogBanner->image)
@slot('image'){{ $blogBanner->image_url }} @endslot
@endisset
@slot('title'){{ $blogBanner->title }} @endslot
@slot('description'){{ $blogBanner->description }} @endslot
@endcomponent

<section class="transparency">
    <div class="container">
        <div class="tabs">
            <div class="tabs-menu">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="transparency-tab-1" data-bs-toggle="tab"
                            data-bs-target="#transparency-content-1" type="button" role="tab"
                            aria-controls="transparency-content-1" aria-selected="true">Mecanismos de contacto</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="transparency-tab-2" data-bs-toggle="tab"
                            data-bs-target="#transparency-content-2" type="button" role="tab"
                            aria-controls="transparency-content-2" aria-selected="false">Información de interés</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="transparency-tab-3" data-bs-toggle="tab"
                            data-bs-target="#transparency-content-3" type="button" role="tab"
                            aria-controls="transparency-content-3" aria-selected="false">Estructura
                            orgánica y TH</button>
                    </li>
                    <li class="nav-item d-none d-md-block" role="presentation">
                        <button class="nav-link" id="transparency-tab-4" data-bs-toggle="tab"
                            data-bs-target="#transparency-content-4" type="button" role="tab"
                            aria-controls="transparency-content-4" aria-selected="false">Normatividad</button>
                    </li>
                    <li class="nav-item d-none d-md-block" role="presentation">
                        <button class="nav-link" id="transparency-tab-5" data-bs-toggle="tab"
                            data-bs-target="#transparency-content-5" type="button" role="tab"
                            aria-controls="transparency-content-5" aria-selected="false">Planeación</button>
                    </li>
                    <li class="nav-item d-none d-md-block" role="presentation">
                        <button class="nav-link" id="transparency-tab-6" data-bs-toggle="tab"
                            data-bs-target="#transparency-content-6" type="button" role="tab"
                            aria-controls="transparency-content-6" aria-selected="false">Control</button>
                    </li>
                </ul>
            </div>
            <div class="tabs-menu d-md-none">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="transparency-tab-4-mobile" data-bs-toggle="tab"
                            data-bs-target="#transparency-content-4" type="button" role="tab"
                            aria-controls="transparency-content-4" aria-selected="false">Normatividad</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="transparency-tab-5-mobile" data-bs-toggle="tab"
                            data-bs-target="#transparency-content-5" type="button" role="tab"
                            aria-controls="transparency-content-5" aria-selected="false">Planeación</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="transparency-tab-6-mobile" data-bs-toggle="tab"
                            data-bs-target="#transparency-content-6" type="button" role="tab"
                            aria-controls="transparency-content-6" aria-selected="false">Control</button>
                    </li>
                </ul>
            </div>
            <div class="tabs-menu">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="transparency-tab-7" data-bs-toggle="tab"
                            data-bs-target="#transparency-content-7" type="button" role="tab"
                            aria-controls="transparency-content-7" aria-selected="false">Trámites y servicios</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="transparency-tab-8" data-bs-toggle="tab"
                            data-bs-target="#transparency-content-8" type="button" role="tab"
                            aria-controls="transparency-content-8" aria-selected="false">Instrumentos
                            gestión información</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="transparency-tab-9" data-bs-toggle="tab"
                            data-bs-target="#transparency-content-9" type="button" role="tab"
                            aria-controls="transparency-content-9" aria-selected="false">Transparencia pasiva</button>
                    </li>
                    <li class="nav-item d-none d-md-block" role="presentation">
                        <button class="nav-link" id="transparency-tab-10" data-bs-toggle="tab"
                            data-bs-target="#transparency-content-10" type="button" role="tab"
                            aria-controls="transparency-content-10" aria-selected="false">Protección datos
                            personales</button>
                    </li>
                    <li class="nav-item d-none d-md-block" role="presentation">
                        <button class="nav-link" id="transparency-tab-11" data-bs-toggle="tab"
                            data-bs-target="#transparency-content-11" type="button" role="tab"
                            aria-controls="transparency-content-11" aria-selected="false">Resolución CREG 080 de
                            2019</button>
                    </li>
                </ul>
            </div>
            <div class="tabs-menu d-md-none">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item " role="presentation">
                        <button class="nav-link" id="transparency-tab-10-mobile" data-bs-toggle="tab"
                            data-bs-target="#transparency-content-10" type="button" role="tab"
                            aria-controls="transparency-content-10" aria-selected="false">Protección datos
                            personales</button>
                    </li>
                    <li class="nav-item " role="presentation">
                        <button class="nav-link" id="transparency-tab-11-mobile" data-bs-toggle="tab"
                            data-bs-target="#transparency-content-11" type="button" role="tab"
                            aria-controls="transparency-content-11" aria-selected="false">Resolución CREG 080 de
                            2019</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="tab-content tabs-content" id="myTabContent">
        <div class="tab-pane fade show active" id="transparency-content-1" role="tabpanel"
            aria-labelledby="transparency-tab-1">
            @include('rayogas.components.transparency-content.contact-mechanics')
        </div>
        <div class="tab-pane fade " id="transparency-content-2" role="tabpanel" aria-labelledby="transparency-tab-2">
            @include('rayogas.components.transparency-content.interest')
        </div>
        <div class="tab-pane fade " id="transparency-content-3" role="tabpanel" aria-labelledby="transparency-tab-3">
            @include('rayogas.components.transparency-content.structure')
        </div>
        <div class="tab-pane fade " id="transparency-content-4" role="tabpanel" aria-labelledby="transparency-tab-4">
            @include('rayogas.components.transparency-content.normativity')
        </div>
        <div class="tab-pane fade " id="transparency-content-5" role="tabpanel" aria-labelledby="transparency-tab-5">
            @include('rayogas.components.transparency-content.planning')
        </div>
        <div class="tab-pane fade " id="transparency-content-6" role="tabpanel" aria-labelledby="transparency-tab-6">
            @include('rayogas.components.transparency-content.control')
        </div>
        <div class="tab-pane fade " id="transparency-content-7" role="tabpanel" aria-labelledby="transparency-tab-7">
            @include('rayogas.components.transparency-content.services')
        </div>
        <div class="tab-pane fade " id="transparency-content-8" role="tabpanel" aria-labelledby="transparency-tab-8">
            @include('rayogas.components.transparency-content.instruments')
        </div>
        <div class="tab-pane fade " id="transparency-content-9" role="tabpanel" aria-labelledby="transparency-tab-9">
            @include('rayogas.components.transparency-content.passive-transparency')
        </div>
        <div class="tab-pane fade " id="transparency-content-10" role="tabpanel" aria-labelledby="transparency-tab-10">
            @include('rayogas.components.transparency-content.personal-data')
        </div>
        <div class="tab-pane fade " id="transparency-content-11" role="tabpanel" aria-labelledby="transparency-tab-11">
            @include('rayogas.components.transparency-content.creg')
        </div>
    </div>
</section>
@endsection