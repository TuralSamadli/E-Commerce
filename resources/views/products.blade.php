@extends('layouts.master')
@section('title',$title)
@section('content')
{{--    {{ dd($product) }}--}}
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}">Anasayfa</a></li>
            <li><a href="#">Products</a></li>
            <li class="active">{{ $product->name }}</li>
        </ol>
        <div class="bg-content">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ $product->detail->image }}">
                    <hr>
                </div>
                <div class="col-md-7">
                    <h1>{{ $product->name }}</h1>
                    <p class="price">{{ $product->price }} ₺</p>
                </div>
            </div>

            <div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#t1" data-toggle="tab">Product Detail</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="t1">{{ $product->description }}</div>
                </div>
            </div>

        </div>
    </div>
@endsection
