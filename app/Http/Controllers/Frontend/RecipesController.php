<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use App\Models\RecipeType;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $recipes = Recipe::all();
        $recipeTypes = RecipeType::all();
        return view('frontend.pages.recipes', compact('recipes','recipeTypes'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $recipe = Recipe::findOrFail($id);
        return view('frontend.pages.recipeDetails', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}