<!-- Banner -->
<section>
    @if(isset($image))
    <div class="banner" style="background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)),
        url({{ $image }});">
    @else
    <div class="banner" id="{{ $id }}">
    @endif
        <div class="container">
            <div class="banner-content">
                <h1>{{ $title }}</h1>
                <p>{{ $description }}</p>
                @isset($buttonLink)
                <a href="{{ $buttonLink }}" class="btn btn-primary--dark">{{ $buttonText }}</a>
                @endisset
            </div>
            @include('rayogas.components.contact-bar',['fixed'=>'true'])
        </div>
    </div>
</section>
<!-- End Banner -->
