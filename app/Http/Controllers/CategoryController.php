<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id)
    {
        $title = 'Category Page';
        $category = Category::where('id', $id)->first();
//        dd($id);
        $products = Product::with('detail')->where('category_id', $id)->where('is_deleted', 0)->get();
//        dd($products);
        return view('category',compact('title','products','category'));
    }

}
