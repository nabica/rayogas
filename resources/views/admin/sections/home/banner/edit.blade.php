@extends('admin.layouts.master')
@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-md-flex align-items-center justify-content-between">
            <h4 class="mb-0">Banner Principal</h4>

            {{-- <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.home.banner.index') }}">Banner principal</a></li>
                    <li class="breadcrumb-item active">Editar</li>
                </ol>
            </div> --}}
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        @include('admin.components.success-message')
        @include('admin.components.errors-form')

        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => ['admin.home.banner.update', $banner->id], 'method' => 'put', 'files' => true]) !!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Titulo</label>
                                {!! Form::text('title', $banner->title , ['class' => 'form-control', 'maxlength' => '191']) !!}
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Descripción</label>
                            {!! Form::text('description', $banner->description , ['class' => 'form-control', 'maxlength' => '191']) !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Imagen</label><br>
                                {!! Form::file('image') !!}
                                @if($banner->image)
                                    <img src="{{ $banner->image_url }}" width="50" alt="">
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Texto Botón</label>
                                {!! Form::text('button_text', $banner->button_text , ['class' => 'form-control', 'maxlength' => '191']) !!}
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Enlace</label>
                                {!! Form::text('button_link', $banner->button_link , ['class' => 'form-control', 'maxlength' => '191']) !!}

                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->

@endsection
