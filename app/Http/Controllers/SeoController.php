<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SeoData;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $seoData = SeoData::all();
        return view('backend.dashboard.views.seo.index', compact('seoData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id, $type)
    {
        //

        return view('backend.dashboard.views.seo.create', compact('id', 'type'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'entity_type' => 'required',
            'entity_id' => 'required',
            'title' => 'required',
            'meta_description' => 'required',
            'keywords' => 'required',
            'canonical_url' => 'required',
            'og_title' => 'nullable',
            'og_description' => 'nullable',
            'og_image' => 'nullable',
            'og_url' => 'nullable',
            'og_type' => 'nullable',
            'og_site_name' => 'nullable',
            'og_updated_time' => 'nullable',
            'og_image_secure_url' => 'nullable',
            'og_image_height' => 'nullable',
            'og_image_width' => 'nullable',
            'og_image_alt' => 'nullable',
            'og_image_type' => 'nullable',
            'article_publisher' => 'nullable',
            'article_published_time' => 'nullable',
            'article_modified_time' => 'nullable',
            'twitter_title' => 'nullable',
            'twitter_description' => 'nullable',
            'twitter_image' => 'nullable',
            'twitter_card' => 'nullable',
        ]);

        // Extract the Open Graph and Twitter data
        $ogData = [
            'og_title' => $validatedData['og_title'],
            'og_description' => $validatedData['og_description'],
            'og_image' => $validatedData['og_image'],
            'og_url' => $validatedData['og_url'],
            'og_type' => $validatedData['og_type'],
            'og_site_name' => $validatedData['og_site_name'],
            'og_updated_time' => $validatedData['og_updated_time'],
            'og_image_secure_url' => $validatedData['og_image_secure_url'],
            'og_image_height' => $validatedData['og_image_height'],
            'og_image_width' => $validatedData['og_image_width'],
            'og_image_alt' => $validatedData['og_image_alt'],
            'og_image_type' => $validatedData['og_image_type'],
        ];


        $articleData = [
            'article_publisher' => $validatedData['article_publisher'],
            'article_published_time' => $validatedData['article_published_time'],
            'article_modified_time' => $validatedData['article_modified_time'],
        ];


        $twitterData = [
            'twitter_title' => $validatedData['twitter_title'],
            'twitter_description' => $validatedData['twitter_description'],
            'twitter_image' => $validatedData['twitter_image'],
            'twitter_card' => $validatedData['twitter_card'],
        ];

        // Remove the Open Graph and Twitter data from the validated data
        unset($validatedData['og_title'], $validatedData['og_description'], $validatedData['og_image'],
            $validatedData['og_url'],
            $validatedData['og_type'],
            $validatedData['og_site_name'],
            $validatedData['og_updated_time'],
            $validatedData['og_image_secure_url'],
            $validatedData['og_image_height'],
            $validatedData['og_image_width'],
            $validatedData['og_image_alt'],
            $validatedData['og_image_type'],);
        unset($validatedData['article_publisher'], $validatedData['article_published_time'], $validatedData['article_modified_time']);

        unset($validatedData['twitter_title'], $validatedData['twitter_description'], $validatedData['twitter_image'],$validatedData['twitter_card']);

        // Add the Open Graph and Twitter data to the structured_data field
        $structuredData = [
            'og' => $ogData,
            'article' => $articleData,
            'twitter' => $twitterData,
        ];

        $validatedData['structured_data'] = $structuredData;

        // Create a new SEOData instance and fill it with the validated data
        $seoData = new SeoData();
        $seoData->fill($validatedData);

        // Save the SEOData instance to the database
        $seoData->save();

        return redirect()->route('seo.index')
                        ->with('success', 'Seo Stored successfully');
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
    public function edit($id, $type)
    {
        //
        $seoData = SeoData::where('entity_id', $id)->where('entity_type', $type)->firstOrFail();
        return view('backend.dashboard.views.seo.edit', compact('seoData', 'id', 'type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
           'entity_type' => 'required',
           'entity_id' => 'required',
           'title' => 'required',
           'meta_description' => 'required',
           'keywords' => 'required',
           'canonical_url' => 'required',
           'og_title' => 'nullable',
           'og_description' => 'nullable',
           'og_image' => 'nullable',
           'og_url' => 'nullable',
           'og_type' => 'nullable',
           'og_site_name' => 'nullable',
           'og_updated_time' => 'nullable',
           'og_image_secure_url' => 'nullable',
           'og_image_height' => 'nullable',
           'og_image_width' => 'nullable',
           'og_image_alt' => 'nullable',
           'og_image_type' => 'nullable',
           'article_publisher' => 'nullable',
           'article_published_time' => 'nullable',
           'article_modified_time' => 'nullable',
           'twitter_title' => 'nullable',
           'twitter_description' => 'nullable',
           'twitter_image' => 'nullable',
           'twitter_card' => 'nullable',
        ]);

        // Extract the Open Graph and Twitter data
        $ogData = [
            'og_title' => $validatedData['og_title'],
            'og_description' => $validatedData['og_description'],
            'og_image' => $validatedData['og_image'],
            'og_url' => $validatedData['og_url'],
            'og_type' => $validatedData['og_type'],
            'og_site_name' => $validatedData['og_site_name'],
            'og_updated_time' => $validatedData['og_updated_time'],
            'og_image_secure_url' => $validatedData['og_image_secure_url'],
            'og_image_height' => $validatedData['og_image_height'],
            'og_image_width' => $validatedData['og_image_width'],
            'og_image_alt' => $validatedData['og_image_alt'],
            'og_image_type' => $validatedData['og_image_type'],
        ];


        $articleData = [
            'article_publisher' => $validatedData['article_publisher'],
            'article_published_time' => $validatedData['article_published_time'],
            'article_modified_time' => $validatedData['article_modified_time'],
        ];


        $twitterData = [
            'twitter_title' => $validatedData['twitter_title'],
            'twitter_description' => $validatedData['twitter_description'],
            'twitter_image' => $validatedData['twitter_image'],
            'twitter_card' => $validatedData['twitter_card'],
        ];

        // Remove the Open Graph and Twitter data from the validated data
        unset($validatedData['og_title'], $validatedData['og_description'], $validatedData['og_image'],
            $validatedData['og_url'],
            $validatedData['og_type'],
            $validatedData['og_site_name'],
            $validatedData['og_updated_time'],
            $validatedData['og_image_secure_url'],
            $validatedData['og_image_height'],
            $validatedData['og_image_width'],
            $validatedData['og_image_alt'],
            $validatedData['og_image_type'],);
        unset($validatedData['article_publisher'], $validatedData['article_published_time'], $validatedData['article_modified_time']);

        unset($validatedData['twitter_title'], $validatedData['twitter_description'], $validatedData['twitter_image'],$validatedData['twitter_card']);

        // Add the Open Graph and Twitter data to the structured_data field
        $structuredData = [
            'og' => $ogData,
            'article' => $articleData,
            'twitter' => $twitterData,
        ];

        $validatedData['structured_data'] = $structuredData;

        $seoData = SeoData::findOrFail($id);

        // Update the SEOData instance with the validated data
        $seoData->update($validatedData);

        return redirect()->route('seo.index')
                        ->with('success', 'Seo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}