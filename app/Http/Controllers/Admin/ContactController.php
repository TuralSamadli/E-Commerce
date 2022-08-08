<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use GrahamCampbell\ResultType\Success;

class ContactController extends Controller
{
    public function contact(){
        return view('admin.contact');
    }
    public function index(){

        $users=Contact::where('id', 1)->first();
        return view('admin.contact',compact('users'));
    }

    public function store(Request $request)
    {
        $contact = Contact::where('id',1)->update([
            'name'      => $request->name,
            'surname'   => $request->surname,
            'adress'   => $request->adress,
            'email'         => $request->email
        ]);
        
             return redirect()-> back()->with('success','Istifadeci melumatlari yenilendi');
        
}
}