@extends('layouts.master')
@section('title', 'Home')



@section('header')
    @parent
@stop
@section('content')

<div class="container">
    <br>
    <div class="col-sm-8 offset-sm-2">
        <form action="" method="">
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="lastname" required>
            </div>
            <div class="mb-3">
                <label for="rut" class="form-label">Rut</label>
                <input type="text" class="form-control" id="rut" required>
            </div>
            <div class="mb-3">
                <label for="birthday" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="birthday" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="quantityProduct" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3">
                <label for="more_password" class="form-label">Repetir Contraseña</label>
                <input type="password" class="form-control" id="more_password">
            </div>
            <button type="submit" class="btn btn-primary">Crear Usuario</button>
        </form>
    </div>
</div>
@stop

@section('footer')
    @parent
@stop