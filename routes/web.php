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





Route::group(["middleware" => "auth:userMainApp","prefix"=>"dashboard"], function () {
    Route::get("/", [App\Http\Controllers\DashboardController::class,"home"]);

    // request routes
    Route::get("/request/new", [App\Http\Controllers\DashboardController::class,"newRequestPage"]);
    Route::post("/request/create", [App\Http\Controllers\DashboardController::class,"createRequest"]);

    Route::get("my/request", [App\Http\Controllers\DashboardController::class,"home"]);


    // inbox routes
    Route::get("inbox/messages", [App\Http\Controllers\DashboardController::class,"listMessages"]);
    // remove the optional later so it won't cause issues in the future
    Route::get("inbox/message/{id?}", [App\Http\Controllers\DashboardController::class,"readMessage"]);

    // store routes
    Route::get("store/wish-list/", [App\Http\Controllers\DashboardController::class,"UserWishList"]);

    // account settings
    Route::get("account/settings", [App\Http\Controllers\DashboardController::class,"accountSettingsPage"]);
    Route::post("account/settings/update", [App\Http\Controllers\DashboardController::class,"accountSettingsUpdate"]);








});

Route::any('test-page', function () {
    return view("user.dashboard.index");
});

