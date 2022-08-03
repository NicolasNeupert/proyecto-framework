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
            </div>
        </div>
    </div>
    
@stop

@section('footer')
    @parent
@stop