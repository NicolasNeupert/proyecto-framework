@extends('layouts.master')
@section('title', 'Mostrar Sucursales')



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
                        Nuestras sucursales:
                    </div>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 align-items-center">
                <div class="d-flex actions-buttons">
                    
                    <div class="btn-group">
                        <a href="/sucursal/crear" class="btn btn-success">Crear nueva sucursal</a>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-md-4">
            </div>
        </div>

    </div>
    
   
        </div>
    </div>
    <div class="col-md-2">
    </div>
    </div>
    </div> 
    <div class="list-product">
        <div class="container">
            <div class="row">
                @foreach($sucursales as $sucursal)
                <div class="col-sm-4">
                    <div class="card item shadow-sm">
                        <div class="card-body">
                            <div class="image">
                                <span class="flag category">{{$sucursal['id']}}</span>
                            </div>
                            <div class="info-bottom">
                                <h3 class="name"><a href="">{{$sucursal['comuna']}}</a></h3>
                                <p class="card-text Contacto">
                                    {{$sucursal['telefonoSucursal']}}
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="price">
                                        <p>${{$sucursal['direccion']}}</p>
                                    </div>
                                    <div class="quantity">
                                    <p>${{$sucursal['emailSucursal']}}</p>
                                        <p>{{$sucursal['horarioSucursal']}} </p>
                                    </div>
                                </div>
                                <div class="d-flex actions-buttons">
                                    <div class="btn-group">
                                    <a href="/sucursal/editar" class="btn btn-success">Editar sucursal</a>
                                    <a href="/sucursal/eliminar" class="btn btn-danger">Eliminar sucursal</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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
