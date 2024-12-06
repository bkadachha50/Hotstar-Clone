<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all(); 
        return view('user', compact('user'));
    }

    public function delete(Request $request)
    {
        $user = User::find($request->input('user_id'));
        if ($user) {
            $user->delete();
        }
        return redirect()->route('user');
    }
    // UserController.php
public function edit($id)
{
    $user = User::find($id);
    return view('edit-user', compact('user'));
}

public function update(Request $request, $id)
{
    $user = User::find($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'status' => 'required|string|max:255',
        'role' => 'required|string|max:255',
        'password' => 'nullable|string|min:8', // Optional password validation
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional image validation
    ]);

    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->status = $request->input('status');
    $user->role = $request->input('role');

    if ($request->filled('password')) {
        $user->password = bcrypt($request->input('password'));
    }

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('User_profiles', 'public');
        if ($user->image) {
            Storage::delete('public/User_profiles/' . $user->image);
        }
        $user->image = $imagePath;
    }
    if ($request->hasFile('image')) {
        $imageName = uniqid() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('User_profiles'), $imageName);
        $user->image = $imageName;
    }

    $user->save();

    return redirect()->route('user')->with('success', 'User updated successfully');
}

}
