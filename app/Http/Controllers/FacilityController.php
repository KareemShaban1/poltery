<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadImageTrait;
use App\Models\Facility;
use App\Models\FacilityCategory;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    use UploadImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $facilities = Facility::all();
        $categories = FacilityCategory::all();
        return view('backend.dashboard.views.facilities.index', compact('facilities', 'categories'));
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
            'content' => 'nullable|string',
            'category_id' => 'required',
            'image' => 'required'
        ], [
            'name_en.required' => 'حقل العنوان مطلوب',
            'category_id.required' => 'حقل المحتوى مطلوب',
            'image.required' => ' حقل الصورة مطلوب',
        ]);
        $validatedData['image'] = $this->ProcessImage($request, 'image', 'facilities');
        Facility::create($validatedData);
        return redirect()->route('facilities.index')->with('toast_success', 'تم أضافة خدمة / منتج بنجاح');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
        $facility = Facility::findOrFail($id);
        $validatedData['image'] = $request->image ? $this->ProcessImage($request, 'image', 'facilities') : $facility->image;
        $facility->update($validatedData);
        return redirect()->route('facilities.index')->with('toast_success', 'تم أضافة خدمة / منتج بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $facility = Facility::findOrFail($id);
        $facility->delete();
        return redirect()->route('facilities.index')->with('toast_success', 'تم أضافة خدمة / منتج بنجاح');

    }
}