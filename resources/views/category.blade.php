@extends('layouts.master')
@section('title',$title)
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}">Anasayfa</a></li>
            <li>Categories</li>
            <li class="active">{{ $category->name }}</li>
        </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="products bg-content">
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-md-3 product">
                            <a href="{{ route('product.show',$product->slug) }}"><img src="{{ $product->detail->image }}"></a>
                            <p><a href="{{ route('product.show',$product->slug) }}">{{ $product->name }}</a></p>
                            <p class="price">{{ $product->price }} ₺</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
