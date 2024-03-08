<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadImageTrait;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    use UploadImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pages = Page::all();
        return view('backend.dashboard.views.pages.index', compact('pages'));
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
            'title_en' => 'required|string',
            'title_ar' => 'nullable|string',
            'active' => 'required|boolean',
            'content' => 'required|string',
            'image' => 'required'
        ], [
            'title_en.required' => 'حقل العنوان مطلوب',
            'active.required' => 'حقل النشط مطلوب',
            'content.required' => 'حقل المحتوى مطلوب',
            'image.required' => ' حقل الصورة مطلوب',
        ]);
        $validatedData['image'] = $this->ProcessImage($request, 'image', 'pages');
        // dd($request->all(), $validatedData);
        Page::create($validatedData);
        return redirect()->route('pages.index')->with('toast_success', 'تم أضافة خدمة / منتج بنجاح');

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
        // dd($request->all());
        //
        $validatedData = $request->validate([
            'title_en' => 'required|string',
            'title_ar' => 'nullable|string',
            'active' => 'required|boolean',
            'content' => 'required|string',
            'image' => 'sometimes'
        ], [
            'title_en.required' => 'حقل العنوان مطلوب',
            'active.required' => 'حقل النشط مطلوب',
            'content.required' => 'حقل المحتوى مطلوب',
        ]);

        // dd($request->all(), $validatedData);
        $page = Page::findOrFail($id);
        $validatedData['image'] = $request->image ? $this->ProcessImage($request, 'image', 'pages') : $page->image;
        $page->update($validatedData);
        return redirect()->route('pages.index')->with('toast_success', 'تم أضافة خدمة / منتج بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}