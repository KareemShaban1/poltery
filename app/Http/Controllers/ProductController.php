<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadImageTrait;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use UploadImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        $categories = ProductCategory::all();
        return view('backend.dashboard.views.products.index', compact('products', 'categories'));
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
            'category_id' => 'required',
            'image' => 'required'
        ], [
            'name_en.required' => 'حقل العنوان مطلوب',
            'category_id.required' => 'حقل المحتوى مطلوب',
            'image.required' => ' حقل الصورة مطلوب',
        ]);
        $validatedData['image'] = $this->ProcessImage($request, 'image', 'products');
        // dd($request->all(), $validatedData);
        Product::create($validatedData);
        return redirect()->route('products.index')->with('toast_success', 'تم أضافة منتج بنجاح');

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
    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
           'name_en' => 'required|string',
           'name_ar' => 'nullable|string',
           'category_id' => 'required',
           'image' => 'sometimes'
        ], [
           'name_en.required' => 'حقل العنوان مطلوب',
           'category_id.required' => 'حقل المحتوى مطلوب',
        ]);
        $product = Product::findOrFail($id);
        $oldImage = $product->image;
        $validatedData['image'] = $request->image ? $this->ProcessImage($request, 'image', 'products', $oldImage) : $oldImage;
        $product->update($validatedData);
        return redirect()->route('products.index')->with('toast_success', 'تم تعديل منتج بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('toast_success', 'تم خذف  منتج بنجاح');

    }
}