@extends('layouts.master')
@section('title', 'Eliminar Sucursal')



@section('header')
    @parent
@stop
@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    Formulario para eliminar Sucursal                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <br>
                <div class="container">
                    <div class="col-sm-8 offset-sm-2">
                        <form action="" method="">

                            <div class="mb-3">
                                <label for="nameProduct" class="form-label">Ingresar ID de Sucursal</label>
                                <input type="text" class="form-control" id="nameProduct">
                            </div>
                            <button type="submit" class="btn btn-danger">Eliminar sucursal</button>
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