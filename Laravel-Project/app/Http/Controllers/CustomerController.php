<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer');
    }
    public function login(){
        $name ="Lê Văn Xuân!";
        return view('login')->with('name',$name); 
    }
}
