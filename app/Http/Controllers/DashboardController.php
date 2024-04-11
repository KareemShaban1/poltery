<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Image;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Recipe;
use App\Models\Sponsor;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $products = Product::get();
        $productCategories = ProductCategory::get();
        $facilities = Facility::get();
        $recipes = Recipe::get();
        $sponsors = Sponsor::get();
        $images = Image::get();
        $videos = Video::get();
        $users = User::get();
        return view(
            'backend.dashboard.views.index',
            compact('users', 'products', 'productCategories', 'facilities', 'recipes', 'sponsors', 'images', 'videos')
        );

    }
}