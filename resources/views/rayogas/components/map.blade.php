<!-- End Coverage -->
<section class="section {{ isset($backgroundSectionActive) ? 'bg-section': '' }} ">
    <div class="container">
        @component('rayogas.components.heading-title')
        @slot('title')Nuestra Coberturas @endslot
        @slot('description')Encuentra nuestro servicio en las principales ciudades del país. ¡Pregúntanos por la tuya!
        @endslot
        @endcomponent

        <div class="map">
            <div class="row">
                <div class="col-md-3">
                    <div class="map-controls">
                        <div class="logo">
                            <img src="{{ asset('images/web/common/img_logo_flame_map.png') }}" class="img-fluid"
                                alt="logo flama rayogas">
                        </div>

                        <form action="">
                            <label for="">Departamento</label>
                            <div class="forms-select">
                                <select name="" id="" class="form-control">
                                    <option value="">Seleccionar departamento</option>
                                </select>
                            </div>

                            <label for="">Municipio</label>
                            <div class="forms-select">
                                <select name="" id="" class="form-control">
                                    <option value="">Seleccionar municipio</option>
                                </select>
                            </div>
                        </form>

                        <div class="locations">
                            <div class="row">
                                <div class="col-6 col-md-12 locations-item">
                                    <h4>RayoGas planta Soacha</h4>
                                    <p>Soacha, Cundinamarca</p>
                                    <p>Carrera 2 # 49-75</p>
                                    <p><a href="">(1) 514 0101</a></p>
                                </div>
                                <div class="col-6 col-md-12 locations-item">
                                    <h4>RayoGas planta Soacha</h4>
                                    <p>Soacha, Cundinamarca</p>
                                    <p>Carrera 2 # 49-75</p>
                                    <p><a href="">(1) 514 0101</a></p>
                                </div>
                                <div class="col-6 col-md-12 locations-item">
                                    <h4>RayoGas planta Soacha</h4>
                                    <p>Soacha, Cundinamarca</p>
                                    <p>Carrera 2 # 49-75</p>
                                    <p><a href="">(1) 514 0101</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Coverage -->