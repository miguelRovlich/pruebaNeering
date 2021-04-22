@extends('layout.master')

@section('main')
    <h3>detalle Producto</h3>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$producto->nombre}}</h5>
                    <p class="card-text">{{$producto->tipo}}</p>
                    <p class="card-text">{{$producto->estado}}</p>
                    <div>
                        <form method="POST" action="{{route('Producto.delete',$producto->id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Borrar</button>
                            <a href="{{ route('index')}}"class="btn btn-outline-warning">Volver</a>
                            <a href="{{ route('Producto.edit',$producto->id)}}"class="btn btn-outline-secondary">Editar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
