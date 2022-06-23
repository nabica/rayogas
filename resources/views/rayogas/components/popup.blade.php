<div class="modal fade" id="popup" tabindex="-1" aria-labelledby="popUpLabel" aria-hidden="true">
    <div class="modal-dialog .modal-dialog-centered">
        <div class="modal-content">
            <img src="{{asset('/images/web/common/icn_succed.png')}}" alt="">
            <div class="modal-body">
                @component('rayogas.components.heading-title')
                @slot('title')Gracias, tu solicitud ha sido enviada @endslot
                @endcomponent
                <p>Pronto nos comunicaremos contigo</p>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>