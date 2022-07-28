@extends('layouts.master')
@section('title', 'Home')



@section('header')
    @parent

@stop
@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light bg-transparent">
                <br>
                <div class="col-md-5 p-lg-5 mx-auto my-5">
                    <h1 class="display-4 fw-normal">MarketPlace</h1>
                    <p class="lead fw-normal">Un lugar donde puedes buscar los productos que se encuentran disponibles
                    </p>

                </div>
                <div class="product-device shadow-sm d-none d-md-block"></div>
                <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
                <br>
                   
                
            </div>
        </div>
    </div>

@stop

@section('footer')
    @parent
@stop
