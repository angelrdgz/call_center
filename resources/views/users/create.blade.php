@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="card shadow mb-4">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-10 pt-2">
                        <h5 class="m-0 font-weight-bold text-primary">Usuarios</h5>
                    </div>
                    <div class="col-sm-2">
                        <a href="{{ url('admin/users/new') }}" class="btn btn-link">
                            <i class="fas fa-plus"></i>
                            Nuevo Usuario
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
            <form method="POST" action="{{ url('admin/users') }}">
                        @csrf
                <div class="row">
                
                    <div class="col-sm-4">
                        <label for="">Nombre</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Rol</label>
                        <select name="role" id="" class="form-control">
                            <option value="">Seleccione un Rol</option>
                            <option value="1">Administrador</option>
                            <option value="2">Encuestador</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <label for="">Contraseña</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Confirmar Contraseña</label>
                        <input type="password" name="confirm" class="form-control">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4 offset-sm-4">
                        <button class="btn btn-primary btn-block">Guardar</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop