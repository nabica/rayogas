<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('rayogas.home') }}">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"
                       id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Inicio
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('admin.home.banner.edit', 1) }}">Banner</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('admin.home.feature.edit', 1) }}">Destacado</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('admin.home.rates.index') }}">Tarifas</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('admin.home.floating-bar.edit', 1) }}">Barra
                                flotante</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"
                       id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Nosotros
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('admin.about.banner.edit', 1) }}">Banner</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('admin.about.features.index') }}">Destacados</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('admin.about.values.index') }}">Valores</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('admin.about.why-choose-features.index') }}">Destacados
                                ¿por qué elegir?</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"
                       id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Productos y servicios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('admin.products.banner.edit', 1) }}">Banner</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('admin.products.wapp-buttons.edit', 1) }}">Botones
                                de whatsapp</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"
                       id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Glp
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('admin.glp.banner.edit', 1) }}">Banner</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('admin.glp.recommendation-tips.index') }}">Recomendaciones
                                (tips)</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('admin.glp.recommendation-pdfs.index') }}">Recomendaciones
                                (pdfs)</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('admin.glp.faqs.index') }}">Preguntas
                                frecuentes</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"
                       id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Pqrs
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('admin.pqrs.objects.index') }}">Objetos
                                solicitud</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"
                       id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Blog
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('admin.blog.banner.edit', 1) }}">Banner</a>
                        </li>
                        <li>
                            <a class="dropdown-item"
                               href="{{ route('admin.blog.posts.index') }}">Artículos</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="navbar-nav me-aut mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"
                       id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#"
                               onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                                Cerrar sesión
                            </a>
                            <form id="logout-form"
                                  action="{{ route('admin.auth.logout') }}"
                                  method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                <!-- <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
            </li> -->
            </ul>
        </div>
    </div>
</nav>
