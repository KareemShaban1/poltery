<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadImageTrait;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    use UploadImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = Image::all();
        // return view('backend.das');

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
        //
        $validatedData = $request->validate([
          "title" => "nullable|string",
          "image" => "required",
          "type" => "required|string",
          "product_id" => "sometimes|exists:products,id",
          "facility_id" => "sometimes|exists:facilities,id",
          "recipe_id" => "sometimes|exists:recipes,id",
        ]);
        $validatedData['image'] = $this->ProcessImage($request, 'image', 'images');
        Image::create($validatedData);

        if($request->type == "facility_image") {
            return redirect()->route('facilities.index')->with('toast_success', 'تم أنشاء الصورة بنجاح');

        }

        // return redirect()->route('images.index')->with('toast_success', 'تم أنشاء الصورة بنجاح');

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