@extends('rayogas.layouts.master')
@section('content')

<section class="pqrs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12  col-lg-5 pqrs__side-banner">
                <div class="pqrs__side-banner-text">

                    <h3>Estamos para <br> escucharte.</h3>
                    <p>Diligencia los siguientes campos para enviar a nuestra área de servicio al cliente la petición,
                        queja, reclamo o sugerencia que tengas y poder evaluarla.</p>
                </div>
                <div class="pqrs__side-banner-image">
                    <img src="{{ asset('images\web\pqrs\pqrs_img_principal.png') }}" alt="principal image pqrs"
                        class="img-fluid">
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <form action="" class="form__general pqrs__form row g-3 needs-validation" novalidate>
                    <div class="form__general-header line col-12 p-0">
                        <h3>Peticiones, quejas y recursos</h3>
                        <p>Digita tus datos</p>
                    </div>
                    <div class="col-md-6 mt-0">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" required>
                        <div class="valid-feedback">
                            Este campo es requerido
                        </div>
                    </div>
                    <div class="col-md-6 mt-0">
                        <label for="document" class="form-label">Cédula</label>
                        <input type="text" class="form-control" id="document" required>
                        <div class="valid-feedback">
                            Este campo es requerido
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="city" class="form-label">Ciudad</label>
                        <input type="text" class="form-control" id="city" required>
                        <div class="valid-feedback">
                            Este campo es requerido
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="phone" required>
                        <div class="valid-feedback">
                            Este campo es requerido
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" required>
                        <div class="valid-feedback">
                            Este campo es requerido
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea class="form-control" rows="3" required></textarea>
                        <div class="valid-feedback">
                            Este campo es requerido
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="object" class="form-label">Objeto solicitud</label>
                        <div class="select">
                            <select type="text" class="form-control" id="object" required>
                                <option disabled selected value="">Selecciona una opcion</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>
                        <div class="valid-feedback">
                            Este campo es requerido
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <label for="type" class="form-label">Tipo de solicitud</label>
                        <div class="select">
                            <select type="text" class="form-control" id="type" required>
                                <option disabled selected value="">Selecciona una opcion</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                        </div>
                        <div class="valid-feedback">
                            Este campo es requerido
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="form__general-button" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@include('rayogas.components.footer')
@endsection