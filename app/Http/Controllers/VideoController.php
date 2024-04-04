<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
      * Display a listing of the resource.
      */
    public function index()
    {
        $videos = Video::all();
        return view('backend.dashboard.views.videos.index', compact('videos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.dashboard.views.videos.create');

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
          "video" => "required|mimes:mp4,mov,avi,wmv|max:100000", // Adjust max file size as needed
        ]);
        if($request->type == 'main_image') {
            $validatedData['image'] = $this->ProcessImage($request, 'image', 'videos', null, true);
        } else {
            $validatedData['image'] = $this->ProcessImage($request, 'image', 'videos');

        }
        // Process the uploaded video file
        $videoPath = $request->file('video')->store('uploads/thumbnail/videos');

        // Save the video file path in the database
        Video::create([
            'title' => $validatedData['title'],
            'type' => $validatedData['type'],
            'image' => $validatedData['image'],
            'video_path' => $videoPath,
        ]);

        // Redirect back with success message
        return redirect()->route('videos.index')->with('toast_success', 'تم أنشاء الفيديو بنجاح');

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