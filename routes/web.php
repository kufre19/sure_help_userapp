<?php

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


Route::any('test-page', function () {
    return view("store.store-index");
});


