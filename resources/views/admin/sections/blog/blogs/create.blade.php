@extends('admin.layouts.master')
@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Crear nueva publicacion de blog</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.blog.posts.index') }}">Blogs</a></li>
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
                {!! Form::open(['route' => ['admin.blog.posts.store', $blog->id ], 'method' => 'post', 'files' => true,'id' => 'blogForm']) !!}

                    @include('admin.sections.blog.blogs.form')

                {!! Form::close() !!}
            </div>
        </div>
    </div> <!-- end col -->
</div>

<div id="formLoader" style="display:none;position:fixed;top:0;left:0;width:100vw;height:100vh;background:rgba(255,255,255,0.7);z-index:9999;justify-content:center;align-items:center;">
    <div class="spinner-border text-primary" style="width: 4rem; height: 4rem;" role="status">
        <span class="sr-only"></span>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('blogForm');
        const loader = document.getElementById('formLoader');
        if (form && loader) {
            form.addEventListener('submit', function() {
                loader.style.display = 'flex';
            });
        }
    });
</script>
@endsection
