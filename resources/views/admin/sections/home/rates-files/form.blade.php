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
            {!! Form::select('zone_id', ['' => 'Seleccionar'] + $zones, $rate->zone_id, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Mes</label><br>
            {!! Form::select('month', ['' => 'Seleccionar'] + collect(range(1, 12))->mapWithKeys(function ($month) {
            $monthName = \Carbon\Carbon::create()->month($month)->locale('es')->monthName;
            $formattedMonthName = ucfirst($monthName);
            return [$formattedMonthName => $formattedMonthName];
            })->toArray(), ucfirst($rate->month), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Archivo</label><br>
            {!! Form::file('file_name') !!}
            @if($rate->file_name)
            <a href="{{ $rate->file_url }}" target="blank">Ver archivo</a>
            @endif
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary">Guardar</button>