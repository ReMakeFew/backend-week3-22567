<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//http://127.0.0.1:8000/
Route::get('/', function () {
    return view('welcome');
});

Route::view('home', 'home');
Route::view('about', 'about');
Route::view('admin', 'adminlogin');

Route::get('user-home',[UserController::class,'userHome']);
Route::get('about-home',[UserController::class,'aboutHome']);    
Route::get('admin-login',[UserController::class,'adminLogin']);  