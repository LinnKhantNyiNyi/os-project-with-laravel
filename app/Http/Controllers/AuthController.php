<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

$user=User::create($formData);
auth()->login($user);
return redirect('/');


}

//login page-----------------------------------------------------------------------//
public function login(){
    return view('form.login');
}

//admin page-----------------------------------------------------------------------//
public function create(){
     return view('auth.create');
}



//logout-------------------------------------------------------------------------//
public function logout(){
    auth()->logout();
    return redirect('/');
}


}



