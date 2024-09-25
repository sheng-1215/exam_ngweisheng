<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;


class viewController extends Controller
{
    public function index(){
        return view("index",[
            "Products" => Products::all()
        ]);
    }

    public function register(){
        return view("register");
    }

    public function login(){
        return view("login");
    }
}
