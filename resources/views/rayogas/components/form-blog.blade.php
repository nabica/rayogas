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
        <div class="form-right newsletter-section">
            <form action={{$linkForm}} method="post" data-id={{$dataid}} class="blog-contact-form js-cm-form newsletter-form" id="contactForm subForm">
                <div class="newsletter-fields">
                    <div class="content-form-tittle newsletter-container">
                        <br>
                        <h3 class="tittle-form newsletter-title">Solicita tu asesoria</h3>
                    </div>
                    <hr class="line-form">
                    <div class="full-names newsletter-row">
                        <div class="row-names newsletter-field">
                            <label for="fieldName" class="form-label">Nombre</label>
                            <input id="fieldName" maxlength="200" name="cm-name" placeholder="" class="form-control" type="text">
                        </div>
                        <div class="row-names newsletter-field">
                            <label for="fielddklyjddu" class="form-label">Apellidos</label>
                            <input id="fielddklyjddu" maxlength="200" name="cm-f-dklyjddu" placeholder="" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-12 newsletter-row">
                        <label for="company" class="form-label info">Empresa u organización</label>
                        <input type="text" class="form-control" id="company" name="company" required>
                    </div>
                    <div class="col-12 newsletter-row">
                        <label for="fieldEmail" class="form-label info">email</label>
                        <input autocomplete="Email" class="js-cm-email-input qa-input-email form-control" id="fieldEmail" maxlength="200" name="cm-njtkyll-njtkyll" placeholder="Dirección de email" required="" type="email">
                    </div>
                    <div class="col-12 newsletter-row">
                        <label for="fielddklyjdhr" class="form-label info">Teléfono</label>
                        <input id="fielddklyjdhr" maxlength="200" name="cm-f-dklyjdhr" type="tel" placeholder="Teléfono" class="form-control">
                    </div>
                    <div class="col-12 newsletter-row">
                        <label class="form-label info">Interés</label>
                        <select id="fielddklyidhy" name="cm-fo-dklyidhy" value="" class="form-control">
                            <option disabled="" selected="" value="">Selecciona...</option>
                            <option value="32582609">Paneles Solares</option>
                            <option value="32582610">GLP</option>
                            <option value="32582611">Ambos</option>
                        </select>
                    </div>
                    <div class="col-12 newsletter-row">
                        <label for="fielddklyjdhy" class="form-label info">Cómo podemos ayudarte</label>
                        <textarea id="fielddklyjdhy" maxlength="200" name="cm-f-dklyjdhy" placeholder="Comentario" class="form-control" rows="5" style="resize:none; text-align:left;"></textarea>
                    </div>

                    <div class="col-12 newsletter-btn">
                        <button type="submit" class="btn-newsletter">QUIERO MI ASESORIA</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</section>
<script type="text/javascript" src="https://js.createsend1.com/javascript/copypastesubscribeformlogic.js"></script>
