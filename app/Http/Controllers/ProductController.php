<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;


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
    public function search(Request $request){
        $data=$request->search_data;
        $products=Product::where('name','like','%'. $data.'%') -> orWhere ('description','like','%'. $data.'%')->get();
    }
}
