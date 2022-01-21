<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Titulo</label>
            {!! Form::text('title', $value->title , ['class' => 'form-control', 'maxlength' => '191']) !!}
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label">Descripción</label>
        {!! Form::text('description', $value->description , ['class' => 'form-control']) !!}
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Imagen</label><br>
            {!! Form::file('image') !!}
            @if($value->image)
                <img src="{{ $value->image_url }}" width="50" alt="">
            @endif
        </div>
    </div>
</div>

<button type="submit" class="btn btn-primary">Guardar</button>
