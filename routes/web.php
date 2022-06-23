<?php

use App\Models\Admin;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index',[
        'products' => Product::all()
    ]);
});

Route::get('/show', function () {
    return view('show');
});

Route::get('/register',function(){
    return view('form.register');
});

Route::get('/login',function(){
    return view('form.login');
});

Route::get('/create',function(){
    return view('auth.create');
});

Route::get('/buy',function(){
    return view('order');
});