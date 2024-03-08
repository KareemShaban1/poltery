<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadImageTrait;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    use UploadImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = ProductCategory::all();
        return view('backend.dashboard.views.productsCategory.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
            'image' => 'nullable'
        ], [
            'name_en.required' => 'حقل الأسم مطلوب',
        ]);
        $validatedData['image'] = $this->ProcessImage($request, 'image', 'productsCategory');
        ProductCategory::create($validatedData);
        return redirect()->route('productsCategory.index')->with('toast_success', 'تم أضافة خدمة / منتج بنجاح');

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
