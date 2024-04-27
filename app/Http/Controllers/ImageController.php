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
        $images = Image::where('type', '<>', 'facility_image')->get();
        return view('backend.dashboard.views.images.index', compact('images'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.dashboard.views.images.create');

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
        if($request->type == 'main_image') {
            $validatedData['image'] = $this->ProcessImage($request, 'image', 'images', null, true);
        } else {
            $validatedData['image'] = $this->ProcessImage($request, 'image', 'images');

        }
        Image::create($validatedData);

        if($request->type == "facility_image") {
            return redirect()->route('facilities.index')->with('toast_success', 'تم أضافة الصورة بنجاح');
        }

        return redirect()->route('images.index')->with('toast_success', 'تم أضافة الصورة بنجاح');

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
        $image = Image::findOrFail($id);

        $validatedData = $request->validate([
            "title" => "nullable|string",
            "image" => "nullable", // Make the image field nullable for update
            "type" => "required|string",
            "product_id" => "sometimes|exists:products,id",
            "facility_id" => "sometimes|exists:facilities,id",
            "recipe_id" => "sometimes|exists:recipes,id",
        ]);

        if ($request->hasFile('image')) {
            // If a new image is uploaded, process it
            $validatedData['image'] = $this->ProcessImage($request, 'image', 'images');
        }

        $image->update($validatedData);

        if ($image->type == "facility_image") {
            return redirect()->route('facilities.index')->with('toast_success', 'تم تحديث الصورة بنجاح');
        }

        return redirect()->route('images.index')->with('toast_success', 'تم تحديث الصورة بنجاح');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $image = Image::findOrFail($id);

        $image->delete();
        if($image->type == "facility_image") {
            return redirect()->route('facilities.index')->with('toast_success', 'تم حذف الصورة بنجاح');
        }

        return redirect()->route('images.index')->with('toast_success', 'تم حذف الصورة بنجاح');


    }
}
