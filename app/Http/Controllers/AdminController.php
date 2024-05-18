<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('forexadmin.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            if (auth()->user()->admin) {
                return redirect()->intended('/forexadmin/dashboard');
            } else {
                Auth::logout();
                return back()->withErrors(['adminerr' => 'You are not authorized to access the admin panel.']);
            }
        }

        return back()->withErrors(['adminerr' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/forexadmin');
    }
}
