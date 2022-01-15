<!-- Navbar menu -->
<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid d-lg-none mobile-container" id='mobile-buttons'>
        <div class="navbar-buttons">
            <a href="" id="btn-accessibility">
                AA
            </a>
            <a href="" id="login-button">
                <img src="{{ asset('images/web/common/icn_login_autogestion.png') }}" class="img-fluid"
                    alt="icono inicio sesión rayogas">
                Iniciar sesión
            </a>
        </div>
    </div>
    <div class="container">
        <a class="navbar-brand" href="{{ route('rayogas.home') }}"> <img
                src="{{ asset('images/web/common/img_logo_azul_header.png') }}" alt="Logo {{ config('app.name') }}"></a>
        @if(isset($navbar) != null)
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation" id='navbar_button'>
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="{{ Request::is('/') ? 'nav-link active' : 'nav-link' }}" aria-current=" page"
                        href="{{ route('rayogas.home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Request::is('nosotros') ? 'nav-link active' : 'nav-link' }}"
                        href="{{ route('rayogas.about') }}">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Request::is('productos-y-servicios') ? 'nav-link active' : 'nav-link' }}"
                        href="{{ route('rayogas.products') }}">Productos y Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Request::is('glp') ? 'nav-link active' : 'nav-link' }}"
                        href="{{ route('rayogas.glp') }}">GLP</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Request::is('blog') ? 'nav-link active' : 'nav-link' }}"
                        href="{{ route('rayogas.blog') }}">Blog</a>
                </li>
            </ul>
            <hr class="d-lg-none">
            <div class="mobile__options container d-lg-none">
                <a href="">Transparencia</a>
                <a href="">Usuarios</a>
                <a href="">Privacidad</a>
            </div>
        </div>
        <div class="navbar-buttons d-none d-lg-flex">
            <a href="" id="btn-accessibility" class="me-3">
                AA
            </a>
            <a href="" id="login-button">
                <img src="{{ asset('images/web/common/icn_login_autogestion.png') }}" class="img-fluid"
                    alt="icono inicio sesión rayogas">
                Iniciar sesión
            </a>
        </div>
        @endif
    </div>
</nav>