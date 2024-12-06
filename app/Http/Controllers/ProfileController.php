<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ProfileController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
public function show()
{
    return view('my_space');
}

    public function edit()
    {
        $user = Auth::user();
        return view('Edit_profile', compact('user'));
    }

    public function update(Request $request)
{
    $user = Auth::user();

    // Validate input
    $validated = $request->validate([
        'update_name' => 'required|string|max:255',
        'update_email' => 'required|email|max:255|unique:users,email,' . $user->id,
        'update_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'update_pass' => 'nullable|string|min:8',
        'new_pass' => 'nullable|string|min:8',
    ]);

    // Update user details
    $user->name = $validated['update_name'];
    $user->email = $validated['update_email'];

    // Handle profile picture
    if ($request->hasFile('update_image')) {
        // Delete old profile picture if it exists
        if ($user->image && file_exists(public_path('User_profiles/' . $user->image))) {
            unlink(public_path('User_profiles/' . $user->image));
        }

        // Store new profile image in the public/User_profiles folder
        $image = $request->file('update_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension(); // Create a unique filename
        $image->move(public_path('User_profiles'), $imageName); // Save the image to the public/User_profiles folder
        $user->image = $imageName; // Save the image name in the database
    }

    // Handle password update
    if ($request->filled('update_pass')) {
        if (!Hash::check($request->input('update_pass'), $user->password)) {
            return redirect()->back()->withErrors(['update_pass' => 'Current password is incorrect.'])->withInput();
        }

        if ($request->input('new_pass') !== $request->input('confirm_pass')) {
            return redirect()->back()->withErrors(['confirm_pass' => 'New password and confirm password do not match.'])->withInput();
        }

        $user->password = Hash::make($request->input('new_pass'));
    }

    $user->save();

    return redirect()->route('Edit_profile')->with('success', 'Profile updated successfully.');
}
    public function switchToKidMode()
    {
        session(['mode' => 'kid']);
        return redirect()->route('kid'); // Redirect to the kid's homepage
    }

    public function switchToNormalMode()
    {
        session()->forget('mode'); // Clear the mode from the session
        return redirect()->route('index'); // Redirect to the normal user's My Space
    }

}
