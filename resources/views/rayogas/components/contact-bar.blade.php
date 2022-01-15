<div @class([ 'contact-bar' , 'fixed'=> @isset($fixed), ])>
    <button class="contact-bar__button">

        <img src="{{ asset('images/web/common/icn_sidebar_pqrs.png') }}" alt="" class="img-fluid">

        <p class="contact-bar__text">PQRS</p>
    </button>
    <button class="contact-bar__button">

        <img src="{{ asset('images/web/common/icn_sidebar_pago.png') }}" alt="" class="img-fluid">


        <p class="contact-bar__text">Paga tu factura</p>
    </button>
    <button class="contact-bar__button">

        <img src="{{ asset('images/web/common/icn_sidebar_wap_granel.png') }}" alt="" class="img-fluid">


        <p class="contact-bar__text">Carga a granel</p>
    </button>
    <button class="contact-bar__button">

        <img src="{{ asset('images/web/common/icn_sidebar_wap_cilindro.png') }}" alt="" class="img-fluid">


        <p class="contact-bar__text">Solicita tu
            cilindro</p>
    </button>
</div>