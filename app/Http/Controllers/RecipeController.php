<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadImageTrait;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    use UploadImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $recipes = Recipe::all();

        return view('backend.dashboard.views.recipes.index', compact('recipes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.dashboard.views.recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
        'title_en' => 'required|string|max:255',
        'title_ar' => 'nullable|string|max:255',
        'type_en' => 'required|string|max:255',
            'type_ar' => 'nullable|string|max:255',
        'description_en' => 'required|string',
        'description_ar' => 'nullable|string',
        'ingredients_en' => 'required|string',
        'ingredients_ar' => 'nullable|string',
        'preparation_en' => 'required|string',
        'preparation_ar' => 'nullable|string',
        'image' => 'required|image'
        ]);
        $validatedData['image'] = $this->ProcessImage($request, 'image', 'recipes');

        Recipe::create($validatedData);

        return redirect()->route('recipes.index')->with('toast_success', 'تم أضافة خدمة / منتج بنجاح');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $recipe = Recipe::findOrFail($id);
        return view('backend.dashboard.views.recipes.edit', compact('recipe'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // dd($request->all());
        $recipe = Recipe::findOrFail($id);

        $validatedData = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'nullable|string|max:255',
            'type_en' => 'required|string|max:255',
            'type_ar' => 'nullable|string|max:255',
            'description_en' => 'required|string',
            'description_ar' => 'nullable|string',
            'ingredients_en' => 'required|string',
            'ingredients_ar' => 'nullable|string',
            'preparation_en' => 'required|string',
            'preparation_ar' => 'nullable|string',
            'image' => 'sometimes'
            ]);
        $validatedData['image'] = $request->image ? $this->ProcessImage($request, 'image', 'recipes') : $recipe->image;

        // dd($validatedData);

        $recipe->update($validatedData);

        return redirect()->route('recipes.index')->with('toast_success', 'تم أضافة خدمة / منتج بنجاح');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
