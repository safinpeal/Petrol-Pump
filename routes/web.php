<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BuyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/add-product', function () {
        return view('product-form');
    });
    Route::get('/add-company', function () {
        return view('company-form');
    });
Route::resource('products', ProductController::class);
Route::resource('companies', CompanyController::class);
Route::get('/product-buy',[BuyController::class,'productBuy'])->name('product-buy');
Route::get('/product-receive',[BuyController::class,'productReceive'])->name('product-receive');

Route::post('/place-order',[BuyController::class,'placeOrder'])->name('place-order');
Route::post('/place-receive',[BuyController::class,'placeReceive'])->name('place-receive');


    
    
    

});

require __DIR__.'/auth.php';
