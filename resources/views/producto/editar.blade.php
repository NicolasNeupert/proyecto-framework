@extends('layouts.master')
@section('title', 'Editar Producto')



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
                        Formulario para actualizar información de un producto
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="container">
                    <br>
                    <div class="col-sm-8 offset-sm-2">
                        <form action="" method="">

                            <div class="mb-3">
                                <label for="nameProduct" class="form-label">Ingresar ID producto</label>
                                <input type="text" class="form-control" id="nameProduct">
                            </div>
                            <div class="mb-3">
                                <label for="categoryProduct" class="form-label">Nombre del producto</label>
                                <input type="text" class="form-control" id="categoryProduct">
                            </div>
                            <div class="mb-3">
                                <label for="descriptionProduct" class="form-label">Descripción</label>
                                <textarea class="form-control" id="descriptionProduct"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="quantityProduct" class="form-label">Precio</label>
                                <input type="number" class="form-control" id="quantityProduct">
                            </div>
                            <br>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-outline-primary">Guardar</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-outline-danger">Limpiar</button>
                                    </div>
                                    <div class="col-md-3">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer')
    @parent
@stop
