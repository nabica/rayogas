@extends('admin.layouts.master')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-md-flex align-items-center justify-content-between">
            <h4 class="mb-0">Editar blog</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.blog.posts.index') }}">Blogs</a></li>
                    <li class="breadcrumb-item active">Editar</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        @include('admin.components.success-message')
        @include('admin.components.errors-form')

        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => ['admin.blog.posts.update', $blog->id], 'method' => 'put', 'files' => true,'id' => 'blogForm']) !!}

                @include('admin.sections.blog.blogs.form')

                {!! Form::close() !!}
            </div>
        </div>
    </div> 
</div>


@endsection