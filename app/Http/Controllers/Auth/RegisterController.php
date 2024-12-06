<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\ActivationMail;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register_action(Request $request)
    {
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8',
        'image' => 'nullable|image',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $token = Str::random(64);
    $user->token = $token;

    if ($request->hasFile('image')) {
        $imageName = uniqid() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('User_profiles'), $imageName);
        $user->image = $imageName;
    }

    if ($user->save()) {
        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'token' => $token
        ];

        Mail::send('emails.activation', ['data' => $data], function ($message) use ($data) {
            $message->to($data['email'], $data['name'])
                    ->subject('Account Activation');
            $message->from("bharatjadeja896@gmail.com", "Your App Name");
        });

        session()->flash('success', 'Registration successful. A verification link has been sent to your email address.');
        return redirect('login');
    } else {
        session()->flash('error', 'Error in Registration');
        return redirect('register');
    }
}

        public function activateAccount($token)
        {
            $user = User::where('token', $token)->first();

            if (!$user) {
                session()->flash('error', 'Invalid activation token.');
                return redirect('login');
            }
        
            // Activate the account by setting status and clearing token
            $user->status = 'Active'; // This is passed as a string
            $user->token = null; // Clear the token after activation
            $user->updated_at = now(); // Set updated_at to the current timestamp
            $user->save();
        
            // Redirect the user to the login page with a success message
            session()->flash('success', 'Your account has been activated. You can now log in.');
            return redirect('login');
        }        
    }    