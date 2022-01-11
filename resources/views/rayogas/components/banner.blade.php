<!-- Banner -->
<section>
    <div class="banner" id="{{ $id }}">
        <div class="container">
            <div class="banner-content">
                <h1>{{ $title }}</h1>
                <p>{{ $description }}</p>
                @isset($buttonLink)
                <a href="{{ $buttonLink }}">{{ $buttonText }}</a>
                @endisset
            </div>
        </div>
    </div>
</section>
<!-- End Banner -->
