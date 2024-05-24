<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLogin;
use App\Http\Requests\UserRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function loginPage()
    {
        if (Auth::check()) {
            return view('home');
        } else {
            return view('auth.login');
        }
    }
    public function registerPage()
    {
        if (Auth::check()) {
            return view('home');
        } else {
            return view('auth.register');
        }
    }
    public function login(UserLogin $request)
    {
        // Check if the email and password are correct
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::check() && Auth::user()->roles == 'guest') {
                return redirect()->route('home')->with('message', 'Successfully Login');
            } else if (Auth::check() && Auth::user()->roles == 'admin') {
                return redirect()->route('dashboard')->with('message', 'Successfully Login');
            } else {
                return redirect()->back()->with('message', 'Something went wrong');
            }
        } else {
            return redirect()->back()->withErrors(['email' => 'The email or password is incorrect.'])->withInput();
        }
    }

    public function register(UserRegister $request)
    {

        // Check if the email already exists
        if (User::where('email', $request->email)->exists()) {
            return redirect()->back()->withErrors(['email' => 'The email is already registered.'])->withInput();
        }

        $success = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => $request->password,
            'updated_at' => now(),
            'created_at' => now()
        ]);

        return redirect()->route('blade.login');
    }
}
