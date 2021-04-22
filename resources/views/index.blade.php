@extends('layout.master')

@section('main')
    <h3>Productos</h3>

    <div class="row">
        <div class="col text-center">
            <a href="{{ route('create') }}" class="btn btn-primary">Agregar Producto</a>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $num => $producto)
                        <tr>
                            <td>{{ $producto->id }}</td>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->tipo }}</td>
                            <td>{{ $producto->estado }}</td>
                            <td>
                                <a href="{{ route('show',$producto->id) }}" class="btn btn-info">ver detalle</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
