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

Route::get('/', [App\Http\Controllers\WebController::class, "home"]);
Route::get('about', [App\Http\Controllers\WebController::class, "about"]);
Route::get('contact', [App\Http\Controllers\WebController::class, "contact"]);

// store route
Route::get("store", [\App\Http\Controllers\FreeStore::class, "index"]);


Route::get("login", [\App\Http\Controllers\UserController::class, "loginPage"])->name("login");
Route::get("register", [\App\Http\Controllers\UserController::class, "registerPage"]);
Route::post("login", [\App\Http\Controllers\UserController::class, "login"]);
Route::post("register", [\App\Http\Controllers\UserController::class, "register"]);





Route::group(["middleware" => "auth:userMainApp"], function () {
    Route::get("dashboard", [App\Http\Controllers\DashboardController::class,"home"]);
});

Route::any('test-page', function () {
    return view("user.dashboard.index");
});
