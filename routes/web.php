<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'productList'])->name('productList');
Route::post('/', [PostController::class, 'productList'])->name('productList');

Route::get("/cart",[CartController::class,'getInformation'])->name('cart.getInformation');

Route::post("/receipt",[CartController::class,'receipt'])->name('cart.receipt');

Route::get('/test', function () {
    return view('test');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/thanks', function () {
    return view('thanks');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/menu', function () {
    return view('menu');
});
