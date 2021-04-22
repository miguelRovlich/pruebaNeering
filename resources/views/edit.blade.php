@extends('layout.master')

@section('main')
    <h3>Editar producto</h3>
    <div class="row">
        <div class="col">
            <form action="{{route('Producto.update',$producto->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="Nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control">
                    <label for="Tipo">Tipo</label>
                    <input type="text" id="Tipo" name="Tipo" class="form-control">
                    <label for="Estado">Estado</label>
                    <select name="Estado" id="Estado" class="form-control">
                        <option value="Nuevo">Nuevo</option>
                        <option value="Usado">Usado</option>
                    </select>
                    <div class="form-group">
                        <a href="{{ route('show',$producto->id) }}" class="btn btn-warning mt-3">Cancelar</a>
                        <button type="submit" class="btn btn-primary mt-3">Editar producto</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
