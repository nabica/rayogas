@extends('admin.layouts.master')
@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Preguntas frecuentes</h4>

            {{-- <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Basic Elements</li>
                </ol>
            </div> --}}

        </div>
    </div>
    <div class="col-12">
        <a href="{{ route('admin.glp.faqs.create') }}" class="btn btn-primary">Crear</a><br><br>
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
                            @foreach($faqs as $faq)
                              <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $faq->title }}</td>
                                <td>
                                    {!! Form::open(['route' => ['admin.glp.faqs.destroy', $faq->id], 'method' => 'delete', 'class' => 'form-delete-record']) !!}
                                        <a href="{{ route('admin.glp.faqs.edit', $faq->id) }}" class="btn btn-primary">Editar</a>

                                        <button type="submit" class="btn btn-danger delete-record">Eliminar</button>
                                    {!! Form::close() !!}
                               </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                        <div>
                            {{ $faqs->links() }}
                        </div>
                    </div>
            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->

@endsection
