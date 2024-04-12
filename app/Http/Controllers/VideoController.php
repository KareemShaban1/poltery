<?php

namespace App\Http\Controllers;

use App\Http\Traits\UploadImageTrait;
use App\Models\Image;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    use UploadImageTrait;
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
        $video = $request->file('video'); // Get the original name of the video file
        $videoFileName =  time() . '.' . $video->getClientOriginalExtension();
        $videoPath = $request->file('video')->storeAs('uploads/thumbnail/videos', $videoFileName);

        // Save the video file path in the database
        Video::create([
            'title' => $validatedData['title'],
            'type' => $validatedData['type'],
            'image' => $validatedData['image'],
            'video' => $videoFileName, // Save the video file name instead of its path
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

    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'nullable|string',
            'image' => 'nullable',
            'type' => 'required|string',
            'video' => 'nullable|mimes:mp4,mov,avi,wmv|max:100000', // Adjust max file size as needed
        ]);

        // Retrieve the video record
        $video = Video::findOrFail($id);

        // Update the video's title and type
        $video->title = $validatedData['title'];
        $video->type = $validatedData['type'];

        // Update the image if provided
        if ($request->hasFile('image')) {
            $validatedData['image'] = $this->ProcessImage($request, 'image', 'videos');
            $video->image = $validatedData['image'];
        }

        // Update the video file if provided
        if ($request->hasFile('video')) {
            $videoFile = $request->file('video');
            $videoFileName = time() . '.' . $videoFile->getClientOriginalExtension();
            $videoPath = $videoFile->storeAs('uploads/thumbnail/videos', $videoFileName);
            $video->video = $videoFileName;
        }

        // Save the updated video
        $video->save();

        // Redirect back with success message
        return redirect()->route('videos.index')->with('toast_success', 'تم تحديث الفيديو بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $video = Video::findOrFail($id);
        $video->delete();

        // Redirect back with success message
        return redirect()->route('videos.index')->with('toast_success', 'تم حذف الفيديو بنجاح');

    }
}