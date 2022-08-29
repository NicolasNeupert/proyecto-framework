@extends('layouts.master')
@section('title', $categoria[0]->nombre)

@section('header')
    @parent
@stop

@section('content')
    <section class="land-categoria">
        <div class="container">
            <div class="row">
            <div class="col-sm-7"> 
                <div class="col-sm-5">
                    <div class="top-product">
                        <span class="category">Categoria:</span>
                        <h2 class="name">{{$categoria[0]->nombre}}</h2>
                        <div class="description">
                            <p>{{$categoria[0]->descripcion}}</p>
                        </div>
                        </div>
                        <div class="actions-button">
                            <div class="row">
                                <div class="col-6 text-end">
                                    <a href="/categorias/{{$categoria[0]->id}}/edit" class="btn btn-primary">Editar</a>
                                </div>
                                <div class="col-6 text-start">
                                    <a href="/categorias/{{$categoria[0]->id}}/delete" class="btn btn-danger">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('footer')
    @parent
@stop