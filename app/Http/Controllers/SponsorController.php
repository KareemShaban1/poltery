<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadImageTrait;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    use UploadImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sponsors = Sponsor::all();
        return view('backend.dashboard.views.sponsors.index', compact('sponsors'));
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
            'image' => 'required'
        ], [
            'name_en.required' => 'حقل العنوان مطلوب',
            'image.required' => ' حقل الصورة مطلوب',
        ]);
        $validatedData['image'] = $this->ProcessImage($request, 'image', 'sponsors');
        // dd($request->all(), $validatedData);
        Sponsor::create($validatedData);
        return redirect()->route('sponsors.index')->with('toast_success', 'تم أضافة خدمة / منتج بنجاح');

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
           'image' => 'sometimes'
        ], [
           'name_en.required' => 'حقل العنوان مطلوب',
           'category_id.required' => 'حقل المحتوى مطلوب',
        ]);
        $sponsor = Sponsor::findOrFail($id);
        $validatedData['image'] = $request->image ? $this->ProcessImage($request, 'image', 'sponsors') : $sponsor->image;
        $sponsor->update($validatedData);
        return redirect()->route('sponsors.index')->with('toast_success', 'تم أضافة خدمة / منتج بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $sponsor = Sponsor::findOrFail($id);
        $sponsor->delete();
        return redirect()->route('sponsors.index')->with('toast_success', 'تم أضافة خدمة / منتج بنجاح');

    }
}
