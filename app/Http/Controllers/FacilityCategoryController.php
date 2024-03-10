<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadImageTrait;
use App\Models\Facility;
use App\Models\FacilityCategory;
use Illuminate\Http\Request;

class FacilityCategoryController extends Controller
{
    use UploadImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = FacilityCategory::all();
        return view('backend.dashboard.views.facilitiesCategory.index', compact('categories'));

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
        $validatedData['image'] = $this->ProcessImage($request, 'image', 'facilitiesCategory');
        FacilityCategory::create($validatedData);
        return redirect()->route('facilitiesCategory.index')->with('toast_success', 'تم أضافة خدمة / منتج بنجاح');

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
            'image' => 'nullable'
        ], [
            'name_en.required' => 'حقل الأسم مطلوب',
        ]);
        $facilityCategory = FacilityCategory::findOrFail($id);
        $validatedData['image'] = $request->image ? $this->ProcessImage($request, 'image', 'facilitiesCategory') : $facilityCategory->image;
        $facilityCategory->update($validatedData);
        return redirect()->route('facilitiesCategory.index')->with('toast_success', 'تم أضافة خدمة / منتج بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $facilityCategory = FacilityCategory::findOrFail($id);
        $facilityCategory->delete();
        return redirect()->route('facilitiesCategory.index')->with('toast_success', 'تم أضافة خدمة / منتج بنجاح');
    }
}
