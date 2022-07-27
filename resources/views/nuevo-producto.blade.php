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
                        Formulario para agregar nuevos productos a una sucursal
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
                                <label for="nameProduct" class="form-label">Nombre del producto</label>
                                <input type="text" class="form-control" id="nameProduct">
                            </div>
                            <div class="mb-3">
                                <label for="codProduct" class="form-label">Codigó del producto</label>
                                <input type="text" class="form-control" id="codProduct">
                            </div>
                            <div class="mb-3">
                                <label for="categoryProduct" class="form-label">Categoría</label>
                                <select class="form-select form-select-md">
                                    <option selected>Categorías</option>
                                    <option value="1">Tarjetas de video</option>
                                    <option value="2">Procesadores</option>
                                    <option value="3">Placas Madre</option>
                                    <option value="4">Memorias Ram</option>
                                    <option value="5">Discos Duros</option>
                                    <option value="6">SSD</option>
                                    <option value="7">Tarjetas de Sonido</option>
                                    <option value="8">Tarjetas de Red</option>
                                    <option value="9">Gabinetes</option>
                                    <option value="10">Cooler CPU</option>
                                    <option value="12">Ventiladores</option>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="categoryProduct" class="form-label">Sucursal</label>
                                <select class="form-select form-select-md">
                                    <option selected>Sucursal disponible</option>
                                    <option value="1">Santiago</option>
                                    <option value="2">viña del mar</option>
                                    <option value="3">Valparaíso</option>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="categoryProduct" class="form-label">Disponibilidad</label>
                                <select class="form-select form-select-md">
                                    <option selected>Estado</option>
                                    <option value="1">Disponible</option>
                                    <option value="2">No Disponible</option>
                                    < </select>
                            </div>
                            <div class="mb-3">
                                <label for="quantityProduct" class="form-label">Cantidad</label>
                                <input type="number" class="form-control" id="quantityProduct">
                            </div>
                            <div class="mb-3">
                                <label for="quantityProduct" class="form-label">Precio de venta</label>
                                <input type="number" class="form-control" id="quantityProduct">
                            </div>
                            <div class="mb-3">
                                <label for="descriptionProduct" class="form-label">Descripción</label>
                                <textarea class="form-control" id="descriptionProduct"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Cargar imagen referencial</label>
                                <input class="form-control" type="file" id="formFile">
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
