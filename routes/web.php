<?php

use App\Http\Controllers\cartController;
use App\Http\Controllers\functionController;
use App\Http\Controllers\viewController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(viewController::class)->group(function(){
    Route::get('/',"index")->name("index");
    Route::get('/register',"register")->name("register");
    Route::get('/login',"login")->name("login");
});

Route::controller(functionController::class)->group(function(){
    Route::post('/register',"register_user")->name("register_user");
    Route::post('/login',"login_user")->name("login_user");
    Route::post('/logout',"logout")->name("logout");
});

Route::controller(cartController::class)->group(function(){
    Route::get('/detail/{id}',"details")->name("addcart")->middleware('auth');
    Route::get('/cartlist',"cartlist")->name('cartlist');
    Route::post('/detail/{id}',"addcart")->name('addcart');
    Route::put('/cartlist',"checkout")->name("checkout");
    Route::get('/history',"history")->name("history");
});