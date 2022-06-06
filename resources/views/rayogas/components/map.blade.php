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
                                <select id="map-state-control" class="form-control">
                                    <option value="">Seleccionar departamento</option>
                                    <option value="boyaca">Boyacá</option>
                                    <option value="cundinamarca">Cundinamarca</option>
                                    <option value="meta">Meta</option>
                                    <option value="tolima">Tolima</option>
                                </select>
                            </div>

                            <label for="">Municipio</label>
                            <div class="forms-select">
                                <select name="" id="map-city-control" class="form-control" disabled>
                                    <option value="">Seleccione el departamento</option>
                                </select>
                            </div>
                        </form>

                        <div class="locations">
                            <div class="row" id='map__items-container'>

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