<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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






public function post(){

       
        $formData=request()->validate([
            "name" =>['required','max:225','min:4'],
            "price"=>['required'],
            "category_id"=>["required",Rule::exists('categories','id')]
        ]);
        $formData['admin_id']= auth()->id();
        $formData['photo_1']=request()->file('photo_1')->store("productphotos");
        $formData['photo_2']=request()->file('photo_2')->store("productphotos");
        $formData['photo_3']=request()->file('photo_3')->store("productphotos");


    
        Product::create($formData);
       return redirect('/');
    }
}
