@extends('layout.master')

@section('main')
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card mt-5">
                <div class="card-header bg-dark text-white">Prueba Tecnica Neering</div>
                    <div class="card-body">
                        <h5>Inicio de Sesion</h5>
                        <form method="POST" action="{{route('Usuario.login')}}">
                            @csrf
                            <div class="form-group">
                                <label for="username">Nombre de Usuario</label>
                                <input type="text" id="username" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Contrasena</label>
                                <input type="password" id="password" name="password" class="form-control mb-2">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-primary">Iniciar Sesion</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>

@endsection
