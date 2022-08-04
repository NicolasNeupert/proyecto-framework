@extends('layouts.master')
@section('title', $producto[0]->nombre)

@section('header')
    @parent
@stop

@section('content')
    <section class="land-producto">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="stack-image">
                        <img src="{{$producto[0]->imagen}}" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="top-product">
                        <span class="category">{{$producto[0]->categorias->nombre}}</span>
                        <h2 class="name">{{$producto[0]->nombre}}</h2>
                        <div class="description">
                            <p>{{$producto[0]->descripcion}}</p>
                        </div>
                        <div class="price">
                            <p>${{$producto[0]->precio}}</p>
                        </div>
                        <div class="quantity">
                            <label for="quantity">Cantidad:</label>
                            <p>{{$producto[0]->cantidad}} en stock</p>
                        </div>
                        <div class="available">
                            <label for="sucursal">Estado:</label>
                            @if(($producto[0]->estado) == 1)
                            <p class="green">Producto Disponible</p>
                            @else
                            <p class="red">Producto no disponible</p>
                            @endif
                        </div>
                        <div class="sucursal">
                            <label for="sucursal">Sucursal:</label>
                            <p>{{$producto[0]->sucursales->direccion}}, {{$producto[0]->sucursales->comuna}}, {{$producto[0]->sucursales->ciudad}}</p>
                        </div>
                        <div class="actions-button">
                            <div class="row">
                                <div class="col-6 text-end">
                                    <a href="/productos/{{$producto[0]->id}}/edit" class="btn btn-primary">Editar</a>
                                </div>
                                <div class="col-6 text-start">
                                    <a href="#" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('footer')
    @parent
@stop