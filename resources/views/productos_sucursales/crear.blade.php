@extends('layouts.master')
@section('title', 'Asignar producto a sucursal')



@section('header')
    @parent
@stop
@section('content')
<section class="landing-screen">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="ingresarProductoNuevo">
                    <form action="{{ url('/productosconsucursales')}}" method="POST">
                    <div class="mb-3">
                            <label for="producto" class="form-label">Productos</label>
                            <select class="form-select form-select-md" name="producto">
                                <option value="null">Elije un producto</option>
                                @foreach($productos as $producto)
                                <option value="{{$producto['id']}}">{{$producto['nombre']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="sucursal" class="form-label">Sucursal</label>
                            <select class="form-select form-select-md" name="sucursal">
                                <option value="null">Elije una comuna</option>
                                @foreach($sucursales as $sucursal)
                                <option value="{{$sucursal['id']}}">{{$sucursal['comuna']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <div class="input-group">
                                <input type="number" class="form-control" name="cantidad" placeholder="99">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 text-end">
                                <button type="submit" name="save" class="btn btn-primary">Guardar</button>
                            </div>
                            <div class="col-6 text-start">
                                <button type="submit" name="clear" class="btn btn-danger">Limpiar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@stop

@section('footer')
    @parent
@stop
