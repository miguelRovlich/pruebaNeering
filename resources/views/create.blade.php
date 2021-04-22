@extends('layout.master')

@section('main')
    <h3>Agregar producto</h3>
    <div class="row">
        <div class="col">
            <form action="{{route('store')}}" method="post">
                @csrf
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
                        <a href="{{ route('index') }}" class="btn btn-warning mt-3">Cancelar</a>
                        <button type="submit" class="btn btn-primary mt-3">Agregar producto</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection