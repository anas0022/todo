<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class Authmanager extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function login()
    {
        return view('login');
    }

    public function registration()
    {
        return view('rergistration');
    }

    public function loginpost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            // Retrieve the authenticated user
            $user = Auth::user();
    
            // Store user's name in the session
            session(['name' => $user->name]);
    
            return redirect()->route('home')->with('success', 'You have been logged in successfully.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Invalid credentials. Please try again.');
        }
    }
    
    public function registrationpost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
    
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
    
        $user = User::create($data);
    
        if (!$user) {
            return redirect(route('register'))->with("error", "Registration failed");
        }
    
        return redirect(route('login'))->with("success", "Registration successful. You can now login.");
    }
    

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
    public function welcome(){
        return view('welcome');
    }
}
