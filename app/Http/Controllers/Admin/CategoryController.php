<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_deleted', 0)->paginate(1);
        return view('admin.category.index',compact('categories'));
    }
    public function create()
    {
        return view('admin.category.create');
    }
    public function store(CategoryStoreRequest $request)
    {

        if($request->hasFile('category_icon'))
        {
            $image = $request->file('category_icon');
            $name = Str::random(16) . '.' . $image->getClientOriginalExtension();
            $directory = public_path('img/category_images');
            $image->move($directory, $name);
            // unlink - update zamani kohne seklin silinmesi
        }

        $category = new Category();

        $category->name = $request->category_name;
        $category->slug = Str::slug($request->category_name);
        $category->icon = $name;

//       $category = Category::create([
//            'name'       => $request->category_name,
//            'slug'       => Str::slug($request->category_name),
//            'icon'       => $name
//        ]);
       if ($category->save())
       {
           return redirect()->route('category.index')->with('success','Melumat ugurla elave olundu!!!');
       }
       else{
           return redirect()->route('category.create')->with('errors','Xeta bas verdi!!!');
       }
    }

    public function edit($id)
    {
//        $category = Category::find($id);
//        dd($category);
        $category = Category::where('id',$id)->first();
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request)
    {
        $category = Category::where('id',$request->id_category)->first();
//        dd($category->icon);
        @unlink(public_path('admin/img/category_images/'. $category->icon));
//
//        $category = Category::where('id',$request->id_category)->update([
//            'name'      => $request->category_name,
//            'slug'       => Str::slug($request->category_name)
//        ]);
        if ($category)
        {
            return redirect()->route('category.index')->with('success','Melumat ugurla redakte olundu!!!');
        }
        else{
            return redirect()->route('category.index')->with('errors','Xeta bas verdi!!!');
        }
    }

    public function delete(Request $request){
//        dd($request->all());
        if(Category::destroy($request->id)){
            return "ok";
        }
        else{
            return "no";
        }
    }
}
