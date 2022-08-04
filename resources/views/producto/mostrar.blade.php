@extends('layouts.master')
@section('title', 'Mostrar Productos')



@section('header')
    @parent
@stop
@section('content')
    <div class="list-product">
        <div class="container">
            <div class="row">
                @foreach($productos as $producto)
                <div class="col-sm-4">
                    <div class="card item shadow-sm">
                        <div class="card-body">
                            <div class="image">
                                <a href="/productos/{{$producto['id']}}"><img src="{{$producto['imagen']}}" class="img-fluid"></a>
                                <span class="flag category">{{$producto->categorias->nombre}}</span>
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
                                        <a href="/productos/{{$producto['id']}}" class="btn btn-success">Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="d-flex actions-buttons align-items-center justify-content-center">
                        <div class="btn-group">
                            <a href="/productos/create" class="btn btn-success">Crear nuevo producto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer')
    @parent
@stop
