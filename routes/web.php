<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\AuthController;
use App\Http\Controllers\Authcontroller;

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

// Route::get('nregister', function () {
//    return view('layout/nregister');
// });
Route::get('/', function () {  
    return view('layout/header');
});
//Route::get('dashboard', function () {  
  //  return view('layout/dashboard');
//});
//Route::get('register', function () {  
    //return view('layout/register');
//});
//Route::get("nregister",[Authcontroller::class,"nregister"]);
Route::get("/nregister",[Authcontroller::class,"register"])->name('register');
Route::get("/dashboard",[Authcontroller::class,"dashboard"])->name('dashboard');
Route::get("/login",[Authcontroller::class,"login"])->name('login');
Route::post("/login",[Authcontroller::class,"loginpost"])->name('login.post');
Route::post("/register",[Authcontroller::class,"registerpost"])->name('register.post');
