<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users  = User::all();
        return view('backend.dashboard.views.users.index', compact('users'));
    }



    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Create a new user instance
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        // Redirect back with success message
        return redirect()->route('users.index')->with('toast_success', 'User created successfully.');
    }


    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8',
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);

        // Update the user details
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];

        // Update the password if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($validatedData['password']);
        }

        $user->save();

        // Redirect back with success message
        return redirect()->route('users.index')->with('toast_success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::findOrFail($id);
        $user->delete();
        // Redirect back with success message
        return redirect()->route('users.index')->with('toast_success', 'User deleted successfully.');

    }
}