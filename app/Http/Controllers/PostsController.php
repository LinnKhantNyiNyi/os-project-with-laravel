<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        return view('index',[
            "products"=>Product::all()
        ]);
    }

    public function show(){
        return view('show');
    }
}
