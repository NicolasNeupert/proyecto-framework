@extends('layouts.master')
@section('title', 'Mostrar Categoría')



@section('header')
    @parent
@stop
@section('content')
    <div class="list-product">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title_section">
                        <h2>Nuestas categorías</h2>
                    </div>
                    <div class="listSucursales">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Descripción</th>                                        
                                    </tr>
                                </thead>
                           
                                <tbody>
                               
                                    @foreach($categorias as $categoria)
                               
                                    <tr>
                                        <th scope="row">{{$categoria['id']}}</th>
                                        <td>{{$categoria['nombre']}}</td>
                                        <td>{{$categoria['descripcion']}}</td>
                                        <td> <div class="d-flex actions-buttons">
                                    <div class="btn-group">
                                        <a href="/categorias/{{$categoria['id']}}" class="btn btn-success">Ver más</a>
                                    </div>
                                </div> 
                            </td>
                                    </tr>
                                   
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="d-flex actions-buttons align-items-center justify-content-center">
                        <div class="btn-group">
                            <a href="/categorias/create" class="btn btn-success">Crear nueva categoría</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
           
            </div>
        </div>
    </div>
@stop

@section('footer')
    @parent
@stop
