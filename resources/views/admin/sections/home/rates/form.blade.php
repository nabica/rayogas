<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Texto Botón</label>
            {!! Form::text('button_text', $rate->button_text , ['class' => 'form-control', 'maxlength' => '191']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Archivo</label><br>
            {!! Form::file('file') !!}
            @if($rate->file)
                <a href="{{ $rate->file_url }}" target="blank">Ver archivo</a>
            @endif
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary">Guardar</button>
