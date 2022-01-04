<section>
    <div class="default-banner" style="background-image: linear-gradient(rgba(0,0,0,0.0),rgba(0,0,0,0.0)),
        url({{$image}});background-size: cover">

        <div class="default-banner__content">
            <div class="default-banner__content-text">
                <h1>{{ $title }}</h1>
                <p>{{ $text }}</p>
            </div>
            <div class="default-banner__contact-bar">
                <button class="default-banner__contact-bar-button">
                    <div class="default-banner__contact-bar-icon">
                        <img src="{{ asset('images/web/common/icn_sidebar_pqrs.png') }}" alt="">
                    </div>
                    <p class="default-banner__contact-bar-text">PQRS</p>
                </button>
                <button class="default-banner__contact-bar-button">
                    <div class="default-banner__contact-bar-icon">
                        <img src="{{ asset('images/web/common/icn_sidebar_pago.png') }}" alt="">

                    </div>
                    <p class="default-banner__contact-bar-text">Paga tu factura</p>
                </button>
                <button class="default-banner__contact-bar-button">
                    <div class="default-banner__contact-bar-icon">
                        <img src="{{ asset('images/web/common/icn_sidebar_wap_granel.png') }}" alt="">

                    </div>
                    <p class="default-banner__contact-bar-text">Carga a granel</p>
                </button>
                <button class="default-banner__contact-bar-button">
                    <div class="default-banner__contact-bar-icon">
                        <img src="{{ asset('images/web/common/icn_sidebar_wap_cilindro.png') }}" alt="">

                    </div>
                    <p class="default-banner__contact-bar-text">Solicita tu
                        cilindro</p>
                </button>
            </div>
        </div>
    </div>
</section>