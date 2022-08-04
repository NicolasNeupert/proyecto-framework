@extends('layouts.master')
@section('title', 'Crear Sucursal')



@section('header')
    @parent
@stop
@section('content')
<section class="landing-screen">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="ingresarProductoNuevo">
                <form action="{{ url('/sucursales') }}" method="POST">
                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" name="direccion">
                            </div>
                            <div class="mb-3">
                                <label for="comuna" class="form-label">Comuna</label>
                                <input type="text" class="form-control" name="comuna">
                            </div>
                            <div class="mb-3">
                                <label for="ciudad" class="form-label">Ciudad</label>
                                <input type="text" class="form-control" name="ciudad">
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="phone" class="form-control" name="telefono">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email de contacto</label>
                                <input type="email" class="form-control" name="email">
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
