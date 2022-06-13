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
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="form-request-service__token">
                        <div class=" steps">
                            <div class="step active">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Nombre</label>
                                        <input type="text" name="name" class="form-control" placeholder="Nombre"
                                            aria-label="Nombre">
                                        <div class="invalid-feedback">
                                            Este campo es requerido
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Número de contacto</label>
                                        <input type="text" name="telephone" class="form-control"
                                            placeholder="Número de contacto" aria-label="Número de contacto">
                                        <div class="invalid-feedback">
                                            Este campo es requerido
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Tipo de persona</label>
                                        <div class="select">
                                            <select name="person" class="form-control">
                                                <option value="">Tipo de persona</option>
                                                <option value="natural">Natural</option>
                                                <option value="jurídica">Jurídica</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Este campo es requerido
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6  container-business-name">
                                        <label for="">Razón social</label>
                                        <input type="text" name="business-name" class="form-control"
                                            placeholder="Razón social" aria-label="Razón social">
                                        <div class="invalid-feedback">
                                            Este campo es requerido
                                        </div>
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
                                    <div class="col-md-6">
                                        <label for="">Cilindro, granel, instalaciones</label>
                                        <div class="select">
                                            <select name="type" id="form-request-service__type" class="form-control">
                                                <option value="cilindro">Cilindro</option>
                                                <option value="granel">Granel</option>
                                                <option value="instalaciones">Instalaciones</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Este campo es requerido
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-request-service__inputs--cilinder show">
                                        <label for="">Cantidad</label>
                                        <input type="number" name="quantity" class="form-control"
                                            placeholder="Numero de unidades">
                                        <div class="invalid-feedback">
                                            Este campo es requerido
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-request-service__inputs--installation">
                                        <label for="">Uso o necesidad</label>
                                        <input type="text" name="use" class="form-control"
                                            placeholder="Describe el uso que necesitas">
                                    </div>
                                    <div class="col-md-6 form-request-service__inputs--granel">
                                        <label for="">Kilos</label>
                                        <input type="number" name="kilos" class="form-control"
                                            placeholder="Numero de unidades">
                                        <div class="invalid-feedback">
                                            Este campo es requerido
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 form-request-service__inputs--cilinder show">
                                        <label for="">Presentación / Volumen</label>
                                        <div class="select">
                                            <select name="volume" id="" class="form-control">
                                                <option value="40 libras">40 libras</option>
                                                <option value="20 libras">20 libras</option>
                                                <option value="10 libras">10 libras</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Este campo es requerido
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 form-request-service__inputs--installation">
                                        <label for="">Descripcion de la solicitud</label>
                                        <input type="text" name="description" class="form-control"
                                            placeholder="Describe que tipo de instalacion necesitas">
                                        <div class="invalid-feedback">
                                            Este campo es requerido
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-request-service__inputs--granel">
                                        <label for="">Presentación / Volumen</label>
                                        <div class="select">
                                            <select name="volume" id="" class="form-control">
                                                <option value="40 libras">40 libras</option>
                                                <option value="20 libras">20 libras</option>
                                                <option value="10 libras">10 libras</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Este campo es requerido
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row controls">
                                    <div class="col-md-12">
                                        <div class="buttons">
                                            <button type="submit" class="btn btn-primary request-service__button">
                                                Enviar Solicitud
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