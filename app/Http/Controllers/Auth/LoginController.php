<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
{
    // Validate the login request
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required|string|min:8',
    ]);

    // If validation fails, redirect back with errors
    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    // Check if the user exists and is active
    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return redirect()->back()->withErrors(['email' => 'No account found with this email.'])->withInput();
    }

    // Check if the user's account is active
    if ($user->status !== 'Active') {
        return redirect()->back()->withErrors(['email' => 'Your account is not activated.'])->withInput();
    }

    // Verify the password
    if (!Hash::check($request->password, $user->password)) {
        return redirect()->back()->withErrors(['password' => 'Invalid password.'])->withInput();
    }

    // Log the user in
    Auth::login($user);

    // Check the user's role and redirect accordingly
    if ($user->role === 'admin') {
        return redirect()->route('admin')->with('success', 'Logged in as admin successfully.');
    } else {
        return redirect()->route('my_space')->with('success', 'Logged in successfully.');
    }
}
}