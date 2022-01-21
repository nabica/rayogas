@extends('admin.layouts.master')
@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Destacados</h4>

            {{-- <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Basic Elements</li>
                </ol>
            </div> --}}

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                    @include('admin.components.success-message')

                    <div class="table-responsive">
                        <table class="table table-hover">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($features as $feature)
                              <tr>
                                <td>{{ $feature->id }}</td>
                                <td>{{ $feature->title }}</td>
                                <td>
                                  <a href="{{ route('admin.about.features.edit', $feature->id) }}" class="btn btn-primary">Editar</a>
                               </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->

@endsection
