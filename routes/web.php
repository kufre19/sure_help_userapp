<?php

use App\Http\Controllers\FreeStore;
use App\Http\Controllers\SponsorDashboardController;
use Illuminate\Http\Request;
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


Route::get('/create-storage-link', function () {
    Artisan::call('storage:link');
    return 'The symbolic link has been created.';
});
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Cache cleared';
});

Route::get('/route-cache', function() {
    Artisan::call('route:cache');
    return 'Route cache cleared';
});

// Add more routes as needed

Route::get("login", [\App\Http\Controllers\UserController::class, "loginPage"])->name("login");
Route::get("logout", [\App\Http\Controllers\UserController::class, "logout"])->name("logout");
Route::get("register", [\App\Http\Controllers\UserController::class, "registerPage"]);
Route::get("sponsor/register", [\App\Http\Controllers\UserController::class, "sponsorRegisterPage"]);
Route::post("login", [\App\Http\Controllers\UserController::class, "login"]);
Route::post("register", [\App\Http\Controllers\UserController::class, "register"]);
Route::post("sponsor/register", [\App\Http\Controllers\UserController::class, "sponsorRegister"]);



Route::post('/upload', function (Request $request) {
    $image = $request->file('image');
    $targetDir =public_path("uploads");
    $image->move($targetDir, $image->getClientOriginalName());
    return back()->with('success', 'File has been uploaded.');
});



Route::group(["middleware" => "auth:userMainApp","prefix"=>"dashboard"], function () {
    Route::get("/", [App\Http\Controllers\DashboardController::class,"home"]);

    // request routes
    Route::get("/request/new", [App\Http\Controllers\DashboardController::class,"newRequestPage"]);
    Route::post("/request/create", [App\Http\Controllers\DashboardController::class,"createRequest"]);
    Route::post("/request/delete/{id}", [App\Http\Controllers\DashboardController::class,"deleteRequest"]);


    Route::get("my/request", [App\Http\Controllers\DashboardController::class,"home"]);


    // inbox routes
    Route::get("inbox/messages", [App\Http\Controllers\DashboardController::class,"listMessages"]);
    // remove the optional later so it won't cause issues in the future
    Route::get("inbox/message/{id?}", [App\Http\Controllers\DashboardController::class,"readMessage"]);

    // store routes

    // account settings
    Route::get("account/settings", [App\Http\Controllers\DashboardController::class,"accountSettingsPage"]);
    Route::post("account/settings/update", [App\Http\Controllers\DashboardController::class,"accountSettingsUpdate"]);

    Route::post("account/settings/change-password", [App\Http\Controllers\DashboardController::class, "changePassword"]);



    // authenticated wish list route
    Route::get("wishlist/add/item/{id}",[FreeStore::class,"wishlist_add"]);
    Route::get("wishlist/remove/{id}",[FreeStore::class,"wishlist_remove"]);
    Route::get("store/wish-list/", [App\Http\Controllers\DashboardController::class,"UserWishList"]);





});


Route::group(["middleware" => "auth:userSponsor","prefix"=>"sponsor/dashboard"], function () {
    Route::get("/", [SponsorDashboardController::class,"home"]);

    Route::get("/help-requests", [SponsorDashboardController::class,"helpRequests"]);



    // request routes
    Route::get("/request/new", [SponsorDashboardController::class,"newRequestPage"]);
    Route::post("/request/create", [App\Http\Controllers\DashboardController::class,"createRequest"]);

    Route::get("my/request", [App\Http\Controllers\DashboardController::class,"home"]);


    // inbox routes
    Route::get("inbox/messages", [App\Http\Controllers\DashboardController::class,"listMessages"]);
    // remove the optional later so it won't cause issues in the future
    Route::get("inbox/message/{id?}", [App\Http\Controllers\DashboardController::class,"readMessage"]);

    // store routes
    Route::get("store/wish-list/", [App\Http\Controllers\DashboardController::class,"UserWishList"]);

    // account settings
    Route::get("account/settings", [SponsorDashboardController::class,"accountSettingsPage"]);
    Route::post("account/settings/update", [SponsorDashboardController::class,"accountSettingsUpdate"]);

    Route::post("account/settings/change-password", [SponsorDashboardController::class, "changePassword"]);
    Route::post("account/settings/change-help-offer", [SponsorDashboardController::class, "changeHelpOffer"]);


    // Help requests
    Route::get("request/view/user/{id}", [App\Http\Controllers\SponsorDashboardController::class,"ViewPostUSer"]);
    // Add this to your web.php or api.php
    Route::get('/inbox/message/{id}', [App\Http\Controllers\SponsorDashboardController::class, 'getMessage']);




});
// SPONSOR USER URL ENDS HERE

Route::any('test-page', function () {
    return view("user.dashboard.index");
});

