@extends('layouts.master')
@section('title', 'Mostrar Productos')



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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 align-items-center">
                <div class="d-flex actions-buttons">
                    <div class="btn-group">
                        <a href="/producto/crear" class="btn btn-success">Ingresar Producto a Inventario</a>
                        <a href="/producto/consultar" class="btn btn-info">Buscar Producto a Inventario</a>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
                
    <div class="list-product">
        <div class="container">
            <div class="row">
                @foreach($productos as $producto)
                <div class="col-sm-4">
                    <div class="card item shadow-sm">
                        <div class="card-body">
                            <div class="image">
                                <a href=""><img src="{{$producto['imagen']}}" class="img-fluid"></a>
                                <span class="flag category">{{$producto['categoria']}}</span>
                            </div>
                            <div class="info-bottom">
                                <h3 class="name"><a href="">{{$producto['nombre']}}</a></h3>
                                <p class="card-text description">
                                    {{$producto['descripcion']}}
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="price">
                                        <p>${{$producto['precio']}}</p>
                                    </div>
                                    <div class="quantity">
                                        <p>{{$producto['cantidad']}} stock</p>
                                    </div>
                                </div>
                                <div class="d-flex actions-buttons">
                                    <div class="btn-group">
                                        <a href="/producto/detalle" class="btn btn-success">Ver más</a>
                                        <a href="/producto/editar" class="btn btn-success">Editar</a>
                                        <a href="/producto/eliminar" class="btn btn-danger">eliminar</a>
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
