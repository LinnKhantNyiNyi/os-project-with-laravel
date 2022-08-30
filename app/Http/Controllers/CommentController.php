<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment(Product $product){
       request()->validate([
         "body"=>['required']
       ]);

       $product->comment()->create([
      "body"=>request('body'),
      "user_id"=>auth()->id()
      ]);

      return redirect('/show/'.$product->id);
    }
}
