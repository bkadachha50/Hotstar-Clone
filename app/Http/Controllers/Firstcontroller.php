<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpMail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class Firstcontroller extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function search()
    {
        return view('search');
    }
    public function my_space()
    {
        return view('my_space');
    }
    public function movies()
    {
        return view('movies');
    }
    public function sports()
    {
        return view('sports');
    }
    public function categories()
    {
        return view('categories');
    }
    public function subcription()
    {
        return view('subcription');
    }
    public function admin()
    {
        return view('admin');
    }
    public function content()
    {
        return view('content');
    }
    public function user()
    {
        return view('user');
    }
    public function subcribe()
    {
        return view('subcribe');
    }

    public function EditProfile()
    {
        return view('Edit_profile');
    }
    
    public function updateProfile(Request $request)
    {
        $validatedData = $request->validate([
            'update_name' => 'required|string|max:255',
            'update_email' => 'required|email|max:255|unique:users,email,' . auth()->id(),
            'update_image' => 'required|nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'update_pass' => 'required',
            'new_pass' => 'required|nullable|min:8',
            'confirm_pass' => 'required|nullable|same:new_pass',
        ], [
            'update_name.required' => 'The name field is required.',
            'update_email.required' => 'The email field is required.',
            'update_email.email' => 'The email must be a valid email address.',
            'update_email.unique' => 'The email has already been taken.',
            'update_image.image' => 'The file must be an image.',
            'update_image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'update_pass.required_with' => 'The old password is required when changing the password.',
            'new_pass.min' => 'The new password must be at least 8 characters.',
            'confirm_pass.same' => 'New password and confirm password do not match',
        ]);
    
        return redirect()->route('admin');
    }

     public function showForgetPasswordForm()
     {
         return view('forget_pass');
     }
 
     public function sendOtp(Request $request)
     {
         $request->validate([
             'email' => 'required|email|exists:users,email',
         ]);
 
         // Generate OTP
         $otp = rand(100000, 999999);
         
         // Store OTP in the password_resets table
         DB::table('password_resets')->updateOrInsert(
             ['email' => $request->email],
             [
                 'otp' => $otp,
                 'created_at' => Carbon::now()
             ]
         );

        
         Mail::to($request->email)->send(new OtpMail($otp));
 
         return redirect()->route('otp_form')->with('email', $request->email);
     }
 
     public function showOtpForm()
     {
         return view('forget_pass_otp');
     }
 
 
     public function verifyOtp(Request $request)
     {
         $request->validate([
             'otp' => 'required|numeric',
             'email' => 'required|email|exists:users,email', // Ensure email is provided and exists
         ]);
     
         // Check OTP from the password_resets table where the email matches
         $otpEntry = DB::table('password_resets')
                       ->where('email', $request->email)
                       ->where('otp', $request->otp)
                       ->first();
     
         // Validate OTP and its expiration time (1 minute)
         if ($otpEntry && Carbon::parse($otpEntry->created_at)->addMinutes(1)->isFuture()) {
             // Redirect to the new_password route with the user's email stored in session
             return redirect()->route('new_password')->with('email', $request->email);
         } else {
             // If OTP is invalid or expired, return with an error message
             return back()->withErrors(['otp' => 'Invalid or expired OTP']);
         }
     }
     

     
     public function showNewPasswordForm()
     {
         return view('new_password');
     }
 
     // Step 6: Update the password
     public function resetPassword(Request $request)
     {
         $request->validate([
             'password' => 'required|confirmed|min:6',
             'email' => 'required|email|exists:users,email',
         ]);
     
         // Update the user's password
         $user = User::where('email', $request->email)->first();
         $user->update([
             'password' => Hash::make($request->password),
         ]);
     
         // Delete OTP entry after password reset
         DB::table('password_resets')->where('email', $request->email)->delete();
     
         // Redirect to login page with a success message
         return redirect()->route('login')->with('message', 'Password reset successfully');
     }     
     
}


