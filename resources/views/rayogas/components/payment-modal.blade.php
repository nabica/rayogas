<div class="modal" tabindex="-1" id="payment-modal">
    <div class="modal-dialog  modal-dialog-centered modal-lg">
        <div class="modal-content payment-modal__content">
            <button class='payment-modal__close-button' data-bs-dismiss="modal" aria-label="Close">
                <img src="{{asset('images/web/common/icn_modal_close.png')}}" alt="">
            </button>
            <div class="modal-header payment-modal__header">
                @component('rayogas.components.heading-title')
                @slot('title')¿Cómo quieres pagar tu factura?@endslot
                @endcomponent
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-lg-6 payment-modal__method mb-5 mb-lg-0">
                        <div class="payment-modal__method-image">
                            <img class="img-fluid" src="{{asset('images/web/paymentModal/modal_pago_tarjeta.png')}}"
                                alt="">
                        </div>
                        <a href="" class='btn btn-primary payment-modal__method-button'>Tarjeta de crédito y débito</a>
                        <div>

                            <img class="img-fluid" src="{{asset('images/web/paymentModal/logos_tarjeta.png')}}" alt="">
                        </div>

                    </div>
                    <div class="col-12 col-lg-6 payment-modal__method">
                        <div class="payment-modal__method-image">
                            <img class="img-fluid" src="{{asset('images/web/paymentModal/modal_pago_efectivo.png')}}"
                                alt="">
                        </div>
                        <a href="" class='btn btn-primary payment-modal__method-button'>Efectivo</a>
                        <div>
                            <img class="img-fluid" src="{{asset('images/web/paymentModal/logos_efectivo.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
