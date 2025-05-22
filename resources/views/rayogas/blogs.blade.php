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
<link rel="stylesheet" href="{{ asset('css/rayogas/blogs.scss') }}">

<body class="body-blog">
    <div class="tittle-content">
        <h2 class="tittle-principal">Lorem commodo dui.<br>volutpat id lacus Ut</h2>
        <p class="tittle-subtext">Morbi ultrices quam Quisque vel vel orci quis ex luctus viverra turpis porta.</p>
    </div>

    <section class="blog-list">
        <div class="parent-blog">
            @foreach ($blogs as $blog)
            <div class="card-blog">
                <img src="{{ $blog->card_image }}" class="img-blog" alt="Img del blog">
                <div class="card-body">
                    <h4 class="card-title">{{ $blog->title }}</h4>
                    <a href="" class="btn-see-more">Ver más</a>
                </div>
            </div>
            @endforeach

        </div>
        <div class="load-more-container">
            <button id="loadMore" class="btn-load-more">Ver más</button>
        </div>
    </section>


    <div class="container footer-blog">
        <div class="logo">
            <img src="{{ asset('images/web/common/img_logo_flame_map.png') }}" class="img-fluid logo-blog"
                alt="logo flama rayogas">
        </div>
        <h2 class="tittle-footer">Lorem commodo dui.<br>volutpat id lacus Ut</h2>
    </div>
    </div>

    <section class="container form-blog">

        </div>
        <div class="row form-container">

            <div class="form-left">
                <h1 class="lets-talk">¡Hablemos!</h1>
                <p class="form-description">Estamos aquí para ayudarte a alcanzar tus objetivos energéticos.
                    Contáctanos hoy mismo y descubre cómo Rayogas puede optimizar tu suministro y transformar tu negocio
                </p>
                <div class="container-phone">
                    <img src="{{ asset('images/web/common/icn-phone.png') }}" class="img-fluid icn-check" alt="Icon check">
                    <p class="phone-number">Llámanos: +57 1 32019829128</p>
                </div>
                <h3 class="tittle-3">Lorem ipsum dolor sit amet.</h3>
                <div class="list-contact">
                    <div class="item-container">
                        <img src="{{ asset('images/web/common/icn_check.png') }}" class="img-fluid icn-check" alt="logo flama rayogas">
                        <p class="item">Lorem ipsum</p>
                    </div>
                    <div class="item-container">
                        <img src="{{ asset('images/web/common/icn_check.png') }}" class="img-fluid icn-check" alt="logo flama rayogas">
                        <p class="item">Lorem ipsum</p>
                    </div>
                    <div class="item-container">
                        <img src="{{ asset('images/web/common/icn_check.png') }}" class="img-fluid icn-check" alt="logo flama rayogas">
                        <p class="item">Lorem ipsum</p>
                    </div>
                    <div class="item-container">
                        <img src="{{ asset('images/web/common/icn_check.png') }}" class="img-fluid icn-check" alt="logo flama rayogas">
                        <p class="item">Lorem ipsum</p>
                    </div>
                    <div class="item-container">
                        <img src="{{ asset('images/web/common/icn_check.png') }}" class="img-fluid icn-check" alt="logo flama rayogas">
                        <p class="item">Lorem ipsum</p>
                    </div>
                    <div class="item-container">
                        <img src="{{ asset('images/web/common/icn_check.png') }}" class="img-fluid icn-check" alt="logo flama rayogas">
                        <p class="item">Lorem ipsum</p>
                    </div>
                </div>
                <h3 class="tittle-3">Lorem ipsum dolor sit amet.</h3>
                <div class="stepbystep-contact">
                    <h3 class="number-h3">1</h3>
                    <p class="stepbystep-descr write-to-us">Escríbenos</p>
                    <img src="{{ asset('images/web/common/arrow-right.png') }}" class="img-fluid arrow-right" alt="arrow right">
                    <h3 class="number-h3">2</h3>
                    <p class="stepbystep-descr">Analizaremos tu solicitud</p>
                    <img src="{{ asset('images/web/common/arrow-right.png') }}" class="img-fluid arrow-right" alt="arrow right">
                    <h3 class="number-h3">3</h3>
                    <p class="stepbystep-descrip">Te contáctaremos</p>
                </div>
            </div>
            <div class="form-right">
                <form action="#" class="blog-contact-form">
                    <div class="content-form-tittle">
                        <h3 class="tittle-form">Contáctanos ahora mismo</h3>
                    </div>
                    <hr>
                    <div class="row full-names">
                        <div class="col-md-5 row-names">
                            <label for="first_name" class="form-label">Primer apellido</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>
                        <div class="col-md-5 row-names">
                            <label for="last_name" class="form-label">Segundo apellido</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    <div class="col-12 mt-4 mb-3">
                        <label for="company" class="form-label info">Empresa u organización</label>
                        <input type="text" class="form-control" id="company" name="company" required>
                    </div>
                    <div class="col-12 mt-4 mb-3">
                        <label for="email" class="form-label info">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col-12 mt-4 mb-3">
                        <label for="phone" class="form-label info">Teléfono</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="col-12 mt-4 mb-3">
                        <label for="subject" class="form-label info">Cómo podemos ayudarte</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="col-12 mt-4 mb-3">
                        <label for="message" class="form-label info">Mensaje</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <div class="col-12">
                        <button class="form__general-button button_submit" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
@endsection