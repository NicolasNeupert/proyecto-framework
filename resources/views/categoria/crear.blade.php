@extends('layouts.master')
@section('title', 'Crear Categoria')



@section('header')
    @parent
@stop
@section('content')
<section class="landing-screen">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="ingresarProductoNuevo">
                    <form action="{{ url('/categorias')}}" method="POST">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre o Tipo</label>
                            <input type="text" class="form-control" name="nombre">
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción </label>
                            <textarea class="form-control" name="descripcion"></textarea>
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