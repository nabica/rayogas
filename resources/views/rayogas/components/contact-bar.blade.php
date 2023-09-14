<div @class([
    'contact-bar',
    'fixed' => @isset($fixed),
])>

    <a class="contact-bar__button" target="_blank"
       href="{{ $floatingBar->order_request_url }}">
        <img src="{{ asset('images/web/common/icn_sidebar_wap_granel.png') }}"
             alt="" class="img-fluid">
        <p class="contact-bar__text">Solicita tu pedido</p>
    </a>
    <a class="contact-bar__button fixed-padding" target="_blank"
       href="{{ $floatingBar->customer_service_url }}">
        <img src="{{ asset('images/web/common/icn_sidebar_chat.png') }}"
             alt="" class="img-fluid">
        <p class="contact-bar__text">Servicio al cliente</p>
    </a>
    <button type='button' class="contact-bar__button" data-bs-toggle="modal"
            data-bs-target="#payment-modal">
        <img src="{{ asset('images/web/common/icn_sidebar_pago.png') }}"
             alt="" class="img-fluid">
        <p class="contact-bar__text">Paga tu factura</p>
    </button>

    {{-- <button class="contact-bar__button">

        <img src="{{ asset('images/web/common/icn_sidebar_wap_cilindro.png') }}" alt="" class="img-fluid">


    <p class="contact-bar__text">Solicita tu
        cilindro</p>
    </button> --}}
    <a href="{{ route('rayogas.pqrs') }}" class="contact-bar__button">

        <img src="{{ asset('images/web/common/icn_sidebar_pqrs.png') }}"
             alt="" class="img-fluid">

        <p class="contact-bar__text">PQRS</p>
    </a>

    <a href="https://portal.recaudo.rayogas.com/" target="_blank" class="contact-bar__button">

        <img src="{{ asset('images/web/common/invoice-rayogas.png') }}"
             alt="" class="img-fluid">

        <p class="contact-bar__text">Estados de Cuenta</p>
    </a>

</div>
