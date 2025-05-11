@extends('admin.layouts.master')
@section('content')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Tarifas</h4>


        </div>
    </div>
    <div class="col-12">
        <a href="{{ route('admin.home.rates.create') }}" class="btn btn-primary">Crear</a><br><br>
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
                                <th scope="col">Nombre del archivo</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Mes</th>
                                <th scope="col">Zona</th>
                                <th scope="col">Fecha de creacion</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rates as $rate)
                            <tr>
                                <td>{{ $rate->id }}</td>
                                <td>{{ $rate->file_name }}</td>
                                <td>{{ $rate->description }}</td>
                                <td>{{ $rate->month }}</td>
                                <td>{{ $rate->zone-> name }}</td>
                                <td>{{ $rate->zone->created_at }}</td>
                                <td>
                                    {!! Form::open(['route' => ['admin.home.rates.destroy', $rate->id], 'method' => 'delete', 'class' => 'form-delete-record']) !!}
                                    <a href="{{ route('admin.home.rates.edit', $rate->id) }}" class="btn btn-primary">Editar</a>

                                    <button type="submit" class="btn btn-danger delete-record">Eliminar</button>
                                    {!! Form::close() !!}

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