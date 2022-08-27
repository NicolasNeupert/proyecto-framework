@extends('layouts.master')
@section('title', $sucursal[0]->comuna)

@section('header')
    @parent
@stop

@section('content')
    <section class="land-producto">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="top-product">
                        <h2 class="name">{{$sucursal[0]->direccion}}, {{$sucursal[0]->comuna}}, {{$sucursal[0]->ciudad}}</h2>

                        <div class="productos">
                            <div class="row">
                            @foreach($productos_sucursales as $producto_sucursal)
                                @if($producto_sucursal->sucursales->id == $sucursal[0]->id)
                                <div class="col-sm-3">
                                    <div class="card item shadow-sm">
                                        <div class="card-body">
                                            <div class="image">
                                                @if(Storage::disk('images')->has($producto_sucursal->productos->imagen))
                                                <a href="/productos/{{$producto_sucursal->productos->id}}"><img src="{{ url('miniatura/'.$producto_sucursal->productos->imagen) }}" class="img-fluid"></a>
                                                @else
                                                <a href="/productos/{{$producto_sucursal->productos->id}}"><img src="{{$producto_sucursal->productos->imagen}}" class="img-fluid"></a>
                                                @endif
                                                <span class="flag category">{{$producto_sucursal->productos->categorias->nombre}}</span>
                                            </div>
                                            <div class="info-bottom">
                                                <h3 class="name"><a href="">{{$producto_sucursal->productos->nombre}}</a></h3>
                                                <p class="card-text description">
                                                    {{$producto_sucursal->productos->descripcion}}
                                                </p>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="price">
                                                        <p>${{$producto_sucursal->productos->precio}}</p>
                                                    </div>
                                                    <div class="quantity">
                                                        <p>{{$producto_sucursal->cantidad}} stock</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex actions-buttons">
                                                    <div class="btn-group">
                                                        <a href="/productos/{{$producto_sucursal->productos->id}}" class="btn btn-success">Ver más</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                @endif
                            @endforeach
                            </div>
                        </div>
                        <div class="actions-button">
                            <div class="row">
                                <div class="col-6 text-end">
                                    <a href="/productos/{{$sucursal[0]->id}}/edit" class="btn btn-primary">Editar</a>
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