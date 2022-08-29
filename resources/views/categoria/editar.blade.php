@extends('layouts.master')
@section('title', 'Editar Categoria')



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
                        Formulario para actualizar información de categoría:
                            <form action="{{ url('/categorias/update') }}" method="POST">
              
                    </div>
                    @foreach($categorias as $categoria)

                  
                </div>
            </div>
         
            <div class="col-md-4">
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="container">
                
                    <br>
                    <div class="col-sm-8 offset-sm-2">
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $categorias[0]->id }}">
                     <div class="mb-3">
                   
                    
                                <label for="categoryProduct" class="form-label">Actual nombre de categoria : {{$categorias[0]->nombre}} </label>
                               
                                <input type="text" class="form-control" name="nombre" placeholder="ingresar nuevo nombre de categoria">
                            </div>
                            <div class="mb-3">
                                <label for="descriptionProduct" class="form-label">Descripción </label>
                                <textarea class="form-control" id="descriptionProduct"></textarea>
                            </div>
                            <br>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                    </div>
                                    @endforeach
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-warning">Limpiar</button>
                                    </div>
                                    <div class="col-md-3">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer')
    @parent
@stop
