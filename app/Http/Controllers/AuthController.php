<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function showSignUpForm()
    {
        
        if (Auth::check()) {
            return redirect ()->route('dashboard');
        }
        else {
            return view('dashboard.pages.authentification.registration');
        }
        
    }

    public function showLoginForm()
    {
        
        if (Auth::check()) {
            return redirect ()->route('dashboard');
        }
        else {
                return view('dashboard.pages.authentification.login');

        }
        
    }
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string',
        ]); 
        if (Auth::attempt($request->only('name', 'password'))) {
            // Authentication passed...
            return redirect()->route('dashboard');
        } else {
            return back()->withErrors([
                'name' => 'The provided credentials do not match our records.',
            ]);
            
        }
    }
    public function signup(Request $request)
    {
        \Log::info('Signup attempt', $request->all());
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
        ]);
        \Log::info('Validation passed', $validatedData);
// Création de l'utilisateur
        
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password') ),
        ]);
        
        \Log::info('User created: ' . $user->id);

        return redirect()->route('login')->with('success', 'Account created successfully. Please login.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
