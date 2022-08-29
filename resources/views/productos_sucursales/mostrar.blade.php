@extends('layouts.master')
@section('title', 'Mostrar Productos por sucursales')



@section('header')
    @parent
@stop
@section('content')
    <div class="list-product">
        <div class="container">
        <div class="row">
                <div class="col-sm-12">
                    <div class="title_section">
                        <h2>Inventario de productos por sucursal</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <br>
                <div class="row">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4">
                        <a name="asignar" class="btn btn-outline-primary" href="/productosconsucursales/create" >Asignar Stock a Sucursal</a>
                    </div>
                </div>
                <br>
                <br>
                <div class="col-sm-2">
                    <div class="sidebar">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            @foreach($sucursales as $sucursal)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link @if ($loop->first) active @endif" id="pills-{{$sucursal->comuna}}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{$sucursal->comuna}}" type="button" role="tab" aria-controls="pills-{{$sucursal->comuna}}" aria-selected="true">{{$sucursal->comuna}}</button>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="listSucursal">
                        <div class="tab-content" id="pills-tabContent">
                            @foreach($sucursales as $sucursal)
                            <div class="tab-pane fade @if ($loop->first) show active @endif" id="pills-{{$sucursal->comuna}}" role="tabpanel" aria-labelledby="pills-{{$sucursal->comuna}}-tab" tabindex="0">
                                <div class="row">
                                    @foreach($productos_sucursales as $producto_sucursal)
                                        @if($producto_sucursal->sucursales->id == $sucursal->id)
                                        <div class="col-sm-4">
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
                                <div class="row">
                                    <div class="col-sm-12">
                                        <a href="/sucursales/{{$sucursal->id}}">Ver sucursal</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
