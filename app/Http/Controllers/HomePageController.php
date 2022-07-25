<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
   public function index()
   {
       $title = 'Home Page';
       $categories = Category::where('is_deleted', 0)->get();
//       $new_products = Product::all(); //lazy loading // join product_table və is_new=1 olanlar

       $new_products = Product::select('product.*','product_detail.image as img')
           ->join('product_detail', 'product_detail.product_id', 'product.id')
           ->where('product_detail.is_new', 1)
           ->orderBy('product.id','DESC')
           ->take(4)
           ->get();
//       $new_products = DB::table('product')->select('product.*','product_detail.image as img')
//           ->join('product_detail', 'product_detail.product_id', 'product.id')
//           ->where('product_detail.is_new', 1)
//           ->get();

//       dd($new_products);
       $best_sellers = Product::with('detail')->get(); //eager loading
//       dd($best_sellers);
       $on_sales = Product::all();
       $sliders = Slider::where('is_deleted',0)->get();

       return view('homepage',compact('title','categories','new_products','best_sellers','on_sales','sliders'));
   }
}
