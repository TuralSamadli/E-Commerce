<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('detail')->where('is_deleted', 0)->paginate(3);
        return view('admin.product.index',compact('products'));
    }

    public function create()
    {
        $categories = Category::where('is_deleted', 0)->get();
        return view('admin.product.create',compact('categories'));
    }

    public function store(ProductStoreRequest $request)
    {
        try {
            DB::beginTransaction();
            $product  = Product::create([
                'name'      => $request->product_name,
                'slug'       => Str::slug($request->product_name),
                'description'   => $request->product_description,
                'category_id'   => $request->category_id,
                'price'         => $request->product_price

            ]);
            ProductDetail::create([
                'product_id'      => $product->id,
                'is_bestseller'   => $request->is_bestseller ?? 0,
                'is_new'          => $request->is_new ?? 0,
                'is_on_sale'         => $request->is_bestseller ?? 0,
                'is_chance'          => $request->is_chance ?? 0

            ]);

            DB::commit();
        } catch (\PDOException $e) {

            DB::rollBack();
        }

        if ($product)
        {
            return redirect()->route('product.index')->with('success','Melumat ugurla elave olundu!!!');
        }
        else{
            return redirect()->route('product.create')->with('errors','Xeta bas verdi!!!');
        }
    }

          
}
