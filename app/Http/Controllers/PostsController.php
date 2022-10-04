<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostsController extends Controller
{
    public function index(){
        return view('index',[
            "products"=>Product::latest()->filter(request(['search','category']))->get(),
            "categories"=>Category::all()
        ]);
    }

    public function show(Product $product){
        return view('show',[
            "product"=>$product,
            "comments"=>$product->comment()->latest()->get(), //use comment relation us function
            "categories"=>Category::all()
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
