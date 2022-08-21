@extends('layouts.master')
@section('title', 'Nuevo Producto')



@section('header')
    @parent
@stop
@section('content')
<section class="landing-screen">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="ingresarProductoNuevo">
                    <form action="{{ url('/productos')}}" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre del producto</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Desktop Gamer Red Leeroy AMD Ryzen 3">
                        </div>
                        <div class="mb-3">
                            <label for="codigo" class="form-label">Codigó del producto</label>
                            <input type="text" class="form-control" name="codigo" placeholder="XXXXXXXXXXX">
                        </div>
                        <div class="mb-3">
                            <label for="categoria" class="form-label" >Categoría</label>
                            <select class="form-select form-select-md" name="categoria">
                                <option value="null">Elije una categoría</option>
                                @foreach($categorias as $categoria)
                                <option value="{{$categoria['id']}}">{{$categoria['nombre']}}</option>
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
                            <label for="estado" class="form-label">Estado</label>
                            <select class="form-select form-select-md" name="estado">
                                <option value="null">Seleccione una opción</option>
                                <option value="1">Disponible</option>
                                <option value="0">No Disponible</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio de venta</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" name="precio" placeholder="599000">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" name="descripcion"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="imagen" class="form-label">Cargar imagen referencial</label>
                            <input type="file" class="form-control" name="imagen" accept=".jpg, .png, .gif">
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
