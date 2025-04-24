@extends('rayogas.layouts.master')
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


<section class="blog-header text-center py-5">
    <div class="container">
        <h1 class="display-4">Lorem commodo dui. <br> volutpat id lacus Ut</h1>
        <p class="lead">Morbi ultrices quam Quisque vel vel orci quis ex luctus viverra turpis porta.</p>
    </div>
</section>
<section class="blog-list">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-md-4 mb-4">
                <div class="card">
                    {{-- Imagen del blog (asegúrate de que $blog->image tenga la URL de la imagen) --}}
                    <img src="{{ $blog->card_image }}" class="card-img-top" alt="Imagen del blog">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->title }}</h5> {{-- Título del blog --}}
                        <a href="" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            @endforeach
            <nav aria-label="Page navigation" class="blog-list__pagination text-center">
                <button id="load-more" class="btn btn-custom" data-page="2">Ver más</button>
            </nav>
        </div>

    </div>
</section>


@endsection


<!-- <body>
    <div class="container mt-5">
        <h1 class="mb-4">Lista de Blogs</h1>

        {{-- Verifica si hay blogs disponibles --}}
        @if ($blogs->count() > 0)
        <div class="row">
            {{-- Itera sobre cada blog --}}
            @foreach ($blogs as $blog)
            <div class="col-md-4 mb-4">
                <div class="card">
                    {{-- Imagen del blog (asegúrate de que $blog->image tenga la URL de la imagen) --}}
                    <img src="{{ $blog->card_image }}" class="card-img-top" alt="Imagen del blog">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->title }}</h5> {{-- Título del blog --}}

                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Paginación --}}
        <div class="d-flex justify-content-center">
            {{ $blogs->links() }}
        </div>
        @else
        <p>No hay blogs disponibles.</p>
        @endif
    </div>

    {{-- Incluye Bootstrap JS (opcional) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body> -->