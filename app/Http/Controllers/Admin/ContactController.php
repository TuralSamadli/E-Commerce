<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact(){
        return view('admin.contact');
    }
    public function index(){

        $users=Contact::where('id', 1)->first();
        return view('admin.contact',compact('users'));
    }

    // public function store(Request $request, $id)
    // {
    //     $users = Contact::find($id);
    //     $users->name = $request->input('name');
    //     $users->email = $request->input('email');
    //     $users->surname = $request->input('surname');
    //     $users->adress = $request->input('adress');
    //     $users->update();
    //     return redirect()->back()->with('status','User Updated Successfully');
    // }
}
