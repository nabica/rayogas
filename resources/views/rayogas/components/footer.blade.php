<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Logo Section -->
            <div class="col-12 col-md-3">
                <img src="{{ asset('images/web/common/img_logo_azul_footer.png') }}" alt="RayoGas" class="img-fluid mb-2">
                <img src="{{ asset('images/web/common/logo-superervicios.png') }}" alt="SuperServicios" class="img-fluid mt-2">
            </div>

            <!-- Sitemap Section -->
            <div class="col-12 col-md-3">
                <ul class="footer__sitemap">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('rayogas.home') }}">
                            <i class="icon-cheveron-right"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rayogas.about') }}">
                            <i class="icon-cheveron-right"></i> Nosotros
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rayogas.products') }}">
                            <i class="icon-cheveron-right"></i> Productos y Servicios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rayogas.glp') }}">
                            <i class="icon-cheveron-right"></i> GLP
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rayogas.pqrs') }}">
                            <i class="icon-cheveron-right"></i> PQRS
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('rayogas.blog') }}">
                            <i class="icon-cheveron-right"></i> Noticias
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rayogas.blog') }}">
                            <i class="icon-cheveron-right"></i> Blog
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Section -->
            <div class="col-12 col-md-3 footer__contact">
                <h3>Contacto</h3>
                <hr>
                <h4>Bogotá:</h4>
                <p>(1) 580 23 23</p>
                <h4>Nivel nacional:</h4>
                <p>01 8000 95 95 95</p>
                <p>Línea gratuita servicio al cliente,<br>PQR´S y emergencias</p>
                <h4>Línea de emergencias:</h4>
                <p>(+57) 311 537 8738</p>
            </div>

            <!-- Normative Section -->
            <div class="col-12 col-md-3 footer__normative">
                <h3>Marco normativo</h3>
                <hr>
                <ul class="footer__normative-list">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rayogas.transparency') }}">Transparencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rayogas.transparency', ['tab' => 11]) }}">Resolución CREG 080</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rayogas.rates') }}">Tarifas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://rayogas.com/catalog/manejo-seguro.html" target="_blank">Manual Granel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://rayogas.com/catalog/cartilla-manejo.html" target="_blank">Manual Cilindros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('pdfs/politica_datos_personales.pdf') }}" target="_blank">Política de datos personales</a>
                    </li>
                </ul>
            </div>

            <!-- Social Media Section -->
            <div class="footer__social">
                <h4>Síguenos</h4>
                <div class="footer__social-icons">
                    <a href="https://www.facebook.com/RayogasSA" target="_blank">
                        <img src="{{ asset('images/web/common/icn_footer_fb.png') }}" alt="Facebook">
                    </a>
                    <a href="https://www.instagram.com/rayogassaesp/" target="_blank">
                        <img src="{{ asset('images/web/common/icn_footer_ig.png') }}" alt="Instagram">
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll Up Button -->
        @if(isset($upButton))
        <button class="footer__button btn btn-primary" id="footer__button"> Subir <i class="icon-circle-up"></i></button>
        @endif
    </div>

    <!-- Legal Section -->
    <div class="footer__legal">
        <p>© RayoGas S.A.S E.S.P. Todos los derechos reservados.</p>
    </div>
</footer>