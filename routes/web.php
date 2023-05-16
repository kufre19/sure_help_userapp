<?php

use Illuminate\Support\Facades\Auth;
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

/* web routes */

Route::get('/', [App\Http\Controllers\WebController::class,"home"]);
Route::get('about', [App\Http\Controllers\WebController::class,"about"]);
Route::get('contact', [App\Http\Controllers\WebController::class,"contact"]);

// store route
Route::get("store",[\App\Http\Controllers\FreeStore::class,"index"]);


Route::get("login",[]);
Route::post("login",[\App\Http\Controllers\UserController::class,"login"]);
Route::post("register",[\App\Http\Controllers\UserController::class,"register"]);
Route::get("dashboard",function(){
dd(Auth::guard("userMainApp")->user());
});



Route::group(["middleware"=>"auth:userMainApp"],function()
{

});

Route::any('test-page', function () {
    return view("user.register");
});


