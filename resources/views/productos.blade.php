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
                        Gestor de productos
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card mb-3 border-info" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <br>
                                    <img src="img/ingresar.png" class="card-img-top" style="width: 200px; heigth: 200px"
                                        alt="...">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Ingresar Producto</h5>
                                        <p class="card-text">Formulario para ingresar un nuevo producto</p>
                                        </p>
                                        <div class="d-grid gap-2">

                                            <a type="button" class="btn btn-outline-dark"
                                                href="/nuevo-producto">Ingresar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3 border-info" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <br>
                                    <img src="img/actualizar.png" class="card-img-top" style="width: 200px; heigth: 200px"
                                        alt="...">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Actualizar Producto</h5>
                                        <p class="card-text">Gestor para editar, actualizar y/o eliminar un producto
                                        </p>
                                        <div class="d-grid gap-2">

                                            <a type="button" class="btn btn-outline-dark"
                                                href="/actualizar-producto">Ingresar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3 border-info" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <br>
                                    <img src="img/buscar.png" class="card-img-top" style="width: 200px; heigth: 200px"
                                        alt="...">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Buscar Producto</h5>
                                        <p class="card-text">Buscador de un producto dentro del sistema</p>
                                        <div class="d-grid gap-2">

                                            <a type="button" class="btn btn-outline-dark"
                                                href="/consultar-producto">Ingresar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3 border-info" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <br>
                                    <img src="img/sucursal.png" class="card-img-top" style="width: 200px; heigth: 200px"
                                        alt="...">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Ingresar nueva Sucursal</h5>
                                        <p class="card-text">Gestionar la incorporación de una nueva sucursal al
                                            sistema</p>
                                        <div class="d-grid gap-2">
                                            <a type="button" class="btn btn-outline-dark"
                                                href="/borrar-producto">Ingresar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2">
    </div>
    </div>
    </div>
@stop

@section('footer')
    @parent
@stop
