<?php

namespace App\Http\Controllers;

use App\Models\UsersMainApp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard("userMainApp")->attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/dashboard');
        } else {
            // Invalid credentials
            return redirect()->back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    public function register(Request $request)
    {
       
        
    
        // dd("ok");
        // Create a new user
        $user = UsersMainApp::create([
            'fullname' => $request['name'],
            'email' => $request['email'],
            "uuid"=>bin2hex(random_bytes(3)),
            'password' => Hash::make($request['password']),
        ]);
    
        if ($user) {
            // Automatically login the registered user
            Auth::guard("userMainApp")->login($user);
    
            return redirect()->intended('/dashboard');
        } else {
            // Failed to create a new user
            return redirect()->back()->withErrors([
                'registration_error' => 'Failed to register the user. Please try again.',
            ]);
        }
    }
    

}
