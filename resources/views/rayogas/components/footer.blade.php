<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <img src="{{ asset('images/web/common/img_logo_azul_footer.png') }}" alt="rayo gas" class="img-fluid">
            </div>
            <div class="col-12 col-md-3">
                <ul class="footer__sitemap">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('rayogas.home') }}"><i
                                class="icon-cheveron-right"></i>
                            Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rayogas.about') }}"><i class="icon-cheveron-right"></i>
                            Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rayogas.products') }}"><i class="icon-cheveron-right"></i>
                            Productos y Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rayogas.glp') }}"><i class="icon-cheveron-right"></i>
                            GLP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rayogas.pqrs') }}"><i class="icon-cheveron-right"></i>
                            PQRS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-cheveron-right"></i> Autogestión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rayogas.blog') }}"><i
                                class="icon-cheveron-right"></i>Blog</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-3 footer__contact">
                <h3>
                    Contacto
                </h3>
                <hr>
                <h4>
                    Bogotá:
                </h4>
                <p>
                    (1) 580 23 23
                </p>
                <h4>
                    Nivel nacional:
                </h4>
                <p>
                    01 8000 95 95 95
                </p>
                <p>
                    Línea gratuita servicio al cliente, PQR´S y emergencia
                </p>
                <h4>
                    Línea de emergencias:
                </h4>
                <p>
                    (+57) 311 537 8738
                </p>
            </div>
            <div class="col-12 col-md-3 footer__normative">
                <h3>Marco normativo</h3>
                <hr>
                <ul class="footer__normative-list">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"
                            href="{{ route('rayogas.transparency')}}">Transparencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('rayogas.rates')}}">Tarifas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Manual usuario GLP</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Usuarios</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ asset('pdfs/politica_datos_personales.pdf') }}"
                            aria-current="page" download>Política de datos personales</a>
                    </li>

                </ul>
            </div>
            <div class="footer__social">
                <h4>Síguenos</h4>
                <div class="footer__social-icons">
                    <a href="https://www.facebook.com/RayogasSA" target="blank">
                        <img src="{{ asset('images/web/common/icn_footer_fb.png') }}" alt="facebook">
                    </a>
                    <a href="https://www.instagram.com/rayogassaesp/" target="blank">
                        <img src="{{ asset('images/web/common/icn_footer_ig.png') }}" alt="instagram">
                    </a>
                    {{-- <a href="">
                        <img src="{{ asset('images/web/common/icn_footer_tw.png') }}" alt="twitter">
                    </a> --}}
                </div>
            </div>
        </div>
        @if(isset($upButton))
        <button class="footer__button btn btn-primary" id="footer__button"> Subir <i
                class="icon-circle-up"></i></button>
        @endif
    </div>
    <div class="footer__legal">
        <p>© RayoGas E.S.P. Todos los derechos reservados.</p>
    </div>
</footer>