@extends('admin.layouts.master')
@section('content')

<div class="p-5 mt-4 mb-4 bg-light rounded-3">
  <div class="container-fluid py-5">
    <h1 class="display-5 fw-bold">¡Bienvenido!</h1>
    <p class="col-md-8 fs-4">Este es el administrador de {{ config('app.name') }}, aqui podras editar todas las secciones disponibles.</p>
  </div>
</div>

{{-- <div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h1 class="display-3">¡Bienvenido!</h1>
            <p class="lead"></p>
            <hr class="m-y-md">
            <p>Este es el administrador de MPS, aqui podras editar todas las secciones disponibles.</p>

        </div>
    </div>
</div> --}}
@endsection
