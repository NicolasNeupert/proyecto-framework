@extends('layouts.master')
@section('title', 'Editar Producto')



@section('header')
    @parent
@stop
@section('content')
<section class="landing-screen">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="ingresarProductoNuevo">
                    <form action="{{ url('/productos/update') }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $producto[0]->id }}">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre del producto</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Desktop Gamer Red Leeroy AMD Ryzen 3" value="{{$producto[0]->nombre}}">
                        </div>
                        <div class="mb-3">
                            <label for="codigo" class="form-label">Codigó del producto</label>
                            <input type="text" class="form-control" name="codigo" placeholder="XXXXXXXXXXX" value="{{$producto[0]->codigo}}">
                        </div>
                        <div class="mb-3">
                            <label for="categoria" class="form-label" >Categoría</label>
                            <select class="form-select form-select-md" name="categoria">
                                @foreach($categorias as $categoria)
                                    @if($categoria['id'] == $producto[0]->categorias->id)
                                        <option value="{{$categoria['id']}}" selected>{{$categoria['nombre']}}</option>
                                    @else
                                    <option value="{{$categoria['id']}}">{{$categoria['nombre']}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <select class="form-select form-select-md" name="estado">
                                @if(($producto[0]->estado) == 1)
                                    <option value="1" selected>Disponible</option>
                                    <option value="0">No disponible</option>
                                @else if(($producto[0]->estado) == 0)
                                    <option value="1">Disponible</option>
                                    <option value="0" selected>No disponible</option>
                                @endif
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio de venta</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" name="precio" placeholder="599000" value="{{$producto[0]->precio}}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" name="descripcion">{{$producto[0]->descripcion}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="imagen" class="form-label">Cargar imagen referencial</label>
                            <input type="file" class="form-control" name="imagen" accept=".jpg, .png, .gif">
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <button type="submit" name="save" class="btn btn-primary">Guardar</button>
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
