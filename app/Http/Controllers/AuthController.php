<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Application;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Validation\Rule;
use Symfony\Component\CssSelector\Node\FunctionNode;

class AuthController extends Controller
{

  //Register page-------------------------------------------------------------------//
  public function register(){
    return view('form.register');
}

public function store(){
 $formData=request()->validate([
  "email"=>["required",'email',Rule::unique('users','email')],
  "name"=>["required",'min:4',"max:225",Rule::unique('users','name')],
   "password"=>["required",'min:8',"max:225"]
 ]);

 $formData['password']=bcrypt($formData['password']);

$user=User::create($formData);
auth()->login($user);
return redirect('/');


}

//login page-----------------------------------------------------------------------//
public function login(){
    return view('form.login');
}

public function relogin(){
  $formData=request()->validate([
  "email"=>["required",'email',Rule::exists('users','email')],
   "password"=>["required",'min:8',"max:225"]
 ]);

 if(auth()->attempt($formData)){
         return redirect('/');
 } else {
         return redirect()->back()->withErrors([
          "email"=>"email or password is incorrect"
      ]);
 }
 
}

//logout-------------------------------------------------------------------------//
public function logout(){
    auth()->logout();
    return redirect('/');
}

//admin page-----------------------------------------------------------------------//
public function create(){
     return view('auth.create');
}


//owner page--------------------------------------------------------------------//
public function owner(){
  return view('auth.owner',[
    'applications'=>Application::all(),
    'admins'=>Admin::all(),
    'users'=>User::all()
  ]);
}









}



