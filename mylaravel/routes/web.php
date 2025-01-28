<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\MulTableController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;

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

Route::get('/register',
    [RegisterController::class,'index']);

Route::get('/home',
    [HomeController::class,'index']);

Route::get('/',
    [HomeController::class,'index']);