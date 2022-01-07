<section>
    <div class="default-banner" style="background-image: linear-gradient(rgba(0,0,0,0.0),rgba(0,0,0,0.0)),
        url({{$image}});background-size: cover">

        <div class="default-banner__content container">
            <div class="default-banner__content-text">
                <h1>{{ $title }}</h1>
                <p>{{ $text }}</p>
            </div>
            @include('rayogas.components.contact-bar')
        </div>
    </div>
</section>