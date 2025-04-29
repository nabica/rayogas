@extends('rayogas.layouts.master')
<link rel="stylesheet" href="{{ asset('css/rayogas/blogs.css') }}">
@section('metatags_facebook')
<meta property="og:title" content="{{ config('app.name') }} | Blog - ¡Artículos que te interesan sobre el GLP!">
<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:description"
    content="Descubre datos interesantes sobre el GLP (Gas Licuado de Petróleo), como noticas, casos de éxito, avances, y más temas de este gas y su impacto en el país.">
<meta property="og:type" content="website">
@endsection
@section('metatags_seo')
<meta name="title" content="{{ config('app.name') }} | Blog - ¡Artículos que te interesan sobre el GLP!">
<meta name="description"
    content="Descubre datos interesantes sobre el GLP (Gas Licuado de Petróleo), como noticas, casos de éxito, avances, y más temas de este gas y su impacto en el país.">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="Spanish">
<meta name="revisit-after" content="30 days">
<meta name="author" content="{{ config('app.name') }}">
@endsection
@section('title', config('app.name') . ' | Blog - ¡Artículos que te interesan sobre el GLP!')
@section('content')
<link rel="stylesheet" href="{{ asset('css/rayogas/blogs.css') }}">

<body class="body-blog">
    <div class="tittle-content">
        <h2 class="tittle-principal">Lorem commodo dui.<br>volutpat id lacus Ut</h2>
        <p class="tittle-subtext">Morbi ultrices quam Quisque vel vel orci quis ex luctus viverra turpis porta.</p>
    </div>

    <section class="blog-list">
        <div class="container">
            @foreach ($blogs as $blog)
            <div class="card-blog">
                <img src="{{ $blog->card_image }}" class="img-blog" alt="Imagen del blog">
                <div class="card-body">
                    <h4 class="card-title">{{ $blog->title }}</h4>
                    <a href="" class="btn-ver-mas">Ver más</a>
                </div>
            </div>
            @endforeach

        </div>
        <div class="load-more-container">
            <button id="loadMore" class="btn-load-more">Ver más</button>
        </div>
    </section>

    <section class="container footer-blog">
        <div class="logo">
            <img src="{{ asset('images/web/common/img_logo_flame_map.png') }}" class="img-fluid logo-blog"
                alt="logo flama rayogas">
        </div>
        <h2 class="tittle-footer">Lorem commodo dui.<br>volutpat id lacus Ut</h2>
        </div>
    </section>
    <section class="container form-blog">
        <form action="#" class="blog-contact-form">
            <div class="content-form-tittle">
                <h2 class="tittle-form">Contáctanos ahora mismo</h2>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <label for="first_name" class="form-label">Primer apellido</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                </div>
                <div class="col-md-6">
                    <label for="last_name" class="form-label">Segundo apellido</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                </div>
            </div>
            <div class="col-12 mt-4 mb-3">
                <label for="company" class="form-label">Empresa u organización</label>
                <input type="text" class="form-control" id="company" name="company" required>
            </div>
            <div class="col-12 mt-4 mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-12 mt-4 mb-3">
                <label for="phone" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="col-12 mt-4 mb-3">
                <label for="subject" class="form-label">Cómo podemos ayudarte</label>
                <input type="text" class="form-control" id="subject" name="subject" required>
            </div>
            <div class="col-12 mt-4 mb-3">
                <label for="message" class="form-label">Mensaje</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <div class="col-12">
                <button class="form__general-button" type="submit">Enviar</button>
            </div>
        </form>

    </section>
</body>
@endsection