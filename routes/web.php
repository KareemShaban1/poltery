<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FacilityCategoryController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\Frontend\FacilitiesController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/dashboard',
        'middleware' => ['auth', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function () {

        Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');


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



        Route::get('/facilities', [FacilityController::class,'index'])->name('facilities.index');
        Route::post('/facility/store', [FacilityController::class,'store'])->name('facilities.store');
        Route::put('/facility/update/{id}', [FacilityController::class,'update'])->name('facilities.update');
        Route::delete('/facility/destroy/{id}', [FacilityController::class,'destroy'])->name('facilities.destroy');

        Route::get('/facilitiesCategory', [FacilityCategoryController::class,'index'])->name('facilitiesCategory.index');
        Route::post('/facilityCategory/store', [FacilityCategoryController::class,'store'])->name('facilitiesCategory.store');
        Route::put('/facilityCategory/update/{id}', [FacilityCategoryController::class,'update'])->name('facilitiesCategory.update');
        Route::delete('/facilityCategory/destroy/{id}', [FacilityCategoryController::class,'destroy'])->name('facilitiesCategory.destroy');

    }
);

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function () {
        Route::get('/', function () {
            return view('frontend.pages.index');
        })->name('home');

        Route::get('/about-us', function () {
            return view('frontend.pages.about_us');
        })->name('about-us');
        Route::get('/facilities', [FacilitiesController::class,'index'])->name('facilities');

        Route::get('/products', [ProductsController::class,'index'])->name('products');

        Route::get('/recipes', function () {
            return view('frontend.pages.recipes');
        })->name('recipes');

        Route::get('/contact-us', function () {
            return view('frontend.pages.contact_us');
        })->name('contact-us');
    }
);