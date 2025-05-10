<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Descripcion</label>
            {!! Form::text('description', $rate->description , ['class' => 'form-control', 'maxlength' => '191']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Zona</label><br>
            {!! Form::select('zone_id',['1' => 'Centro', '2' => 'Llanos orientales', '3' => 'Guaviare'], $rate->zone_id , ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Mes</label><br>
            {!! Form::select('month', [
            'Enero' => 'Enero',
            'Febrero' => 'Febrero',
            'Marzo' => 'Marzo',
            'Abril' => 'Abril',
            'Mayo' => 'Mayo',
            'Junio' => 'Junio',
            'Julio' => 'Julio',
            'Agosto' => 'Agosto',
            'Septiembre' => 'Septiembre',
            'Octubre' => 'Octubre',
            'Noviembre' => 'Noviembre',
            'Diciembre' => 'Diciembre'
            ], $rate->month, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Archivo</label><br>
            {!! Form::file('file_name') !!}
            @if($rate->file_name)
            <a href="{{ $rate->file_name }}" target="blank">Ver archivo</a>
            @endif
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary">Guardar</button>