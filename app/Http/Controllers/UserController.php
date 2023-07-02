<?php

namespace App\Http\Controllers;

use App\Models\UsersMainApp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function loginPage()
    {
        return view("user.login");
    }

    public function registerPage()
    {
        return view("user.register");
    }

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
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users_main_app',
            'birthday' => 'required|date',
            'gender' => 'required',
            'phone' => 'required',
            'zipcode' => 'required',
            'country' => 'required',
            'address' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create a new user instance
        $user = UsersMainApp::create([
            'fullname' => $validatedData['name'],
            'email' => $validatedData['email'],
            'birthday' => $validatedData['birthday'],
            'gender' => $validatedData['gender'],
            'phone' => $validatedData['phone'],
            'zip_code' => $validatedData['zipcode'],
            'country' => $validatedData['country'],
            'address' => $validatedData['address'],
            'uuid' => bin2hex(random_bytes(3)),
            'password' => Hash::make($validatedData['password']),
        ]);

        if ($user) {
            // Automatically login the registered user
            Auth::guard('userMainApp')->login($user);

            // Redirect the user to the desired page after successful registration
            return redirect()->intended('/dashboard');
        } else {
            // Failed to create a new user
            return redirect()->back()->withErrors([
                'registration_error' => 'Failed to register the user. Please try again.',
            ]);
        }
    }
}
