@extends('admin.layouts.master')
@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Crear valor</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.about.values.index') }}">Valores</a></li>
                    <li class="breadcrumb-item active">Crear</li>
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
                {!! Form::open(['route' => ['admin.about.values.store', $value->id ], 'method' => 'post', 'files' => true]) !!}

                    @include('admin.sections.about.values.form')

                {!! Form::close() !!}
            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->

@endsection
