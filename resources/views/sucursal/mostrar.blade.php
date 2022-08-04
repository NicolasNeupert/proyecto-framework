@extends('layouts.master')
@section('title', 'Mostrar Sucursales')



@section('header')
    @parent
@stop
@section('content')
    <div class="list-product">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title_section">
                        <h2>Nuestas sucursales</h2>
                    </div>
                    <div class="listSucursales">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Comuna</th>
                                        <th scope="col">Ciudad</th>
                                        <th scope="col">Teléfono</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sucursales as $sucursal)
                                    <tr>
                                        <th scope="row">{{$sucursal['id']}}</th>
                                        <td>{{$sucursal['direccion']}}</td>
                                        <td>{{$sucursal['comuna']}}</td>
                                        <td>{{$sucursal['ciudad']}}</td>
                                        <td>{{$sucursal['telefono']}}</td>
                                        <td>{{$sucursal['email']}}</td>
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
                            <a href="/sucursales/create" class="btn btn-success">Crear nueva sucursal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer')
    @parent
@stop
