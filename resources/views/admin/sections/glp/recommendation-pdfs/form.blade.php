<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Titulo</label>
            {!! Form::text('title', $pdf->title, [
                'class' => 'form-control',
                'maxlength' => '191',
            ]) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Archivo</label><br>
            {!! Form::file('file') !!}
            @if ($pdf->file)
                <a href="{{ $pdf->file_url }}" target="blank">Ver archivo</a>
            @endif
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary">Guardar</button>
