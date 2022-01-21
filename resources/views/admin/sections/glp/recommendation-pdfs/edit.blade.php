@extends('admin.layouts.master')
@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-md-flex align-items-center justify-content-between">
            <h4 class="mb-0">Editar Recomendaciones (pdfs)</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.glp.recommendation-pdfs.index') }}">Recomendaciones (pdfs)</a></li>
                    <li class="breadcrumb-item active">Editar</li>
                </ol>
            </div>
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
                {!! Form::open(['route' => ['admin.glp.recommendation-pdfs.update', $pdf->id], 'method' => 'put', 'files' => true]) !!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Titulo</label>
                                {!! Form::text('title', $pdf->title , ['class' => 'form-control', 'maxlength' => '191']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Archivo</label><br>
                                {!! Form::file('file') !!}
                                @if($pdf->file)
                                    <a href="{{ $pdf->file_url }}" target="blank">Ver archivo</a>
                                @endif
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
