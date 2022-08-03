@extends('layouts.master')
@section('title', 'Mostrar Categoría')



@section('header')
    @parent
@stop
@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                       Listado de Categorías
                    </div>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 align-items-center">
                <div class="d-flex actions-buttons">
                    <div class="btn-group">
                        <a href="/categoria/crear" class="btn btn-success">Crear nueva categoría</a>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-md-4">
            </div>
        </div>

    </div>
    
   
        </div>
    </div>
    <div class="col-md-2">
    </div>
    </div>
    </div> 
    <div class="list-product">
        <div class="container">
            <div class="row">
                @foreach($categorias as $categoria)
                <div class="col-sm-4">
                    <div class="card item shadow-sm">
                        <div class="card-body">
                            <div class="image">
                                <span class="flag category">{{$categoria['id']}}</span>
                            </div>
                            <div class="info-bottom">
                                <h3 class="name"><a href="">{{$categoria['nombre']}}</a></h3>
                                <p class="card-text Contacto">
                                    {{$categoria['descripcion']}}
                                </p>
                                <div class="d-flex actions-buttons">
                                    <div class="btn-group">
                                    <a href="/categoria/editar" class="btn btn-success">Editar Categoría</a>
                                    <a href="/categoria/eliminar" class="btn btn-danger">Eliminar Categoría</a>

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
    <div class="col-md-2">
    </div>
    </div>
    </div>  
 
@stop

@section('footer')
    @parent
@stop
