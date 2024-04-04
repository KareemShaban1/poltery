<?php

use App\Http\Controllers\websiteInfosController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FacilityCategoryController;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\Frontend\FacilitiesController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\Frontend\RecipesController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Models\Image;
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

        Route::get('/', [DashboardController::class,'index'])->name('dashboard');

        Route::group([], function () {
            Route::get('users', [UserController::class,'index'])->name('users.index');
            Route::get('users/create/{id}', [UserController::class,'create'])->name('users.create');
            Route::post('users/store', [UserController::class,'store'])->name('users.store');
            Route::get('users/edit/{id}', [UserController::class,'edit'])->name('users.edit');
            Route::put('users/update/{id}', [UserController::class,'update'])->name('users.update');
            Route::delete('users/destroy/{id}', [UserController::class,'destroy'])->name('users.destroy');
        });

        Route::group([], function () {
            Route::get('seo', [SeoController::class,'index'])->name('seo.index');
            Route::get('seo/create/{id}/{type}', [SeoController::class,'create'])->name('seo.create');
            Route::post('seo/store', [SeoController::class,'store'])->name('seo.store');
            Route::get('seo/edit/{id}/{type}', [SeoController::class,'edit'])->name('seo.edit');
            Route::put('seo/update/{id}', [SeoController::class,'update'])->name('seo.update');
            Route::delete('seo/destroy/{id}', [SeoController::class,'destroy'])->name('seo.destroy');
        });

        Route::group([], function () {
            Route::get('recipes', [RecipeController::class,'index'])->name('recipes.index');
            Route::get('recipes/create', [RecipeController::class,'create'])->name('recipes.create');
            Route::post('recipes/store', [RecipeController::class,'store'])->name('recipes.store');
            Route::get('recipes/edit/{id}', [RecipeController::class,'edit'])->name('recipes.edit');
            Route::put('recipes/update/{id}', [RecipeController::class,'update'])->name('recipes.update');
            Route::delete('recipes/destroy/{id}', [RecipeController::class,'destroy'])->name('recipes.destroy');
        });

        Route::group([], function () {
            Route::get('info', [InfoController::class,'index'])->name('info.index');
            Route::get('info/create', [InfoController::class,'create'])->name('info.create');
            Route::post('info/store', [InfoController::class,'store'])->name('info.store');
            Route::get('info/edit/{id}', [InfoController::class,'edit'])->name('info.edit');
            Route::put('info/update/{id}', [InfoController::class,'update'])->name('info.update');
            Route::delete('info/destroy/{id}', [InfoController::class,'destroy'])->name('info.destroy');
        });


        Route::group([], function () {
            Route::get('videos', [VideoController::class,'index'])->name('videos.index');
            Route::post('videos/store', [VideoController::class,'store'])->name('videos.store');
            Route::get('videos/edit/{id}', [VideoController::class,'edit'])->name('videos.edit');
            Route::delete('videos/destroy/{id}', [VideoController::class,'destroy'])->name('videos.destroy');
        });

        Route::group([], function () {
            Route::get('/pages', [PageController::class,'index'])->name('pages.index');
            Route::post('/page/store', [PageController::class,'store'])->name('pages.store');
            Route::put('/page/update/{id}', [PageController::class,'update'])->name('pages.update');
            Route::delete('/page/destroy/{id}', [PageController::class,'destroy'])->name('pages.destroy');
        });

        Route::group([], function () {
            Route::get('/products', [ProductController::class,'index'])->name('products.index');
            Route::post('/product/store', [ProductController::class,'store'])->name('products.store');
            Route::put('/product/update/{id}', [ProductController::class,'update'])->name('products.update');
            Route::delete('/product/destroy/{id}', [ProductController::class,'destroy'])->name('products.destroy');
        });
        Route::group([], function () {
            Route::get('/productsCategory', [ProductCategoryController::class,'index'])->name('productsCategory.index');
            Route::post('/productCategory/store', [ProductCategoryController::class,'store'])->name('productsCategory.store');
            Route::put('/productCategory/update/{id}', [ProductCategoryController::class,'update'])->name('productsCategory.update');
            Route::delete('/productCategory/destroy/{id}', [ProductCategoryController::class,'destroy'])->name('productsCategory.destroy');
        });

        Route::group([], function () {
            Route::get('/sponsors', [SponsorController::class,'index'])->name('sponsors.index');
            Route::post('/sponsor/store', [SponsorController::class,'store'])->name('sponsors.store');
            Route::put('/sponsor/update/{id}', [SponsorController::class,'update'])->name('sponsors.update');
            Route::delete('/sponsor/destroy/{id}', [SponsorController::class,'destroy'])->name('sponsors.destroy');
        });

        Route::group([], function () {
            Route::get('/images', [ImageController::class,'index'])->name('images.index');
            Route::post('/image/store', [ImageController::class,'store'])->name('images.store');
            Route::put('/image/update/{id}', [ImageController::class,'update'])->name('images.update');
            Route::delete('/image/destroy/{id}', [ImageController::class,'destroy'])->name('images.destroy');
        });


        Route::group([], function () {
            Route::get('/facilities', [FacilityController::class,'index'])->name('facilities.index');
            Route::post('/facility/store', [FacilityController::class,'store'])->name('facilities.store');
            Route::put('/facility/update/{id}', [FacilityController::class,'update'])->name('facilities.update');
            Route::delete('/facility/destroy/{id}', [FacilityController::class,'destroy'])->name('facilities.destroy');
        });
        Route::group([], function () {
            Route::get('/facilitiesCategory', [FacilityCategoryController::class,'index'])->name('facilitiesCategory.index');
            Route::post('/facilityCategory/store', [FacilityCategoryController::class,'store'])->name('facilitiesCategory.store');
            Route::put('/facilityCategory/update/{id}', [FacilityCategoryController::class,'update'])->name('facilitiesCategory.update');
            Route::delete('/facilityCategory/destroy/{id}', [FacilityCategoryController::class,'destroy'])->name('facilitiesCategory.destroy');
        });
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

        Route::get('/product/productCategory/{id}', [ProductsController::class,'productCategory'])->name('products.productCategory');


        Route::get('/recipes', [RecipesController::class,'index'])->name('recipes');
        Route::get('/recipeDetails/{id}', [RecipesController::class,'show'])->name('recipeDetails');


        Route::get('/contact-us', function () {
            return view('frontend.pages.contact_us');
        })->name('contact-us');

    }
);