@extends('layouts.master')
@section('title', 'Home')



@section('header')
    @parent

@stop
@section('content')
    <div class="here-scene">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3 text-center">
                    <div class="banner-main">
                        <h1>MarketPlace</h1>
                        <p>Un lugar donde puedes buscar los productos que se encuentran disponibles</p>
                    </div>
                </div>
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
                                        <a href="" class="btn btn-success">Ver más</a>
                                        <a href="" class="btn btn-danger">Editar</a>
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
@stop

@section('footer')
    @parent
@stop
