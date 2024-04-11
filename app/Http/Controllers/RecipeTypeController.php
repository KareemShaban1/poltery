<?php

namespace App\Http\Controllers;

use App\Models\RecipeType;
use App\Http\Requests\StoreRecipeTypeRequest;
use App\Http\Requests\UpdateRecipeTypeRequest;
use Illuminate\Http\Request;

class RecipeTypeController extends Controller
{
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        //
        $recipeTypes = RecipeType::all();
        return view('backend.dashboard.views.recipesType.index', compact('recipeTypes'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name_en' => 'required|string',
            'name_ar' => 'nullable|string',
        ], [
            'name_en.required' => 'حقل الأسم مطلوب',
        ]);
        RecipeType::create($validatedData);
        return redirect()->route('recipeTypes.index')->with('toast_success', 'تم أضافة نوع وصفة بنجاح');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'name_en' => 'required|string',
            'name_ar' => 'nullable|string',
        ], [
            'name_en.required' => 'حقل الأسم مطلوب',
        ]);
        $recipeType = RecipeType::findOrFail($id);
        $recipeType->update($validatedData);
        return redirect()->route('recipeTypes.index')->with('toast_success', 'تم أضافة نوع وصفة بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $recipeType = RecipeType::findOrFail($id);
        $recipeType->delete();
        return redirect()->route('recipeTypes.index')->with('toast_success', 'تم أضافة نوع وصفة بنجاح');
    }
}
