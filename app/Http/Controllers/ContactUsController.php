<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Http\Requests\StoreContactUsRequest;
use App\Http\Requests\UpdateContactUsRequest;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $contactUs = ContactUs::all();
        return view('backend.dashboard.views.contactUs.index', compact('contactUs', ));

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
        // Validate the form data
        $validatedData = $request->validate([
         'name' => 'required|string|max:255',
         'email' => 'required|string|email|max:255|unique:users',
         'number' => 'required|string|min:11',
         'message' => 'required|string',

        ]);

        // Create a new user instance
        $contactUs = ContactUs::create($validatedData);


        // Redirect back with success message
        return redirect()->route('home')->with('toast_success', 'Message Send successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
}
