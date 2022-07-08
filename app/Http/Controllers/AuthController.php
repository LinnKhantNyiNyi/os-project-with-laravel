<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

  public function register(){
    return view('form.register');
}

public function login(){
    return view('form.login');
}

public function create(){
     return view('auth.create');
}
}
