<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Nombre</label>
            {!! Form::text('name', $pqr->name, [
                'class' => 'form-control',
                'maxlength' => '191',
            ]) !!}
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary">Guardar</button>
