<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Landingpages;
use App\Http\Controllers\Admin\ProduckKamiController;
use App\Http\Controllers\Admin\ProductController;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Facades\Route;


Route::get('/', [Landingpages::class, 'index']);

Route::controller(Landingpages::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/news', 'news')->name('news');
    Route::get('/shop', 'shop')->name('shop');
});

Route::resource('/checkout', CheckoutController::class);
Route::resource('/cart', CartController::class);
Route::middleware(['guest'])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login-store', 'loginStore')->name('login-store');
        Route::get('/register', 'register')->name('register');
        Route::post('/register-store', 'registerStore')->name('register-store');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index');
        Route::post('/logout', 'logout')->name('logout');
    });
    Route::resource('/dashboard/product-kami', ProduckKamiController::class);
    Route::resource('/dashboard/product', ProductController::class);
});
