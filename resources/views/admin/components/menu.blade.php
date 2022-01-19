<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('rayogas.home') }}">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Inicio
                    </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.home.banner.edit', 1) }}">Banner</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.home.feature.edit', 1) }}">Destacado</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.home.rates.index') }}">Tarifas</a>
                    </li>
                </ul>
                </li>
            </ul>

            <ul class="navbar-nav me-aut mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li>
                    <a class="dropdown-item"
                    href="#"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Cerrar sesión
                    </a>
                    <form id="logout-form" action="{{ route('admin.auth.logout') }}" method="POST" style="display: none;">
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
