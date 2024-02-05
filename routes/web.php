<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\cart_controller;
use App\Http\Controllers\OpenaiController;
use App\Http\Controllers\StripeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::get('/',[HomeController::class,'index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect']);

route::get('/view_category',[AdminController::class,'view_category']);

route::post('/add_category',[AdminController::class,'add_category']);

route::get('/delete_category/{id}',[AdminController::class,'delete_category']);

route::get('/view_product',[AdminController::class,'view_product']);

route::post('/add_product',[AdminController::class,'add_product']);

route::get('/show_product',[AdminController::class,'show_product']);

route::get('/show_quote',[AdminController::class,'show_quote']);

route::get('/delete_product/{id}',[AdminController::class,'delete_product']);

route::get('/delete_quote/{id}',[AdminController::class,'delete_quote']);

route::get('/update_product/{id}',[AdminController::class,'update_product']);

route::get('/update_quote/{id}',[AdminController::class,'update_quote']);

route::get('/update_user/{id}',[AdminController::class,'update_user']);

route::get('/users',[AdminController::class,'user']);

route::get('/deleteuser/{id}',[AdminController::class,'deleteuser']);

route::get('/view_quote',[AdminController::class,'view_quote']);

route::post('/quote',[AdminController::class,'quote']);

route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);

route::post('/update_quote_confirm/{id}',[AdminController::class,'update_quote_confirm']);

route::get('/product_details/{id}',[HomeController::class,'product_details']);

route::post('/add_cart/{id}',[HomeController::class,'add_cart']);


Route::get('/chat', [OpenaiController::class, 'index']);

Route::post('/chat', [OpenaiController::class, 'getResponse']);

route::get('/show_cart',[HomeController::class,'show_cart']);

route::get('/delete_cart/{id}',[HomeController::class,'delete_cart']);

route::get('/cash_order',[HomeController::class,'cash_order']);

route::get('/stripe/{totalprice}',[HomeController::class,'stripe']);

Route::post('stripePost', [HomeController::class, 'stripePost'])->name('stripe.post');

Route::get('/success',[StripeController::class,'success'])->name('success');

Route::post('/checkout',[StripeController::class,'checkout'])->name('checkout');

route::get('/admin_order',[AdminController::class,'admin_order']);

route::get('/deliver/{id}',[AdminController::class,'deliver']);

route::get('/print_pdf/{id}',[AdminController::class,'print_pdf']);

route::get('/delete_order/{id}',[AdminController::class,'delete_order']);




