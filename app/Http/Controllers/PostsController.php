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

    public function show(Product $product){
        return view('show',[
            "product"=>$product
        ]);
    }
}
