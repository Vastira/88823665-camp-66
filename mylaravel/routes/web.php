<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\MulTableController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckLogin;
use App\Http\Controllers\ProductController;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/hello', function () {
    return "<h1>Hello World!</h1>";
});
 
Route::get("/mycontroller/{id?}",
    [MyController::class,'myfunction']);

Route::post("/mycontroller/{id?}",
    [MyController::class,'myfunction']);

Route::get("/mymultable",
    [MulTableController::class,'input_mul']);

Route::post("/mymultable",
    [MulTableController::class,'input_mul']);

/* Route::get('/', function() {
    return view('layouts.default');
}); */

Route::get('/login',
    [LoginController::class,'index']);

Route::post('/login',
    [LoginController::class,'login']);

Route::get('/logout', function(){
    session()->forget('user');
    return redirect('/login');
    });

Route::get('/register',
    [RegisterController::class,'index']);

Route::post('/register',
    [RegisterController::class,'create']);

Route::get('/home',
    [HomeController::class,'index']);

Route::get('/',
    [HomeController::class,'index']);

Route::middleware([CheckLogin::class])->group(function () {
Route::get('/user',
    [UserController::class,'index']);
Route::get('/user/{id}',
    [UserController::class,'edit']);
Route::put('/user',
    [UserController::class,'edit_action']);
Route::get('/user/delete{id}',
    [UserController::class,'delete']);
Route::delete('/user',
    [UserController::class,'delete']);
});

Route::get('/product', [ProductController::class, 'index'])->middleware([CheckLogin::class,]);
Route::post('/product', [ProductController::class, 'store'])->middleware([CheckLogin::class,]);