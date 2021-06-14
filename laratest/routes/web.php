<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Dashboard', function () {
    return view('Dashboard');
}); 

Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'verify']);
Route::get('/home',[HomeController::class,'index']);
Route::get('/logout',[LogoutController::class,'index']);
Route::get('/user/list',[UserController::class,'index']);
Route::get('/user/details/{id}',[UserController::class,'details']);
//Route::get('/user/details/{id}', 'UserController@details');

Route::get('/register',function(){
    return "This is signup page";
});