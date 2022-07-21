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
                    <label for="nameProduct" class="form-label">Nombre del producto</label>
                    <input type="text" class="form-control" id="nameProduct">
                </div>
                <div class="mb-3">
                    <label for="codProduct" class="form-label">Codigó del producto</label>
                    <input type="text" class="form-control" id="codProduct">
                </div>
                <div class="mb-3">
                    <label for="categoryProduct" class="form-label">Categoría</label>
                    <input type="text" class="form-control" id="categoryProduct">
                </div>
                <div class="mb-3">
                    <label for="descriptionProduct" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descriptionProduct"></textarea>
                </div>
                <div class="mb-3">
                    <label for="quantityProduct" class="form-label">Cantidad</label>
                    <input type="number" class="form-control" id="quantityProduct">
                </div>
                <div class="mb-3">
                    <label for="quantityProduct" class="form-label">Precio de venta</label>
                    <input type="number" class="form-control" id="quantityProduct">
                </div>
                <br>
                <div class="dropdown mb-3">
                    <a class="btn btn-outline-info dropdown-toggle mb-3" role="button" id="dropSucursal"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Seleccionar sucursal
                    </a>
                    
                    <ul class="dropdown-menu" aria-labelledby="dropSucursal">
                        <li><a class="dropdown-item" >Viña del Mar</a></li>
                        <li><a class="dropdown-item" >Valparaiso</a></li>
                        <li><a class="dropdown-item" >Santiago</a></li>
                    </ul>
                </div>
                <br>
                <button type="submit" class="btn btn-outline-primary">Guardar</button>
            </form>
        </div>
    </div>
@stop

@section('footer')
    @parent
@stop
