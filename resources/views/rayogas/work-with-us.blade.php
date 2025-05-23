@extends('rayogas.layouts.master')
@section('metatags_facebook')
<meta property="og:title" content="{{ config('app.name') }} | Trabaja en Rayogas">
<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:description"
    content="Entérate de las ofertas de empleo que tenemos para ti y aplica a ellas. Revisaremos tu perfil y podrás hacer parte del equipo Rayogas">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ asset('images/web/pqrs/pqrs_img_principal.png') }}">
@endsection
@section('metatags_seo')
<meta name="title" content="{{ config('app.name') }} | Trabaja en Rayogas">
<meta name="description"
    content="Entérate de las ofertas de empleo que tenemos para ti y aplica a ellas. Revisaremos tu perfil y podrás hacer parte del equipo Rayogas">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="Spanish">
<meta name="revisit-after" content="30 days">
<meta name="author" content="{{ config('app.name') }}">
@endsection
@section('title', config('app.name') . ' | Trabaja en Rayogas')
@section('content')

<section class="section work-with-us">
    <div class="d-lg-none col-lg-6 work-with-us__banner">

    </div>
    <div class="container">
        <div class="row">
            <div class="d-none d-lg-block col-lg-6 work-with-us__banner">
                <!-- <img
                        src="/assets/images/work-with-us/img_work-with-us_main.jpg"
                        class="img-fluid"
                        alt=""
                    /> -->
            </div>
            <div class="col-12 col-lg-6 work-with-us__form">
                <form class="form__general needs-validation" novalidate>
                    <div class="form__general-header line col-12 p-0">
                        <h1 style="color: #009ee3;">Trabaja con nosotros</h1>
                    </div>
                    <div class="col-12 mt-4 mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        <div class="invalid-feedback">
                            Este campo es requerido
                        </div>
                    </div>


                    <div class="col-12 mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <div class="invalid-feedback">
                            Este campo es requerido
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="phone" class="form-label">Teléfono</label>
                        <input type="number" class="form-control" id="phone" name="phone" required>
                        <div class="invalid-feedback">
                            Este campo es requerido
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <label for="file" class="custom-file-input" id="file-label">Cargar archivo</label>
                        <input type="file" class="form-control" id="file" name="file" required>
                        <div class="invalid-feedback">
                            Este campo es requerido
                        </div>
                        <div class="help-message">Archivo en formato PDF y peso máximo 5MB</div>
                    </div>

                    <div class="col-12">
                        <button class="form__general-button" type="submit">Enviar</button>
                    </div>
                    <p class="form__general__disclaimer mt-3">Esta información esta bajo la <a
                            href="{{ asset('pdfs/politica_datos_personales.pdf') }}" target="blank">política de
                            datos
                            personales.</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
</section>

@endsection