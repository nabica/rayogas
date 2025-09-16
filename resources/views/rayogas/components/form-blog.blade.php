<section class="form-blog">
    <div class="form-container ">

        <div class="form-left">
            <h1 class="lets-talk">Empieza a ahorrar energia</h1>
            <p class="form-description">En Rayogas te ayudamos a reducir tu factura de energía hasta en un 95% con soluciones
                energéticas a la medida de tu hogar o empresa. Déjanos tus datos y recibe una asesoría gratuita con nuestros expertos.
            </p>
            <div class="container-phone">
                <img src="{{ asset('images/web/common/icn-phone.png') }}" class="icn-phone" alt="Icon phone">
                <p class="phone-number">Llámanos: +57 313 370 37 71</p>
            </div>
            <h3 class="form-blog__title">Beneficios con <span>Rayogas</span></h3>
            <div class="list-contact">
                <div class="item-container">
                    <img src="{{ asset('images/web/common/icn_check.png') }}" class="icn-check" alt="logo flama rayogas">
                    <p class="item">Ahorra energia y dinero</p>
                </div>
                <div class="item-container">
                    <img src="{{ asset('images/web/common/icn_check.png') }}" class="icn-check" alt="logo flama rayogas">
                    <p class="item">Descuento hasta 95%</p>
                </div>
                <div class="item-container">
                    <img src="{{ asset('images/web/common/icn_check.png') }}" class="icn-check" alt="logo flama rayogas">
                    <p class="item">Energia Limpia</p>
                </div>
                <div class="item-container">
                    <img src="{{ asset('images/web/common/icn_check.png') }}" class="icn-check" alt="logo flama rayogas">
                    <p class="item">Energia Renovable</p>
                </div>
                <div class="item-container">
                    <img src="{{ asset('images/web/common/icn_check.png') }}" class="icn-check" alt="logo flama rayogas">
                    <p class="item">Alternativas en GLP</p>
                </div>
                <div class="item-container">
                    <img src="{{ asset('images/web/common/icn_check.png') }}" class="icn-check" alt="logo flama rayogas">
                    <p class="item">Alternativas Solares</p>
                </div>
            </div>
            <h3 class="form-blog__title form-blog__title--secondary">Empieza tu ahorro ahora:</h3>
            <div class="stepbystep-contact">
                <h3 class="number-h3">1</h3>
                <p class="stepbystep-descrip">Llena el formulario</p>
                <img src="{{ asset('images/web/common/arrow-right.png') }}" class="img-fluid arrow-right" alt="arrow right">
                <h3 class="number-h3">2</h3>
                <p class="stepbystep-descrip">Recibe asesoria</p>
                <img src="{{ asset('images/web/common/arrow-right.png') }}" class="img-fluid arrow-right" alt="arrow right">
                <h3 class="number-h3">3</h3>
                <p class="stepbystep-descrip">Instala tu servicio</p>
            </div>
        </div>
        <div class="form-right">
            <form action={{$linkForm}} method="post" data-id={{$dataid}} class="blog-contact-form" id="contactForm">
                @csrf
                <div class="content-form-tittle">
                    <br>
                    <h3 class="tittle-form">Solicita tu asesoria</h3>
                </div>
                <hr class="line-form">
                <div class="full-names">
                    <div class="row-names">
                        <label for="first_name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="row-names">
                        <label for="last_name" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                </div>
                <div class="col-12 form_field">
                    <label for="company" class="form-label info">Empresa u organización</label>
                    <input type="text" class="form-control" id="company" name="company" required>
                </div>
                <div class="col-12 form_field">
                    <label for="email" class="form-label info">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="col-12 form_field">
                    <label for="phone" class="form-label info">Teléfono</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="col-12 form_field">
                    <label for="message" class="form-label info">Cómo podemos ayudarte</label>
                    <textarea class="form-control" id="message" name="message" rows="2" required></textarea>
                </div>
                <div class="col-12 form_btn_send">
                    <button id="button_submit" type="submit">QUIERO MI ASESORIA</button>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Newsletter Section -->
    <div class="newsletter-section">
        <div class="newsletter-container">
            <h1 class="newsletter-title">Suscríbete a nuestro newsletter</h1>
            <div class="newsletter-description">
                <p>Mantente al día con las últimas noticias sobre energía renovable, tips de ahorro y promociones especiales de Rayogas.</p>
            </div>
            <form class="js-cm-form newsletter-form" id="subForm" action="https://www.createsend.com/t/subscribeerror?description=" method="post" data-id="5B5E7037DA78A748374AD499497E309E12C539C5F2A0069F960B0AB18AE5603464F90A54975F182E12B2FF0D38FE9AA8EEA1955BCE646B06E73030B16D9650F4">
                <div class="newsletter-fields">
                    <div class="newsletter-row">
                        <div class="newsletter-field">
                            <label for="fieldName" class="form-label">Nombre</label>
                            <input id="fieldName" maxlength="200" name="cm-name" placeholder="Nombre" class="form-control" type="text">
                        </div>
                        <div class="newsletter-field">
                            <label for="fielddklyjddu" class="form-label">Apellido</label>
                            <input id="fielddklyjddu" maxlength="200" name="cm-f-dklyjddu" placeholder="Apellido" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="newsletter-row">
                        <div class="newsletter-field">
                            <label for="fieldEmail" class="form-label">Dirección de email</label>
                            <input autocomplete="Email" class="js-cm-email-input qa-input-email form-control" id="fieldEmail" maxlength="200" name="cm-njtkyll-njtkyll" placeholder="Dirección de email" required="" type="email">
                        </div>
                        <div class="newsletter-field">
                            <label for="fielddklyjdhr" class="form-label">Teléfono</label>
                            <input id="fielddklyjdhr" maxlength="200" name="cm-f-dklyjdhr" type="tel" placeholder="Teléfono" class="form-control">
                        </div>
                    </div>
                    <div class="newsletter-row">
                        <div class="newsletter-field">
                            <label class="form-label">Interés</label>
                            <select id="fielddklyidhy" name="cm-fo-dklyidhy" value="" class="form-control">
                                <option disabled="" selected="" value="">Selecciona...</option>
                                <option value="32582609">Paneles Solares</option>
                                <option value="32582610">GLP</option>
                                <option value="32582611">Ambos</option>
                            </select>
                        </div>
                        <div class="newsletter-field">
                            <label for="fielddklyjdhy" class="form-label">Comentario</label>
                            <input id="fielddklyjdhy" maxlength="200" name="cm-f-dklyjdhy" placeholder="Comentario" class="form-control" type="text">
                        </div>
                    </div>
                </div>
                <div class="newsletter-btn">
                    <button type="submit" class="btn-newsletter">SUSCRIBIRME</button>
                </div>
            </form>
        </div>
    </div>
</section>


<script type="text/javascript" src="https://js.createsend1.com/javascript/copypastesubscribeformlogic.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new RayogasFormComponent({
            Form_id: 'contactForm',
            name: 'first_name',
            lastname: 'last_name',
            company: 'company',
            email: 'email',
            phonenumber: 'phone',
            message: 'message',
            submitid: 'button_submit',
            loadingText: 'Enviando datos...'
        });
    });
</script>