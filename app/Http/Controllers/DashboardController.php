<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Product;
use App\Models\Recipe;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $products = Product::get();
        $facilities = Facility::get();
        $recipes = Recipe::get();
        $sponsors = Sponsor::get();
        return view('backend.dashboard.views.index', compact('products', 'facilities', 'recipes', 'sponsors'));

    }
}
