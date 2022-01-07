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
        <a class="navbar-brand" href="#"> <img src="{{ asset('images/web/common/img_logo_azul_header.png') }}"
                alt="Logo {{ config('app.name') }}"></a>
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
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Productos y Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">GLP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>

            </ul>
            <hr class="d-lg-none">
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
    </div>
</nav>