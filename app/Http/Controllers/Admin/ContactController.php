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
}
