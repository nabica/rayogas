<div class="modal fade communications-popup" id="communications-popup" tabindex="-1" aria-labelledby="popUpLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg .modal-dialog-centered">
        <div class="modal-content">
            <img src="{{asset('/images/web/common/comunicado-popup.jpeg')}}" alt="" class="img-fluid communications-popup__main-image">
            <div class="modal-body">

                @component('rayogas.components.heading-title')
                @slot('title')Comunicado a nuestros clientes @endslot
                @endcomponent
                <p>Nuestros <strong>sistemas de información, líneas de atención al cliente y sistemas de facturación electrónica</strong>, estarán temporalmente fuera de servicio. </p>
                <br>
                <p>Para garantizar la atención oportuna de <strong>pedidos, emergencias, PQR´S o información acerca de nuestro servicio</strong>, contáctanos a través de Whatsapp 3102388245, línea de emergencias 3115378738 ó nuestro sitio web www.rayogas.com</p>
                <br>
                <div class="text-center">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>
</div>
