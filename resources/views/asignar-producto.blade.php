@extends('layouts.master')
@section('title', 'Home')



@section('header')
    @parent
@stop
@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        Formulario para asignar productos a una sucursal
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <br>
        <div class="col-sm-8 offset-sm-2">
            <form action="" method="">
                <div class="mb-3">
                    <label for="nameProduct" class="form-label">Nombre del producto</label>
                    <input type="text" class="form-control" id="nameProduct">
                </div>
                <div class="mb-3">
                    <label for="codProduct" class="form-label">Codigó del producto</label>
                    <input type="text" class="form-control" id="codProduct">
                </div>
                <div class="mb-3">
                    <label for="quantityProduct" class="form-label">Cantidad</label>
                    <input type="number" class="form-control" id="quantityProduct">
                </div>
                <br>
                <div class="dropdown mb-3">
                    <a class="btn btn-outline-info dropdown-toggle " role="button" id="dropSucursal"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Seleccionar sucursal
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropSucursal">
                        <li><a class="dropdown-item">Viña del Mar</a></li>
                        <li><a class="dropdown-item">Valparaiso</a></li>
                        <li><a class="dropdown-item">Santiago</a></li>
                    </ul>
                </div>
                <br>
                <button type="submit" class="btn btn-outline-primary">Asignar producto a sucursal</button>
            </form>
        </div>
    </div>
@stop

@section('footer')
    @parent
@stop
