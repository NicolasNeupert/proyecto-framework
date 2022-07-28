@extends('layouts.master')
@section('title', 'Home')



@section('header')
    @parent

@stop
@section('content')
    <div class="here-scene">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3 text-center">
                    <div class="banner-main">
                        <h1>MarketPlace</h1>
                        <p>Un lugar donde puedes buscar los productos que se encuentran disponibles</p>
                    </div>
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
