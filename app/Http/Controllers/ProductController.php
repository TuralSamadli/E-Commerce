<?php

namespace App\Http\Controllers;


use App\Models\Product;

class ProductController extends Controller
{
    public function index($slug){
        $title = 'Product Page';
        $product = Product::where('slug', $slug)->with('detail')->first();
        return view('products', compact('title','product'));
    }

    public function create()
    {
        return view('admin.product.create');
    }
}
