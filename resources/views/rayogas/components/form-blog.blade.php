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
            <h3 class="tittle-3">Beneficios con <span>Rayogas</span></h3>
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
            <h3 class="tittle-3">Empieza tu ahorro ahora:</h3>
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
            <form action="#" class="blog-contact-form">
                <div class="content-form-tittle">
                    <br>
                    <h3 class="tittle-form">Solicita tu asesoria</h3>
                </div>
                <hr class="line-form">
                <div class="row full-names">
                    <div class="col-md-5 row-names">
                        <label for="first_name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="col-md-5 row-names">
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
                <div class="col-12">
                    <button class="button_submit" type="submit">QUIERO MI ASESORIA</button>
                </div>
            </form>
        </div>
    </div>
</section>