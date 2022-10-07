<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ApplicationController extends Controller
{
    //admin_application----------------------------------------------------------------//

public function application(){
  return view('form.admin_application');
}

public function receive(){
     $formData=request()->validate([
  "email"=>["required",'email',Rule::unique('applications','email')],
  "name"=>["required",'min:4',"max:225",Rule::unique('applications','name')],
  "shopname"=>["required",'min:4',"max:225"],
  "ph_num"=>["required","min:11","max:11"],
  "shopaddress"=>["required","max:225"],
  "sellingproducts"=>["required","max:50","min:5"],
  "detail"=>["required","max:225","min:15"]
  
]);

Application::create($formData);
return redirect('/');
}




}
