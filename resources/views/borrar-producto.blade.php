@extends('layouts.master')
@section('title', 'Home')



@section('header')
    @parent
@stop
@section('content')

<div class="container">
    <div class="col-sm-8 offset-sm-2">
        <form action="" method="">

            <div class="mb-3">
                <label for="nameProduct" class="form-label">Ingresar ID producto</label>
                <input type="text" class="form-control" id="nameProduct">
            </div>
            <button type="submit" class="btn btn-primary">Eliminar</button>
        </form>
    </div>
</div>
@stop

@section('footer')
    @parent
@stop
