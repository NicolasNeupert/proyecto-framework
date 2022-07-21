@extends('layouts.master')
@section('title', 'Home')



@section('header')
    @parent
@stop
@section('content')

<div class="container">
    <div class="col-sm-8 offset-sm-2">
        <form action="" method="">

            <div class="mb-3">
                <label for="nameProduct" class="form-label">Ingresar ID producto</label>
                <input type="text" class="form-control" id="nameProduct">
            </div>
            <div class="mb-3">
                <label for="categoryProduct" class="form-label">Nuevo nombre del producto</label>
                <input type="text" class="form-control" id="categoryProduct">
            </div>
            <div class="mb-3">
                <label for="descriptionProduct" class="form-label">Nueva descripción</label>
                <textarea class="form-control" id="descriptionProduct"></textarea>
            </div>
            <div class="mb-3">
                <label for="quantityProduct" class="form-label">Nuevo precio</label>
                <input type="number" class="form-control" id="quantityProduct">
            </div>
            <button type="submit" class="btn btn-primary">Actualiazar/Guardar</button>
        </form>
    </div>
</div>
@stop

@section('footer')
    @parent
@stop