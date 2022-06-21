<div @class([ 'contact-bar' , 'fixed'=> @isset($fixed), ])>

    <a class="contact-bar__button" target="_blank"
        href="https://api.whatsapp.com/send?phone=+573102388245&text=%C2%A1Hola!%20quiero%20solicitar%20un%20pedido,%20%C2%BFpodr%C3%ADas%20ayudarme%20por%20favor?%20">
        <img src="{{ asset('images/web/common/icn_sidebar_wap_granel.png') }}" alt="" class="img-fluid">
        <p class="contact-bar__text">Solicita tu pedido</p>
    </a>
    <a class="contact-bar__button fixed-padding" target="_blank"
        href="https://api.whatsapp.com/send?phone=+573102388245&text=%C2%A1Hola!%20quiero%20hablar%20con%20un%20asesor%20por%20favor%20">
        <img src="{{ asset('images/web/common/icn_sidebar_chat.png') }}" alt="" class="img-fluid">
        <p class="contact-bar__text">Servicio al cliente</p>
    </a>
    <button type='button' class="contact-bar__button" data-bs-toggle="modal" data-bs-target="#payment-modal">
        <img src="{{ asset('images/web/common/icn_sidebar_pago.png') }}" alt="" class="img-fluid">
        <p class="contact-bar__text">Paga tu factura</p>
    </button>

    {{-- <button class="contact-bar__button">

        <img src="{{ asset('images/web/common/icn_sidebar_wap_cilindro.png') }}" alt="" class="img-fluid">


    <p class="contact-bar__text">Solicita tu
        cilindro</p>
    </button> --}}
    <a href="{{ route('rayogas.pqrs') }}" class="contact-bar__button">

        <img src="{{ asset('images/web/common/icn_sidebar_pqrs.png') }}" alt="" class="img-fluid">

        <p class="contact-bar__text">PQRS</p>
    </a>
</div>