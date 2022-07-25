@extends('layouts.master')
@section('title',$title)
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Categories</div>
                    <div class="list-group categories">
                        @foreach($categories as $category)
                            <a target="_blank" href="{{ route('category.show',$category->id) }}" class="list-group-item"><img src="{{ $category->icon }}"/> {{ $category->name }} </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @foreach($sliders as $slider)
                        <div class="item @if($sliders[0] == $slider) active  @endif">
                            <img src="{{ $slider->image }}" alt="{{ $slider->title }}">
                            <div class="carousel-caption">
                                {{ $slider->title }}
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" id="sidebar-product">
                    <div class="panel-heading">Günün Fırsatı</div>
                    <div class="panel-body">
                        <a href="#">
{{--                            <img src="http://lorempixel.com/400/485/food/1" class="img-responsive">--}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">New Products</div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($new_products as $new_product)
                            <div class="col-md-3 product">
                                <a href="{{ route('product.show',$new_product->slug) }}"><img src="{{ $new_product->img }}"></a>
                                <p><a href="#">{{ $new_product->name }}</a></p>
                                <p class="price">{{ $new_product->price }} ₼</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">Best Seller Products</div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($best_sellers as $best_seller)
                            <div class="col-md-3 product">
                                <a href="#"><img src="https://images.unsplash.com/photo-1653909245872-5769b501eca9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60"></a>
                                <p><a href="#">{{ $best_seller->name }}</a></p>
                                <p class="price">{{ $best_seller->price }} ₼</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">İndirimli Ürünler</div>
                <div class="panel-body">
                    <div class="row">
{{--                        <div class="col-md-3 product">--}}
{{--                            <a href="#"><img src="http://lorempixel.com/400/400/food/1"></a>--}}
{{--                            <p><a href="#">Ürün adı</a></p>--}}
{{--                            <p class="price">129 ₺</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-3 product">--}}
{{--                            <a href="#"><img src="http://lorempixel.com/400/400/food/2"></a>--}}
{{--                            <p><a href="#">Ürün adı</a></p>--}}
{{--                            <p class="price">129 ₺</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-3 product">--}}
{{--                            <a href="#"><img src="http://lorempixel.com/400/400/food/3"></a>--}}
{{--                            <p><a href="#">Ürün adı</a></p>--}}
{{--                            <p class="price">129 ₺</p>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-3 product">--}}
{{--                            <a href="#"><img src="http://lorempixel.com/400/400/food/4"></a>--}}
{{--                            <p><a href="#">Ürün adı</a></p>--}}
{{--                            <p class="price">129 ₺</p>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
