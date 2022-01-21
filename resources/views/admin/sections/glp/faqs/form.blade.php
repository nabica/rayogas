<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Titulo</label>
            {!! Form::text('title', $faq->title , ['class' => 'form-control', 'maxlength' => '191']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <label class="form-label">Descripción</label>
        {!! Form::textarea('description', $faq->description , ['class' => 'editor']) !!}
        <br>
    </div>
</div>

<button type="submit" class="btn btn-primary">Guardar</button>
