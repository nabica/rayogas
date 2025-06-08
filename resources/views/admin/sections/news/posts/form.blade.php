<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Titulo</label>
            {!! Form::text('title', $post->title , ['class' => 'form-control', 'maxlength' => '191']) !!}
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label">Descripción corta</label>
        {!! Form::text('excerpt_description', $post->excerpt_description , ['class' => 'form-control']) !!}
    </div>
    <div class="col-md-6">
        <label class="form-label">link</label>
        {!! Form::url('link', $post->link , ['class' => 'form-control', 'maxlength' => '500']) !!}
    </div>
</div>

<!-- <div class="row">
    <div class="col-md-12">
        <label class="form-label">Descripción</label>
        {!! Form::textarea('description', $post->description , ['class' => 'form-control editor']) !!}
    </div>
</div> -->

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Imagen (thumb)</label><br>
            {!! Form::file('thumb_image') !!}
            @if($post->thumb_image)
            <img src="{{ $post->thumb_image_url }}" width="50" alt="">
            @endif
        </div>
    </div>
    <!--     <div class="col-md-6">
        <div class="form-group">
            <label class="form-label">Imagen (banner)</label><br>
            {!! Form::file('image') !!}
            @if($post->image)
                <img src="{{ $post->image_url }}" width="50" alt="">
            @endif
        </div>
    </div> -->
</div>

<button type="submit" class="btn btn-primary">Guardar</button>