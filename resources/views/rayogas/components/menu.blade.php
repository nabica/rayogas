<!-- Navbar menu -->
<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid d-lg-none mobile-container" id='mobile-buttons'>
        <div class="navbar-buttons">
            <a href="" id="login-button">
                <img src="{{ asset('images/web/common/icn_login_autogestion.png') }}"
                    class="img-fluid" alt="icono inicio sesión rayogas">
                Iniciar sesión
            </a>
        </div>
    </div>
    <div class="container">
        <a class="navbar-brand" href="{{ route('rayogas.home') }}"> <img
                src="{{ asset('images/web/common/img_logo_azul_header.png') }}"
                alt="Logo {{ config('app.name') }}"></a>

        @if (isset($navbar) != null)
        <div>
            <div class="d-lg-none navbar-buttons ">
                <button type='button' id="btnAccessibilityMobile"
                    class="btn-accessibility">
                    AA
                </button>
                <div id="accessibility-menu-mobile"
                    class="accessibility-menu">
                    <div class="accessibility-menu__triangle">
                        <div class="arrow-up"></div>
                    </div>
                    <div class="accessibility-menu__header">
                        <img src="{{ asset('images/web/common/icn_accesibilidad_modal copy.png') }}"
                            alt="">
                        <h3>Accesibilidad</h3>
                    </div>
                    <div class="row accessibility-menu__body">
                        <div class="col-6 mb-3">
                            <button class='increaseText'><img
                                    src="{{ asset('images/web/common/letterPlus.png') }}"
                                    alt=""></button>
                            <p>Aumentar texto</p>
                        </div>
                        <div class="col-6 mb-3">
                            <button class="decreaseText"><img
                                    src="{{ asset('images/web/common/letterMinus.png') }}"
                                    alt=""></button>
                            <p>Reducir texto</p>
                        </div>
                        <div class="col-6">
                            <button class="contrast-btn"><img
                                    src="{{ asset('images/web/common/eye.png') }}"
                                    alt=""></button>
                            <p>Contraste</p>
                        </div>
                        <div class="col-6">
                            <button class="only-text-btn"><img
                                    src="{{ asset('images/web/common/eye.png') }}"
                                    alt=""></button>
                            <p>Solo texto</p>
                        </div>
                    </div>
                </div>
                <button class="navbar-toggler d-lg-none" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown"
                    aria-expanded="false" aria-label="Toggle navigation"
                    id='navbar_button'>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="{{ Request::is('/') ? 'nav-link active' : 'nav-link' }}"
                        aria-current=" page"
                        href="{{ route('rayogas.home') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Request::is('nosotros') ? 'nav-link active' : 'nav-link' }}"
                        href="{{ route('rayogas.about') }}">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Request::is('productos-y-servicios') ? 'nav-link active' : 'nav-link' }}"
                        href="{{ route('rayogas.products') }}">Productos y
                        Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Request::is('glp') ? 'nav-link active' : 'nav-link' }}"
                        href="{{ route('rayogas.glp') }}">GLP</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Request::is('trabaja-con-nosotros') ? 'nav-link active' : 'nav-link' }}"
                        href="{{ route('rayogas.work-with-us') }}">Trabaje
                        con nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Request::is('blog') ? 'nav-link active' : 'nav-link' }}"
                        href="{{ route('rayogas.blog') }}">Blog</a>
                </li>
            </ul>
            <hr class="d-lg-none">
            <div class="mobile__options container d-lg-none">
                <a
                    href="{{ route('rayogas.transparency') }}">Transparencia</a>
                <a href="{{ route('rayogas.rates') }}">Tarifas</a>
                <a href="{{ asset('pdfs/politica_datos_personales.pdf') }}"
                    target="_blank">Política de datos
                    personales</a>
            </div>
        </div>
        <div class="navbar-buttons d-none d-lg-flex">
            <div class="accessibility-container">
                <button type='button' id="btnAccessibility"
                    class="btn-accessibility">
                    AA
                </button>
                <div id="accessibility-menu" class="accessibility-menu">
                    <div class="accessibility-menu__triangle">
                        <div class="arrow-up"></div>
                    </div>
                    <div class="accessibility-menu__header">
                        <img src="{{ asset('images/web/common/icn_accesibilidad_modal copy.png') }}"
                            alt="">
                        <h3>Accesibilidad</h3>
                    </div>
                    <div class="row accessibility-menu__body">
                        <div class="col-6 mb-3">
                            <button class='increaseText'><img
                                    src="{{ asset('images/web/common/letterPlus.png') }}"
                                    alt=""></button>
                            <p>Aumentar texto</p>
                        </div>
                        <div class="col-6 mb-3">
                            <button class="decreaseText"><img
                                    src="{{ asset('images/web/common/letterMinus.png') }}"
                                    alt=""></button>
                            <p>Reducir texto</p>
                        </div>
                        <div class="col-6">
                            <button class="contrast-btn"><img
                                    src="{{ asset('images/web/common/icon-contrast.png') }}"
                                    alt=""></button>
                            <p>Contraste</p>
                        </div>
                        <div class="col-6">
                            <button class="only-text-btn"><img
                                    src="{{ asset('images/web/common/eye.png') }}"
                                    alt=""></button>
                            <p>Solo texto</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <a href="" id="login-button">
                    <img src="{{ asset('images/web/common/icn_login_autogestion.png') }}"
            class="img-fluid" alt="icono inicio sesión rayogas">
            Iniciar sesión
            </a> --}}
        </div>
        @endif
    </div>
</nav>