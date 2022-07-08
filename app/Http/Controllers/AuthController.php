<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

  //Register page-------------------------------------------------------------------//
  public function register(){
    return view('form.register');
}

public function store(){
 $formData=request()->validate([
  "email"=>["required",'email'],
  "name"=>["required",'min:4',"max:225"],
   "password"=>["required",'min:8',"max:225"]
 ]);

$user=User::create($formData);
auth()->login($user);
return redirect('/');

// $user=User::create($formData);
    // auth()->login($user);
}

//login page-----------------------------------------------------------------------//
public function login(){
    return view('form.login');
}

//admin page-----------------------------------------------------------------------//
public function create(){
     return view('auth.create');
}
}
