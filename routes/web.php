<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('backend.dashboard.views.index');
    });

    Route::get('/pages', [PageController::class,'index'])->name('pages.index');
    Route::post('/page/store', [PageController::class,'store'])->name('pages.store');
    Route::put('/page/update/{id}', [PageController::class,'update'])->name('pages.update');
    Route::delete('/page/destroy/{id}', [PageController::class,'destroy'])->name('pages.destroy');


    Route::get('/products', [ProductController::class,'index'])->name('products.index');
    Route::post('/product/store', [ProductController::class,'store'])->name('products.store');
    Route::put('/product/update/{id}', [ProductController::class,'update'])->name('products.update');
    Route::delete('/product/destroy/{id}', [ProductController::class,'destroy'])->name('products.destroy');
    
    Route::get('/productsCategory', [ProductCategoryController::class,'index'])->name('productsCategory.index');
    Route::post('/productCategory/store', [ProductCategoryController::class,'store'])->name('productsCategory.store');
    Route::put('/productCategory/update/{id}', [ProductCategoryController::class,'update'])->name('productsCategory.update');
    Route::delete('/productCategory/destroy/{id}', [ProductCategoryController::class,'destroy'])->name('productsCategory.destroy');

});


Route::get('/home', function () {
    return view('frontend.pages.index');
})->name('home');

Route::get('/about-us', function () {
    return view('frontend.pages.about_us');
})->name('about-us');