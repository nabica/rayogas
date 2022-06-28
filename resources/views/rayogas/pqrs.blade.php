@extends('rayogas.layouts.master')
@section('metatags_facebook')
<meta property="og:title" content="{{ config('app.name') }} | Comunícate con nosotros ante cualquier inquietud">
<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:description"
    content="Escríbenos a través del siguiente formulario, uno de nuestros asesores se pondrá en contacto contigo lo más pronto para ayudarte.">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ asset('images/web/pqrs/pqrs_img_principal.png') }}">
@endsection
@section('metatags_seo')
<meta name="title" content="{{ config('app.name') }} | Comunícate con nosotros ante cualquier inquietud">
<meta name="description"
    content="Escríbenos a través del siguiente formulario, uno de nuestros asesores se pondrá en contacto contigo lo más pronto para ayudarte.">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="Spanish">
<meta name="revisit-after" content="30 days">
<meta name="author" content="{{ config('app.name') }}">
@endsection
@section('title', config('app.name') . ' | Comunícate con nosotros ante cualquier inquietud')
@section('content')

<section class="pqrs">
    <div class="container">
        <div class="row align-items-center pqrs__container">
            <div class="col-12  col-lg-5 pqrs__side-banner">
                <div class="pqrs__side-banner-text">

                    <h3>Estamos para <br> escucharte.</h3>
                    <p>Diligencia los siguientes campos para enviar a nuestra área de servicio al cliente la petición,
                        queja, reclamo o sugerencia que tengas y poder evaluarla.</p>
                </div>
                <div class="pqrs__side-banner-image">
                    <img src="{{ asset('images/web/pqrs/pqrs_img_principal.png') }}"
                        alt="Rayogas-gas-glp-escribenos-para-cualquier-inquetud" class="w-100">
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <form class="form__general pqrs__form row g-3 needs-validation" novalidate id='pqrs__form'>
                    @csrf
                    <div class="form__general-header line col-12 p-0">
                        <h3>Peticiones, quejas y recursos</h3>
                        <p>Digita tus datos</p>
                    </div>
                    <div class="col-md-6 mt-0">
                        <label for="name" class="form-label">Nombre</label>
                        <input name="name" type="text" class="form-control" id="name" aria-label="Nombre" required>
                        <div class="invalid-feedback">
                            Este campo es requerido
                        </div>
                    </div>
                    <div class="col-md-6 mt-0">
                        <label for="document" class="form-label">Cédula</label>
                        <input type="number" class="form-control" id="document" required name='document'>
                        <div class="invalid-feedback">
                            Este campo es requerido
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="city" class="form-label">Ciudad</label>
                        <input type="text" class="form-control" id="city" required name="city">
                        <div class="invalid-feedback">
                            Este campo es requerido
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Teléfono</label>
                        <input type="number" class="form-control" id="phone" required name='phone' minlength=7>
                        <div class="invalid-feedback">
                            Este campo es requerido
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" required name='email'>
                        <div class="invalid-feedback">
                            Este campo es requerido
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" rows="3" required name='description'></textarea>
                        <div class="invalid-feedback">
                            Este campo es requerido
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="object" class="form-label">Objeto solicitud</label>
                        <div class="select">
                            <select type="text" class="form-control" id="object" required name='object'>
                                <option disabled selected value="">Selecciona una opcion</option>
                                <option value="Calidad del gas">Calidad del gas</option>
                                <option value="Duración del gas">Duración del gas</option>
                                <option value="Servicio técnico"> Servicio técnico</option>
                                <option value="Demora del pedido">Demora del pedido</option>
                                <option value="Novedad del contrato">Novedad del contrato</option>
                                <option value="Escape de gas">Escape de gas</option>
                                <option value="Subsidios">Subsidios</option>
                                <option value="Reclamación o beneficio 12x1">Reclamación o beneficio 12x1</option>
                            </select>
                            <div class="invalid-feedback">
                                Este campo es requerido
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <label for="type" class="form-label">Tipo de solicitud</label>
                        <div class="select">
                            <select type="text" class="form-control" id="type" required name='type'>
                                <option disabled selected value="">Selecciona una opcion</option>
                                <option value="Petición">Petición</option>
                                <option value="Queja">Queja</option>
                                <option value="Reclamación">Reclamación</option>
                                <option value="Sugerencia">Sugerencia</option>
                            </select>
                            <div class="invalid-feedback">
                                Este campo es requerido
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary form__general-button" type="submit">Enviar</button>
                    </div>
                    <p class="form__general__disclaimer">Esta información esta bajo la <a
                            href="{{ asset('pdfs/politica_datos_personales.pdf') }}" target="blank">política de
                            datos
                            personales.</a>
                    </p>
                </form>
            </div>
            @include('rayogas.components.contact-bar', ['fixed'=>'true'])
        </div>
    </div>
</section>

@endsection