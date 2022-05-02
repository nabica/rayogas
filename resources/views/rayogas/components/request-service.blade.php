<!-- Request Service -->
<section class="section">
    <div class="container">
        <div class="row  d-flex justify-content-end">
            <div class="request-service">
                <div class="image">
                    <img src="{{ asset('images/web/common/img_formulario_solicitar_servicio.png') }}" class="img-fluid"
                        alt="">
                </div>
                <div class="content">
                    <div class="title">
                        <h4>Solicitar servicio</h4>
                        <h5>Cilindro o granel</h5>
                    </div>
                    <form id="form-request-service" class="form__general">
                        <div class="steps">
                            <div class="step active">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Nombre</label>
                                        <input type="text" name="name" class="form-control" placeholder="Nombre"
                                            aria-label="Nombre">
                                    </div>
                                    <div class="col">
                                        <label for="">Número de contacto</label>
                                        <input type="text" name="telephone" class="form-control" placeholder="Número de contacto"
                                            aria-label="Número de contacto">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Correo electrónico</label>
                                        <input type="text" name="email" class="form-control" placeholder="Correo electrónico"
                                            aria-label="Correo electrónico">
                                    </div>
                                    <div class="col">
                                        <label for="">Tipo de persona</label>
                                        <div class="select">
                                            <select name="person" class="form-control">
                                                <option value="">Tipo de persona</option>
                                                <option value="natural">Natural</option>
                                                <option value="jurídica">Jurídica</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row container-business-name">
                                    <div class="col">
                                        <label for="">Razón social</label>
                                        <input type="text" name="business-name" class="form-control" placeholder="Razón social"
                                            aria-label="Razón social">
                                    </div>
                                </div>
                                <div class="row controls">
                                    <div class="col-md-12">
                                        <div class="buttons">
                                            <button class="btn btn-primary" id="btn-next-step">
                                                >
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="step">
                                <div class="row">
                                    <div class="col">
                                        <label for="">Cilindro o granel</label>
                                        <div class="select">
                                            <select name="" id="" class="form-control">
                                                <option value="cilindro">Cilindro</option>
                                                <option value="granel">Granel</option>
                                                <option value="instalaciones">Instalaciones</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="">Cantidad</label>
                                        <div class="select">
                                            <select name="" id="" class="form-control">
                                                <option value="">Unidad</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="">Presentación / Volumen</label>
                                        <div class="select">
                                            <select name="" id="" class="form-control">
                                                <option value="">40 libras</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">

                                    </div>
                                </div>
                                <div class="row controls">
                                    <div class="col-md-12">
                                        <div class="buttons">
                                            <a href="https://api.whatsapp.com/send?phone=+573102388245&text=%C2%A1Hola!%20quiero%20solicitar%20el%20pago%20en%20efectivo%20por%20favor.%20Gracias" target="blank" class="btn btn-primary--green">
                                                Solicitar
                                                <div>Pago en efectivo</div>
                                            </a>
                                            <a href="https://api.whatsapp.com/send?phone=+573102388245&text=%C2%A1Hola!%20quiero%20solicitar%20el%20pago%20en%20l%C3%ADnea%20por%20favor.%20Gracias" target="blank" class="btn btn-primary">
                                                Solicitar
                                                <div>Pago en línea</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row indicators">
                            <div class="col-lg-3">
                                <div class="dots">
                                    <span class="dots-item active"></span>
                                    <span class="dots-item "></span>
                                </div>
                            </div>
                            <div class="col-lg-9">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- End Request Service -->
